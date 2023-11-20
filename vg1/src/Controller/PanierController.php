<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier')]
    public function index(SessionInterface $session, ProduitRepository $repo): Response
    {
        $panier = $session->get("panier", []);

        $panier_complet = [];
        foreach ($panier as $key => $value) {
            $produit = $repo->find($key);
            $produit->quantite = $value;
            $panier_complet[] = $produit;
        }

        // dd($panier);

        return $this->render('panier/index.html.twig', [
            'panier' => $panier_complet,
        ]);
    }

    #[Route('/add/{produit}', name: 'app_add')]
    public function add(Produit $produit, SessionInterface $session): Response
    {
        $panier = $session->get("panier", []);

        if(isset($panier[$produit->getId()])) {
            $panier[$produit->getId()]++;
        } else {
            $panier[$produit->getId()] = 1;
        };

        $session->set("panier", $panier);

        return $this->redirectToRoute("app_panier");
    }
}
