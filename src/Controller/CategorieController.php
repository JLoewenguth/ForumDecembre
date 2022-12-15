<?php

namespace App\Controller;

use App\Entity\Sujet;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'app_categorie')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $sujets =
        $doctrine->getRepository(Sujet::class)->findBy(['categorie_id' => '1'],[]);
        return $this->render('categorie/index.html.twig', [
            'sujets'=>$sujets
        ]);
    }
}
