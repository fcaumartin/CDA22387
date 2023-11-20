<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Detail;
use App\Repository\ProduitRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    #[Route('/commande', name: 'app_commande')]
    public function index(SessionInterface $session, ProduitRepository $repo, EntityManagerInterface $manager): Response
    {
        $panier = $session->get("panier", []);

        $commande = new Commande();
        $commande->setDateCommande(new DateTime());
        $commande->setUtilisateur($this->getUser());

        foreach ($panier as $id => $quantite) {
            $detail = new Detail();
            $detail->setCommande($commande);
            $produit = $repo->find($id);
            $detail->setProduit($produit);
            $detail->setQuantite($quantite);

            $manager->persist($detail);
        }

        $manager->persist($commande);

        $manager->flush();


        return $this->redirectToRoute("app_profile");
    }
}
