<?php

namespace App\Controller;

use App\Entity\Ata;
use App\Form\AtaType;
use App\Repository\AtaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AtaController extends AbstractController
{
    #[Route('/ata', name: 'app_ata')]
    public function index(Request $request, EntityManagerInterface $entityManager, AtaRepository $ataRepository): Response
    {
        $today = date("Y-m-d");
        $repository = $ataRepository->findByDateToday($today);
        $ata = new Ata();

        if($repository)
        {
            $ata = new Ata();
            $ata->setInfantil($repository[0]->getInfantil());
            $ata->setJuvenil($repository[0]->getJuvenil());
            $ata->setData($repository[0]->getData());
        }

        $form = $this->createForm(AtaType::class, $ata);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($ata);
            $entityManager->flush();

            return $this->redirectToRoute('app_ata', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ata/index.html.twig', [
            'ata' => $ata,
            'form' => $form,
            'repository' => $repository,
        ]);
    }

    #[Route('/ata/{id}/edit', name: 'app_ata_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ata $ata, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AtaType::class, $ata);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($ata);
            $entityManager->flush();

            return $this->redirectToRoute('app_ata', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ata/edit.html.twig', [
            'ata' => $ata,
            'form' => $form,
        ]);
    }
}
