<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LibroController extends AbstractController
{
    /**
     * @Route("/", name="app_inicio")
     */
    public function index(Request $request): Response
    {
        /*return $this->render('libro/index.html.twig', [
            'controller_name' => 'LibroController',
        ]);*/
        $nombre="";
        if ($nombre=$request->query->get('id')) {
            $saludo = "Se detecto ID de ingreso";
        } else {
            $saludo = "ID Desconocido";
        }
        return new Response("<div>HOME</div>");
    }



}
