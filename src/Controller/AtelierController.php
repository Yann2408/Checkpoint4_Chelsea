<?php

namespace App\Controller;

use App\Entity\Atelier;
use App\Form\AtelierType;
use App\Repository\AtelierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('admin/atelier')]
class AtelierController extends AbstractController
{
    #[Route('/', name: 'atelier_index', methods: ['GET'])]
    public function index(AtelierRepository $atelierRepository): Response
    {
        return $this->render('atelier/index.html.twig', [
            'ateliers' => $atelierRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'atelier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $atelier = new Atelier();
        $form = $this->createForm(AtelierType::class, $atelier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($atelier);
            $entityManager->flush();

            return $this->redirectToRoute('atelier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('atelier/new.html.twig', [
            'atelier' => $atelier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'atelier_show', methods: ['GET'])]
    public function show(Atelier $atelier): Response
    {
        return $this->render('atelier/show.html.twig', [
            'atelier' => $atelier,
        ]);
    }

    #[Route('/{id}/edit', name: 'atelier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Atelier $atelier, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AtelierType::class, $atelier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('atelier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('atelier/edit.html.twig', [
            'atelier' => $atelier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'atelier_delete', methods: ['POST'])]
    public function delete(Request $request, Atelier $atelier, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$atelier->getId(), $request->request->get('_token'))) {
            $entityManager->remove($atelier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('atelier_index', [], Response::HTTP_SEE_OTHER);
    }
}
