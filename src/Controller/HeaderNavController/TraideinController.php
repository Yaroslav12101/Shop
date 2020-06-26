<?php


namespace App\Controller\HeaderNavController;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TraideinController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('headerNav/traidein.html.twig', [
        ]);
    }
}