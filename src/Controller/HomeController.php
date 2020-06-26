<?php


namespace App\Controller;


use App\Entity\Category;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HomeController
 * @package App\Controller
 */
class HomeController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $repository = $this->em->getRepository(Product::class);
        $products = $repository ->findAll();
        $categories = $this->em->getRepository(Category:: class)->findAll();

        return $this->render('home/index.html.twig', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    /**
     * @param $slug
     * @return Response
     */
    public function view($slug): Response
    {
        $repository = $this->em->getRepository(Product::class);
        $product = $repository->findOneBy(['slug' => $slug]);
        return $this->render('home/view.html.twig',[
            'product'=> $product
        ]);
    }
}