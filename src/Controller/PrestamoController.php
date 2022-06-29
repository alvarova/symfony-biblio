<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrestamoController extends AbstractController
{
    /**
     * @Route("/prestamo", name="app_prestamo")
     */
    public function index(): Response
    {
        return $this->render('prestamo/index.html.twig', [
            'controller_name' => 'PrestamoController',
        ]);
    }
}
