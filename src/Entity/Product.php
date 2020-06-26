<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 * @ORM\Table(name="products")
 */

class Product
{
    /**
     * orm/id => primary key auto_increment
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

//    /**
//     * @ORM\Column(type="string")
//     */
//    private $color;

//    /**
//     * @ORM\Column(type="integer")
//     */
//    private $memory;

    /**
     * @ORM\Column(type="boolean")
     */
    private $availability = true;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="text")
     */
    private $specifications;

    /**
     * @ORM\Column(type="string")
     */
    private $slug;

    /**
     * @var array(Category) $categories
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="products")
     */
    private $category;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $images;

//    /**
//     * Product constructor.
//     */
//    public function  __construct()
//    {
//        $this->images = new ArrayCollection();
//    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * @param mixed $memory
     */
    public function setMemory($memory): void
    {
        $this->memory = $memory;
    }

    /**
     * @return bool
     */
    public function isAvailability(): bool
    {
        return $this->availability;
    }

    /**
     * @param bool $availability
     */
    public function setAvailability(bool $availability): void
    {
        $this->availability = $availability;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getSpecifications()
    {
        return $this->specifications;
    }

    /**
     * @param mixed $specifications
     */
    public function setSpecifications($specifications): void
    {
        $this->specifications = $specifications;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     */
    public function setImages($images): void
    {
        $this->images = $images;
    }




    public function addImage($image)
    {
        $this->images->add($image);
    }

    public function removeImage($image)
    {
        $this->images->removeElemrnts($image);
    }



}