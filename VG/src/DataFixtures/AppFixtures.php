<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $client = new Client();
        $client->setNom("toto");
        $client->setPrenom("toto");
        $manager->persist($client);

        $client2 = new Client();
        $client2->setNom("titi");
        $client2->setPrenom("titi");
        $manager->persist($client2);

        $manager->flush();
    }
}
