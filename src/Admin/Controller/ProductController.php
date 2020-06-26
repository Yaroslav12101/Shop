<?php


namespace App\Admin\Controller;


use App\Admin\Form\Type\ProductType;
use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Product;

class ProductController extends AbstractController
{
    public function add(Request $request, EntityManagerInterface $em)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $images = $form->get('images')->getData();
            if ($images) {
                $originalFilename = pathinfo($images->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$images->guessExtension();

                try {
                    $images->move(
                        $this->getParameter('post_images_directory') . $product->getSlug(),
                        $newFilename
                    );
                } catch (FileException $e) {
                    log($e->getMessage());
                }
                $product->setImages($newFilename);
            }
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('home');
        }

        $categories = $em->getRepository(Category::class)->findAll();
        return $this->render('admin/dashboard/product/add.html.twig', [
            'form' => $form->createView(),
            'categories' =>$categories
        ]);
    }
}