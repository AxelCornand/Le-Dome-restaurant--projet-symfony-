<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    #[Route('/', name: 'app_reservation', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $reservation = new Reservation();
        $reservation->setCreatedAt(new \DateTime());
        
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservation);
            $entityManager->flush();

            // Envoyer un email de confirmation
            try {
                $email = (new Email())
                    ->from('noreply@ledome.fr')
                    ->to($reservation->getEmail())
                    // Changez cette adresse par la vôtre pour recevoir les notifications
                    ->cc('restaurant@ledome.fr')
                    ->subject('Confirmation de réservation - Restaurant Le Dome')
                    ->html($this->renderView('emails/reservation_confirmation.html.twig', [
                        'reservation' => $reservation
                    ]));

                $mailer->send($email);
                
                $this->addFlash('success', 'Votre réservation a été enregistrée avec succès ! Un email de confirmation vous a été envoyé.');
            } catch (\Exception $e) {
                $this->addFlash('warning', 'Votre réservation a été enregistrée, mais l\'email de confirmation n\'a pas pu être envoyé.');
            }

            return $this->redirectToRoute('app_home');
        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/admin', name: 'app_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository): Response
    {
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La réservation a été modifiée avec succès.');

            return $this->redirectToRoute('app_reservation_index');
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();
            
            $this->addFlash('success', 'La réservation a été supprimée avec succès.');
        }

        return $this->redirectToRoute('app_reservation_index');
    }
}