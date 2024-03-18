<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrController extends AbstractController
{

    // Exemple of evenInegration du emplate
    #[Route('/tr', name: 'app_tr')]
    public function index(): Response
    {
        return $this->render('tr/index.html.twig', [
            'controller_name' => 'TrController',
        ]);
    }
}
