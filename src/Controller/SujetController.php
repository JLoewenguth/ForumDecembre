<?php

namespace App\Controller;

use App\Entity\Sujet;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SujetController extends AbstractController
{
    #[Route('/sujet', name: 'app_sujet')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $sujets = $doctrine->getRepository(Sujet::class)->findAll();
        return $this->render('sujet/index.html.twig', [
            'sujets'=> $sujets
        ]);
    }
}
