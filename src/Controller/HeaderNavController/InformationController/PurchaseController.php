<?php


namespace App\Controller\HeaderNavController\InformationController;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Category;


class PurchaseController extends AbstractController
{

    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function index(): Response
    {
        $categories = $this->em->getRepository(Category:: class)->findAll();

        return $this->render('headerNav/information/purchase.html.twig', [
            'categories' => $categories
        ]);
    }
}