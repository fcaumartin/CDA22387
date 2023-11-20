<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Entity\Utilisateur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $hasher;

    public function __construct(UserPasswordHasherInterface $hasher){
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $cat1 = new Categorie();
        $cat1->setNom("Guitare");
        $cat1->setImage("cat.png");
        $cat1->setParent(null);
        $manager->persist($cat1);

        $cat2 = new Categorie();
        $cat2->setNom("Piano");
        $cat2->setImage("cat.png");
        $cat2->setParent(null);
        $manager->persist($cat2);

        $cat3 = new Categorie();
        $cat3->setNom("Trompette");
        $cat3->setImage("cat.png");
        $cat3->setParent(null);
        $manager->persist($cat3);


        $cat11 = new Categorie();
        $cat11->setNom("Guitare electrique");
        $cat11->setImage("cat.png");
        $cat11->setParent($cat1);
        $manager->persist($cat11);
        
        $cat12 = new Categorie();
        $cat12->setNom("Guitare acoustique");
        $cat12->setImage("cat.png");
        // $cat12->setParent($cat1);
        $cat1->addCategory($cat12);
        $manager->persist($cat12);
        
        $p1 = new Produit();
        $p1->setNom("Guitare qui joue vite");
        $p1->setImage("cat.png");
        $p1->setPrix(120.55);
        $p1->setCategorie($cat11);
        $manager->persist($p1);

        $p2 = new Produit();
        $p2->setNom("Guitare 2");
        $p2->setImage("cat.png");
        $p2->setPrix(120.55);
        $p2->setCategorie($cat11);
        $manager->persist($p2);

        $p3 = new Produit();
        $p3->setNom("Guitare 3");
        $p3->setImage("cat.png");
        $p3->setPrix(120.55);
        $p3->setCategorie($cat11);
        $manager->persist($p3);

        $p4 = new Produit();
        $p4->setNom("Guitare 4");
        $p4->setImage("cat.png");
        $p4->setPrix(120.55);
        $p4->setCategorie($cat11);
        $manager->persist($p4);

        $u1 = new Utilisateur();
        $u1->setEmail("toto@afpa.fr");
        $u1->setRoles(["ROLE_ADMIN"]);
        $password = $this->hasher->hashPassword($u1, "Afpa1234");
        $u1->setPassword($password);
        $manager->persist($u1);


        $manager->flush();
    }
}
