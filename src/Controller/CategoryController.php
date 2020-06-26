<?php


namespace App\Controller;


use App\Entity\Category;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function products($id)
    {
        $repository = $this->em->getRepository(Category::class);
        $categories = $repository->find($id);
        $products = $categories->getProducts();

        return $this->render('category/products.html.twig', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
}