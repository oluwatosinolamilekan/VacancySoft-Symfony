<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfessionsController extends AbstractController
{
    /**
     * @Route("/professions", name="app_professions")
     */
    public function index(): Response
    {
        return $this->render('professions/index.html.twig', [
            'controller_name' => 'ProfessionsController',
        ]);
    }
}
