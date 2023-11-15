<?php

namespace App\Controller;

use App\Entity\Client;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    #[Route('/test/{p}', name: 'app_test')]
    public function index(Client $p): Response
    {
        dd($p);
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
