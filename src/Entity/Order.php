<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 * @ORM\Table(name="orders")
 */

class Order
{
    /**
     * orm/id => primary key auto_increment
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var array(Product) $product_id
     * @ORM\OneToMany(targetEntity="App\Entity\Product", mappedBy="order")
     */
    private $product_id = [];

    /**
     * @var array(User) $user_id
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="order")
     */
    private $user_id = [];

    /**
     * @ORM\Column(type="integer")
     */
    private $product_count;

    /**
     * @ORM\Column(type="integer")
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     */
    private \DateTime $created;

    /**
     * @ORM\Column(type="datetime")
     */
    private \DateTime $updated;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getProductId(): array
    {
        return $this->product_id;
    }

    /**
     * @param array $product_id
     */
    public function setProductId(array $product_id): void
    {
        $this->product_id = $product_id;
    }

    /**
     * @return array
     */
    public function getUserId(): array
    {
        return $this->user_id;
    }

    /**
     * @param array $user_id
     */
    public function setUserId(array $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getProductCount()
    {
        return $this->product_count;
    }

    /**
     * @param mixed $product_count
     */
    public function setProductCount($product_count): void
    {
        $this->product_count = $product_count;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated(\DateTime $created): void
    {
        $this->created = $created;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated(): \DateTime
    {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     */
    public function setUpdated(\DateTime $updated): void
    {
        $this->updated = $updated;
    }


}