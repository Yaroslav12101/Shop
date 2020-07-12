<?php


namespace App\Controller\HeaderNavController;


use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FaqController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function index(): Response
    {
        $categories = $this->em->getRepository(Category:: class)->findAll();

        return $this->render('headerNav/faq.html.twig', [
            'categories' => $categories
        ]);
    }

}