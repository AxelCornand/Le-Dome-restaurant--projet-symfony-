<?php

namespace App\Controller;

use App\Repository\DishRepository;
use App\Repository\CategoryRepository;
use App\Repository\SubCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MenuController extends AbstractController
{
    #[Route('/menu', name: 'app_menu')]
    public function index(
        DishRepository $dishRepository, 
        CategoryRepository $categoryRepository,
        SubCategoryRepository $subCategoryRepository
    ): Response
    {
        // Récupérer les catégories principales
        $entreeCategory = $categoryRepository->findOneBy(['slug' => 'entrees']);
        $platsChaudsCategory = $categoryRepository->findOneBy(['slug' => 'plats-chauds']);
        $fromagesCategory = $categoryRepository->findOneBy(['slug' => 'fromages']);
        $dessertCategory = $categoryRepository->findOneBy(['slug' => 'desserts']);
        $boissonSoftCategory = $categoryRepository->findOneBy(['slug' => 'boissons-soft']);
        $boissonAlcoolCategory = $categoryRepository->findOneBy(['slug' => 'boissons-alcool']);

        // Récupérer les sous-catégories de plats chauds
        $burgersSubCat = $subCategoryRepository->findOneBy(['slug' => 'burgers']);
        $viandesSubCat = $subCategoryRepository->findOneBy(['slug' => 'viandes']);
        $patesSubCat = $subCategoryRepository->findOneBy(['slug' => 'pates']);
        $tartaresSubCat = $subCategoryRepository->findOneBy(['slug' => 'tartares']);
        $poissonsSubCat = $subCategoryRepository->findOneBy(['slug' => 'poissons']);

        // Récupérer les plats par catégorie
        $entrees = $entreeCategory ? $dishRepository->findBy(['category' => $entreeCategory]) : [];
        $fromages = $fromagesCategory ? $dishRepository->findBy(['category' => $fromagesCategory]) : [];
        $desserts = $dessertCategory ? $dishRepository->findBy(['category' => $dessertCategory]) : [];
        $boissonsSoft = $boissonSoftCategory ? $dishRepository->findBy(['category' => $boissonSoftCategory]) : [];
        $boissonsAlcool = $boissonAlcoolCategory ? $dishRepository->findBy(['category' => $boissonAlcoolCategory]) : [];
        
        // Récupérer les plats chauds par sous-catégorie
        $burgers = $burgersSubCat ? $dishRepository->findBy(['subCategory' => $burgersSubCat]) : [];
        $viandes = $viandesSubCat ? $dishRepository->findBy(['subCategory' => $viandesSubCat]) : [];
        $pates = $patesSubCat ? $dishRepository->findBy(['subCategory' => $patesSubCat]) : [];
        $tartares = $tartaresSubCat ? $dishRepository->findBy(['subCategory' => $tartaresSubCat]) : [];
        $poissons = $poissonsSubCat ? $dishRepository->findBy(['subCategory' => $poissonsSubCat]) : [];

        return $this->render('menu/index.html.twig', [
            'entrees' => $entrees,
            'burgers' => $burgers,
            'viandes' => $viandes,
            'pates' => $pates,
            'tartares' => $tartares,
            'poissons' => $poissons,
            'fromages' => $fromages,
            'desserts' => $desserts,
            'boissonsSoft' => $boissonsSoft,
            'boissonsAlcool' => $boissonsAlcool,
        ]);
    }
}