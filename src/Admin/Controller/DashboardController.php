<?php


namespace App\Admin\Controller;


use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function index()
    {
        $categories = $this->em->getRepository(Category:: class)->findAll();

        return $this->render('admin/dashboard/index.html.twig',[
            'message' => 'Hello',
            'categories' => $categories

        ]);
    }
}