<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('', name: 'app_produit')]
    public function index(): Response
    {
        return $this->render('produit/dashboard.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }


    #[Route('/add', name: 'app_add')]
    public function add(): Response
    {
        return $this->render('produit/add.html.twig');
    }


    #[Route('/list', name: 'app_list')]
    public function list(): Response
    {
        return $this->render('produit/produit-list.html.twig');
    }
}
