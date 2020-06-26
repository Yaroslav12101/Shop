<?php


namespace App\Controller\HeaderNavController\InformationController;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ReviewsController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('headerNav/information/reviews.html.twig', [

        ]);
    }

}