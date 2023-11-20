<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CatalogueController extends AbstractController
{
    #[Route('/', name: 'app_catalogue')]
    public function index(CategorieRepository $repo): Response
    {
        $categories = $repo->findBy([
            "parent" => null
        ]);

        return $this->render('catalogue/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/categories/{categorie}', name: 'app_categories')]
    public function categories(Categorie $categorie): Response
    {

        return $this->render('catalogue/categories.html.twig', [
            'categorie' => $categorie
        ]);
    }

    #[Route('/produits/{categorie}', name: 'app_produits')]
    public function produits(Categorie $categorie): Response
    {

        return $this->render('catalogue/produits.html.twig', [
            'categorie' => $categorie
        ]);
    }

    #[Route('/details/{produit}', name: 'app_details')]
    public function details(Produit $produit): Response
    {

        return $this->render('catalogue/details.html.twig', [
            'produit' => $produit
        ]);
    }
}
