<?php


namespace App\Controller\HeaderNavController;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DeliveryController extends AbstractController
{
    public function index(): Response
    {
        return $this -> render('headerNav/delivery.html.twig', [

        ]);
    }

}