<?php


namespace App\Controller;


use App\Entity\Product;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CartController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $products = $em->getRepository(Product::class)->findAll();
        $users = $em->getRepository(User::class)->findAll();


        return $this->render('basket/index.html.twig',[
            'products' => $products,
            'users' => $users

        ]);
    }

    public function add(Request $request, EntityManagerInterface $em)
    {
        $response = new JsonResponse();
        $response->setStatusCode(Response::HTTP_NO_CONTENT);
        $response->setData([
            'success' => true
        ]);


        return $response;
    }

/*    public function add(Request $request, EntityManagerInterface $em)
    {
        $id = $request->request->get('id');
        $response = new JsonResponse();
        $product = $em->getRepository(Product::class)->find($id);

        $response->setStatusCode(Response::HTTP_NO_CONTENT);
        $response->setData([
            'success' => true
        ]);


        return $response;

    }*/



    }

/*    public function add(Request $request, EntityManagerInterface $em)
    {
        if ($request->getMethod() === 'POST') {
            $order = new Order();
            $order->getProductId($request->request->get('product_id'));
            $order->getUserId($request->request->get('user_id'));
            $em->persist($order);
            $em->flush();

            return $this->redirectToRoute('home');
        } else {
            return $this->render('admin/dashboard/category/add.html.twig');
        }
    }*/


