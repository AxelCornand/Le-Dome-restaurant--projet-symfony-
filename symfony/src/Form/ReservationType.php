<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'placeholder' => 'Votre prénom',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir votre prénom']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'Le prénom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le prénom ne peut pas contenir plus de {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Votre nom',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir votre nom']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le nom ne peut pas contenir plus de {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'votre@email.com',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir votre email']),
                    new Assert\Email(['message' => 'L\'email {{ value }} n\'est pas valide'])
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => 'Téléphone',
                'attr' => [
                    'placeholder' => '06 12 34 56 78',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir votre numéro de téléphone']),
                    new Assert\Regex([
                        'pattern' => '/^[0-9\s\.\-\+\(\)]{10,20}$/',
                        'message' => 'Veuillez saisir un numéro de téléphone valide'
                    ])
                ]
            ])
            ->add('reservationDate', DateTimeType::class, [
                'label' => 'Date et heure de réservation',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control',
                    'min' => (new \DateTime('tomorrow'))->format('Y-m-d\TH:i')
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir une date et une heure']),
                    new Assert\GreaterThan([
                        'value' => 'now',
                        'message' => 'La date de réservation doit être dans le futur'
                    ]),
                    new Assert\Callback(function($value, $context) {
                        if ($value instanceof \DateTimeInterface) {
                            $dayOfWeek = (int)$value->format('N'); // 1 (lundi) à 7 (dimanche)
                            if ($dayOfWeek === 7) {
                                $context->buildViolation('Les réservations ne sont pas disponibles le dimanche')
                                    ->addViolation();
                            }
                            
                            $hour = (int)$value->format('H');
                            if ($hour < 12 || $hour >= 14) {
                                $context->buildViolation('Les réservations sont uniquement possibles entre 12h00 et 14h00')
                                    ->addViolation();
                            }
                        }
                    })
                ]
            ])
            ->add('numberOfPeople', IntegerType::class, [
                'label' => 'Nombre de personnes',
                'attr' => [
                    'min' => 1,
                    'max' => 20,
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez indiquer le nombre de personnes']),
                    new Assert\Range([
                        'min' => 1,
                        'max' => 20,
                        'notInRangeMessage' => 'Le nombre de personnes doit être entre {{ min }} et {{ max }}'
                    ])
                ]
            ])
            ->add('specialRequests', TextareaType::class, [
                'label' => 'Demandes spéciales (optionnel)',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Allergies, anniversaire, disposition particulière...',
                    'class' => 'form-control',
                    'rows' => 3
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}