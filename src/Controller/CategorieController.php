<?php

namespace App\Controller;

use App\Entity\Categorie;
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
    $doctrine->getRepository(Sujet::class)->findBy([/*idcategorie*/],["dateCreation"=>"DESC"]);
        return $this->render('categorie/index.html.twig', [
            'sujets'=>$sujets
        ]);
    }

    #[Route('/categorie', name: 'show_categorie')]
    public function show(ManagerRegistry $doctrine): Response
    {
        $categorie =
    $doctrine->getRepository(Categorie::class)->findBy([],[]);
        return $this->render('categorie/show.html.twig', [
            'categories'=>$categorie
        ]);
    }
}
