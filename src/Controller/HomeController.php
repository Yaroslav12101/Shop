<?php


namespace App\Controller;


use App\Entity\Category;
use App\Entity\Order;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
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
     * @param PaginationInterface $paginator
     * @return Response
     */
    public function index(Request $request,PaginatorInterface $paginator ): Response
    {
        $dql = "SELECT p FROM App:Product p";
        $query = $this->em->createQuery($dql);;
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            Product::ITEMS_PER_PAGE
        );
        $categories = $this->em->getRepository(Category:: class)->findAll();

        return $this->render('home/index.html.twig', [
            'categories' => $categories,
            'pagination' => $pagination
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
        $categories = $this->em->getRepository(Category:: class)->findAll();
        return $this->render('home/view.html.twig',[
            'categories' => $categories,
            'product'=> $product
        ]);
    }

    public function add(Request $request, EntityManagerInterface $em)
    {
        if ($request->getMethod() === 'POST') {
            $order = new Order();
            $product = $em->getRepository(Product::class)->find($request->request->getInt('product_id'));
            $order->getProductId();
            $order->getUserId($request->request->get('user_id'));
            $em->persist($order);
            $em->flush();
            var_dump($order); exit;

            return $this->redirectToRoute('aboutus');
        }
    }


}