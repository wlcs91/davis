<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AlunosController extends AbstractController
{
    #[Route('/alunos', name: 'app_alunos')]
    public function index(): Response
    {
        return $this->render('alunos/index.html.twig', [
            'controller_name' => 'AlunosController',
        ]);
    }
}
