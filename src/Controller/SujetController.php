<?php

namespace App\Controller;

use App\Entity\Sujet;
use App\Entity\Message;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SujetController extends AbstractController
{
    #[Route('/sujet', name: 'app_sujet')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $sujets = $doctrine->getRepository(Sujet::class)->findBy(['id'=>'1'],[]);
        return $this->render('sujet/index.html.twig', [
            'sujets'=> $sujets
        ]);
    }

    #[Route('/sujet/message', name: 'app_message')]
    public function show(Message $message): Response
    {
        return $this->render('sujet/index.html.twig', [
            'message'=> $message
        ]);
    }
} 
