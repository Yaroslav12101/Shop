<?php


namespace App\Controller;


use App\Entity\Category;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function products($id, PaginatorInterface $paginator, Request $request): Response
    {
        $dql = "SELECT p FROM App:Product p JOIN p.category c WHERE c.id = $id";
        $query = $this->em->createQuery($dql);;
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            Product::ITEMS_PER_PAGE
        );
        $repository = $this->em->getRepository(Product::class);
        $products = $repository->getProductsByCategoryId($id);
        $categories = $this->em->getRepository(Category:: class)->findAll();
        $product = $this->em->getRepository(Product:: class)->findAll();

        return $this->render('category/products.html.twig', [
            'categories' => $categories,
            'products' => $products,
            'product' => $product,
            'pagination' => $pagination
        ]);
    }
}