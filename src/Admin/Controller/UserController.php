<?php


namespace App\Admin\Controller;


use App\Entity\Category;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function index(Request $request, EntityManagerInterface $em)
    {
        $users = $em->getRepository(User::class)->findAll();
        $categories = $this->em->getRepository(Category:: class)->findAll();

        return $this->render('admin/user/index.html.twig', [
            'users' => $users,
            'categories' => $categories
        ]);
    }
}