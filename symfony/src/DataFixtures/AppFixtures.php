<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\SubCategory;
use App\Entity\Allergen;
use App\Entity\Dish;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // 1. CRÉER LES ALLERGÈNES
        $allergensData = [
            'Gluten', 'Lactose', 'Fruits à coque', 'Œufs', 'Poisson', 
            'Crustacés', 'Soja', 'Céleri', 'Moutarde', 'Sésame'
        ];
        
        $allergens = [];
        foreach ($allergensData as $allergenName) {
            $allergen = new Allergen();
            $allergen->setName($allergenName);
            $manager->persist($allergen);
            $allergens[$allergenName] = $allergen;
        }

        // 2. CRÉER LES CATÉGORIES PRINCIPALES
        $entrees = new Category();
        $entrees->setName('Entrées')->setSlug('entrees');
        $manager->persist($entrees);

        $platsChauds = new Category();
        $platsChauds->setName('Plats Chauds')->setSlug('plats-chauds');
        $manager->persist($platsChauds);

        $fromages = new Category();
        $fromages->setName('Fromages')->setSlug('fromages');
        $manager->persist($fromages);

        $desserts = new Category();
        $desserts->setName('Desserts')->setSlug('desserts');
        $manager->persist($desserts);

        $boissonsSoft = new Category();
        $boissonsSoft->setName('Boissons Soft')->setSlug('boissons-soft');
        $manager->persist($boissonsSoft);

        $boissonsAlcool = new Category();
        $boissonsAlcool->setName('Boissons Alcool')->setSlug('boissons-alcool');
        $manager->persist($boissonsAlcool);

        $manager->flush();

        // 3. CRÉER LES SOUS-CATÉGORIES (pour Plats Chauds)
        $burgers = new SubCategory();
        $burgers->setName('Burgers')->setSlug('burgers')->setCategory($platsChauds);
        $manager->persist($burgers);

        $viandes = new SubCategory();
        $viandes->setName('Viandes')->setSlug('viandes')->setCategory($platsChauds);
        $manager->persist($viandes);

        $pates = new SubCategory();
        $pates->setName('Pâtes')->setSlug('pates')->setCategory($platsChauds);
        $manager->persist($pates);

        $tartares = new SubCategory();
        $tartares->setName('Tartares')->setSlug('tartares')->setCategory($platsChauds);
        $manager->persist($tartares);

        $poissons = new SubCategory();
        $poissons->setName('Poissons')->setSlug('poissons')->setCategory($platsChauds);
        $manager->persist($poissons);

        $manager->flush();

        // 4. CRÉER LES PLATS

        // ENTRÉES
        $this->createDish($manager, 'Salade César', 'Laitue romaine, poulet grillé, croûtons, parmesan, sauce César', 12.50, $entrees, null, [$allergens['Gluten'], $allergens['Lactose'], $allergens['Œufs']]);
        $this->createDish($manager, 'Soupe à l\'oignon', 'Gratinée au fromage, servie avec des croûtons', 8.50, $entrees, null, [$allergens['Gluten'], $allergens['Lactose']]);
        $this->createDish($manager, 'Carpaccio de bœuf', 'Viande de bœuf finement tranchée, roquette, parmesan', 15.00, $entrees, null, [$allergens['Lactose']]);
        $this->createDish($manager, 'Escargots de Bourgogne', '6 escargots au beurre persillé', 11.00, $entrees, null, [$allergens['Lactose']]);

        // BURGERS
        $this->createDish($manager, 'Burger Classique', 'Steak haché 180g, cheddar, tomate, salade, oignons', 16.00, $platsChauds, $burgers, [$allergens['Gluten'], $allergens['Lactose'], $allergens['Œufs']]);
        $this->createDish($manager, 'Burger BBQ Bacon', 'Steak haché 180g, bacon, cheddar, oignons frits, sauce BBQ', 18.00, $platsChauds, $burgers, [$allergens['Gluten'], $allergens['Lactose'], $allergens['Œufs']]);
        $this->createDish($manager, 'Burger Végétarien', 'Galette de légumes, emmental, tomate, salade, sauce curry', 15.00, $platsChauds, $burgers, [$allergens['Gluten'], $allergens['Lactose'], $allergens['Œufs']]);
        $this->createDish($manager, 'Burger Gourmet', 'Steak haché 200g, foie gras, confit d\'oignons, roquette', 22.00, $platsChauds, $burgers, [$allergens['Gluten'], $allergens['Lactose'], $allergens['Œufs']]);

        // VIANDES
        $this->createDish($manager, 'Entrecôte de bœuf', 'Pièce de 300g, sauce au poivre, frites maison', 24.00, $platsChauds, $viandes, [$allergens['Lactose']]);
        $this->createDish($manager, 'Magret de canard', 'Cuit rosé, sauce aux figues, gratin dauphinois', 22.00, $platsChauds, $viandes, [$allergens['Lactose']]);
        $this->createDish($manager, 'Pavé de bœuf', 'Pièce de 250g, sauce béarnaise, légumes de saison', 26.00, $platsChauds, $viandes, [$allergens['Lactose'], $allergens['Œufs']]);
        $this->createDish($manager, 'Côte d\'agneau', 'Grillée, herbes de Provence, ratatouille', 23.00, $platsChauds, $viandes, []);

        // PÂTES
        $this->createDish($manager, 'Spaghetti Carbonara', 'Lardons, crème, parmesan, jaune d\'œuf', 14.00, $platsChauds, $pates, [$allergens['Gluten'], $allergens['Lactose'], $allergens['Œufs']]);
        $this->createDish($manager, 'Penne Arrabbiata', 'Sauce tomate épicée, ail, basilic', 12.00, $platsChauds, $pates, [$allergens['Gluten']]);
        $this->createDish($manager, 'Tagliatelle aux fruits de mer', 'Gambas, moules, calamars, sauce au vin blanc', 18.00, $platsChauds, $pates, [$allergens['Gluten'], $allergens['Crustacés']]);
        $this->createDish($manager, 'Lasagnes bolognaise', 'Viande hachée, béchamel, parmesan', 15.00, $platsChauds, $pates, [$allergens['Gluten'], $allergens['Lactose']]);

        // TARTARES
        $this->createDish($manager, 'Tartare de bœuf classique', '200g de bœuf haché au couteau, assaisonnement maison', 19.00, $platsChauds, $tartares, [$allergens['Œufs'], $allergens['Moutarde']]);
        $this->createDish($manager, 'Tartare de saumon', 'Saumon frais, avocat, citron vert, ciboulette', 18.00, $platsChauds, $tartares, [$allergens['Poisson']]);
        $this->createDish($manager, 'Tartare de thon', 'Thon rouge, mangue, sésame, sauce soja', 20.00, $platsChauds, $tartares, [$allergens['Poisson'], $allergens['Sésame'], $allergens['Soja']]);

        // POISSONS
        $this->createDish($manager, 'Pavé de saumon grillé', 'Sauce à l\'oseille, riz basmati, légumes vapeur', 21.00, $platsChauds, $poissons, [$allergens['Poisson'], $allergens['Lactose']]);
        $this->createDish($manager, 'Sole meunière', 'Beurre citronné, pommes vapeur, haricots verts', 24.00, $platsChauds, $poissons, [$allergens['Poisson'], $allergens['Lactose']]);
        $this->createDish($manager, 'Dos de cabillaud', 'Purée de céleri, sauce vierge', 22.00, $platsChauds, $poissons, [$allergens['Poisson'], $allergens['Céleri']]);
        $this->createDish($manager, 'Pavé de bar', 'Risotto aux asperges, beurre blanc', 25.00, $platsChauds, $poissons, [$allergens['Poisson'], $allergens['Lactose']]);

        // FROMAGES
        $this->createDish($manager, 'Plateau de fromages', 'Sélection de 5 fromages français, confiture de figues', 12.00, $fromages, null, [$allergens['Lactose']]);
        $this->createDish($manager, 'Camembert rôti', 'Au four, miel, thym, pain grillé', 10.00, $fromages, null, [$allergens['Lactose'], $allergens['Gluten']]);

        // DESSERTS
        $this->createDish($manager, 'Tarte Tatin', 'Pommes caramélisées, chantilly maison', 8.50, $desserts, null, [$allergens['Gluten'], $allergens['Lactose'], $allergens['Œufs']]);
        $this->createDish($manager, 'Profiteroles', 'Choux garnis de glace vanille, sauce chocolat chaud', 9.00, $desserts, null, [$allergens['Gluten'], $allergens['Lactose'], $allergens['Œufs']]);
        $this->createDish($manager, 'Crème brûlée', 'Vanille de Madagascar', 7.50, $desserts, null, [$allergens['Lactose'], $allergens['Œufs']]);
        $this->createDish($manager, 'Fondant au chocolat', 'Cœur coulant, glace vanille', 8.00, $desserts, null, [$allergens['Gluten'], $allergens['Lactose'], $allergens['Œufs']]);
        $this->createDish($manager, 'Salade de fruits frais', 'Fruits de saison, sorbet citron', 7.00, $desserts, null, []);

        // BOISSONS SOFT
        $this->createDish($manager, 'Coca-Cola', '33cl', 3.50, $boissonsSoft, null, []);
        $this->createDish($manager, 'Coca-Cola Zero', '33cl', 3.50, $boissonsSoft, null, []);
        $this->createDish($manager, 'Orangina', '33cl', 3.50, $boissonsSoft, null, []);
        $this->createDish($manager, 'Limonade maison', '50cl', 4.50, $boissonsSoft, null, []);
        $this->createDish($manager, 'Jus d\'orange pressé', '25cl', 5.00, $boissonsSoft, null, []);
        $this->createDish($manager, 'Perrier', '33cl', 3.00, $boissonsSoft, null, []);
        $this->createDish($manager, 'Café expresso', null, 2.50, $boissonsSoft, null, []);
        $this->createDish($manager, 'Thé', 'Sélection de thés', 3.00, $boissonsSoft, null, []);

        // BOISSONS ALCOOL
        $this->createDish($manager, 'Vin rouge - Bordeaux', 'Verre 12cl', 6.00, $boissonsAlcool, null, []);
        $this->createDish($manager, 'Vin blanc - Chablis', 'Verre 12cl', 6.50, $boissonsAlcool, null, []);
        $this->createDish($manager, 'Vin rosé - Provence', 'Verre 12cl', 5.50, $boissonsAlcool, null, []);
        $this->createDish($manager, 'Champagne', 'Coupe 12cl', 12.00, $boissonsAlcool, null, []);
        $this->createDish($manager, 'Bière pression 25cl', null, 4.50, $boissonsAlcool, null, [$allergens['Gluten']]);
        $this->createDish($manager, 'Bière pression 50cl', null, 7.50, $boissonsAlcool, null, [$allergens['Gluten']]);
        $this->createDish($manager, 'Kir', 'Vin blanc, crème de cassis', 5.00, $boissonsAlcool, null, []);
        $this->createDish($manager, 'Pastis', '4cl', 4.00, $boissonsAlcool, null, []);

        $manager->flush();
    }

    private function createDish(
        ObjectManager $manager, 
        string $name, 
        ?string $description, 
        float $price, 
        Category $category, 
        ?SubCategory $subCategory, 
        array $allergens
    ): void
    {
        $dish = new Dish();
        $dish->setName($name);
        $dish->setDescription($description);
        $dish->setPrice($price);
        $dish->setCategory($category);
        $dish->setSubCategory($subCategory);
        
        foreach ($allergens as $allergen) {
            $dish->addAllergen($allergen);
        }
        
        $manager->persist($dish);
    }
}