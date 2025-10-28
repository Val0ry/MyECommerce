<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowController extends AbstractController
{
    #[Route('/product/{id}', name: 'app_product_show')]
    public function index(int $id): Response
    {
        // Pour l'instant, nous allons juste rendre la page.
        // Plus tard, vous utiliserez l'id pour aller chercher le bon produit en base de données.
        return $this->render('show/show.html.twig', [
            'product_id' => $id,
        ]);
    }
}
