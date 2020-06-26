<?php


namespace App\Admin\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Category;

class CategoryController extends AbstractController
{
    public function add(Request $request, EntityManagerInterface $em)
    {
        if ($request->getMethod() === 'POST') {
            $category = new Category();
            $category->setName($request->request->get('name'));
            $category->setRating($request->request->get('rating'));
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('home');
        } else {
            return $this->render('admin/dashboard/category/add.html.twig');
        }
    }
}
{

}