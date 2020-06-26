<?php


namespace App\Controller\HeaderNavController;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class WarrantyController extends AbstractController
{
    public function index(): Response
    {
        return $this -> render('headerNav/warranty.html.twig', [

        ]);
    }

}