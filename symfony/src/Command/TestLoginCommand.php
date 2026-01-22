<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(name: 'app:test-login')]
class TestLoginCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private UserPasswordHasherInterface $passwordHasher
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $email = 'adminledome@admin.fr';
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            $io->error('❌ Utilisateur non trouvé : ' . $email);
            return Command::FAILURE;
        }

        $io->success('✅ Utilisateur trouvé');
        $io->table(
            ['Champ', 'Valeur'],
            [
                ['Email', $user->getEmail()],
                ['ID', $user->getId()],
                ['Rôles', implode(', ', $user->getRoles())],
                ['Hash (30 premiers caractères)', substr($user->getPassword(), 0, 30) . '...'],
            ]
        );

        $io->section('Test des mots de passe');
        
        $passwordsToTest = [
            'admin1234',
            'Admin1234',
            'ADMIN1234',
            'admin',
            'password',
            'test123',
        ];
        
        $found = false;
        foreach ($passwordsToTest as $pwd) {
            if ($this->passwordHasher->isPasswordValid($user, $pwd)) {
                $io->success("✅✅✅ LE BON MOT DE PASSE EST : $pwd");
                $found = true;
                break;
            } else {
                $io->text("❌ '$pwd' ne fonctionne pas");
            }
        }
        
        if (!$found) {
            $io->error('❌ Aucun des mots de passe testés ne fonctionne !');
            $io->warning('Le hash ne correspond à aucun mot de passe connu.');
            $io->info('Solution : Recréez le hash avec la bonne commande.');
        }

        return $found ? Command::SUCCESS : Command::FAILURE;
    }
}