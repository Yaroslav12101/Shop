<?php


namespace App\Controller\HeaderNavController\InformationController;


use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class RefundController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function index(): Response
    {
        $categories = $this->em->getRepository(Category:: class)->findAll();

        return $this->render('headerNav/information/refund.html.twig', [
            'categories' => $categories
        ]);
    }

}