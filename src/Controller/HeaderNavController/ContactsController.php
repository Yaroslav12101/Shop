<?php


namespace App\Controller\HeaderNavController;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ContactsController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('headerNav/contacts.html.twig',[

        ]);
    }

}