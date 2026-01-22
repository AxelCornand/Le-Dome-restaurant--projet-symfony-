<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $contact = new Contact();
        $contact->setCreatedAt(new \DateTime());
        
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($contact);
            $entityManager->flush();

            // Envoyer un email au restaurant
            try {
                $email = (new Email())
                    ->from($contact->getEmail())
                    // MODIFIEZ CETTE ADRESSE PAR LA VÔTRE
                    ->to('restaurant@legourmet.fr')
                    ->subject('Nouveau message de contact - ' . $contact->getFirstName() . ' ' . $contact->getLastName())
                    ->html($this->renderView('emails/contact_notification.html.twig', [
                        'contact' => $contact
                    ]));

                $mailer->send($email);
                
                // Email de confirmation au client
                $confirmEmail = (new Email())
                    ->from('noreply@legourmet.fr')
                    ->to($contact->getEmail())
                    ->subject('Votre message a bien été reçu - Restaurant Le Gourmet')
                    ->html($this->renderView('emails/contact_confirmation.html.twig', [
                        'contact' => $contact
                    ]));

                $mailer->send($confirmEmail);
                
                $this->addFlash('success', 'Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.');
            } catch (\Exception $e) {
                $this->addFlash('warning', 'Votre message a été enregistré, mais l\'email n\'a pas pu être envoyé.');
            }

            return $this->redirectToRoute('app_home');
        }

        return $this->render('contact/new.html.twig', [
            'contact' => $contact,
            'form' => $form,
        ]);
    }
}