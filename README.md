<img width="1899" height="871" alt="image" src="https://github.com/user-attachments/assets/502d049e-67bf-4366-9e4f-5f29d17a4e71" />

# Restaurant Le Dome

Site web de gestion de restaurant développé avec Symfony 7.2.

## Fonctionnalités

- Affichage du menu avec catégories et allergènes
- Système de réservation (lundi-samedi 12h-14h)
- Formulaire de contact avec notification email
- Interface d'administration sécurisée (ROLE_ADMIN)
- CRUD pour la gestion des plats, catégories et allergènes

## Technologies

- **Backend** : Symfony 7.2, PHP 8.3
- **Base de données** : PostgreSQL 16
- **Frontend** : Bootstrap 5.3, Twig
- **Docker** : Conteneurisation complète

## Installation

### Prérequis

- Docker et Docker Compose
- Git

### Étapes

1. Cloner le projet :
```bash
git clone https://github.com/VOTRE-USERNAME/Le-Dome-restaurant--projet-symfony.git
cd restaurant-symfony
```

2. Lancer Docker :
```bash
docker-compose up -d
```

3. Installer les dépendances :
```bash
docker-compose exec php composer install
```

4. Créer la base de données :
```bash
docker-compose exec php bin/console doctrine:database:create
docker-compose exec php bin/console doctrine:migrations:migrate
```

5. Charger les données de test :
```bash
docker-compose exec php bin/console doctrine:fixtures:load
```

6. Créer un compte admin :
```bash
docker-compose exec php bin/console app:create-admin
```

7. Accéder au site :
- **Site** : http://localhost:8080
- **Admin** : http://localhost:8080/login
