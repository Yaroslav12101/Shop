<?php


namespace App\Admin\Form\Type;

use App\Entity\Category;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class, [])
            //->add('color',TextType::class, [])
            //->add('memory',NumberType::class, [])
            ->add('category',EntityType::class, [
                'class' => Category::class,
                'choice_label' => function ($category) {
                    return $category->getName();
                }
            ])
            ->add('price',NumberType::class, [])
            ->add('specifications',TextareaType::class, [])
            ->add('slug',TextType::class, [])
            ->add('description',TextareaType::class, [])
            ->add('images', FileType::class, [
                'label' => 'Image (png, jpeg)',
                'mapped' => false,
                'required' => false,
            ])
            ->add('add',SubmitType::class, []);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}