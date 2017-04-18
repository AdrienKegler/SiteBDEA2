<?php

namespace SiteBDE\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="SiteBDE\ShopBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="ProductPrice", type="float")
     */
    private $productPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="ProductQty", type="integer")
     */
    private $productQty;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CreationDate", type="datetime")
     */
    private $creationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="CategoryID", type="integer")
     */
    private $categoryID;

    /**
     * @var int
     *
     * @ORM\Column(name="CreatorID", type="integer")
     */
    private $creatorID;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productPrice
     *
     * @param float $productPrice
     *
     * @return Product
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    /**
     * Get productPrice
     *
     * @return float
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * Set productQty
     *
     * @param integer $productQty
     *
     * @return Product
     */
    public function setProductQty($productQty)
    {
        $this->productQty = $productQty;

        return $this;
    }

    /**
     * Get productQty
     *
     * @return int
     */
    public function getProductQty()
    {
        return $this->productQty;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Product
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set categoryID
     *
     * @param integer $categoryID
     *
     * @return Product
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;

        return $this;
    }

    /**
     * Get categoryID
     *
     * @return int
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Set creatorID
     *
     * @param integer $creatorID
     *
     * @return Product
     */
    public function setCreatorID($creatorID)
    {
        $this->creatorID = $creatorID;

        return $this;
    }

    /**
     * Get creatorID
     *
     * @return int
     */
    public function getCreatorID()
    {
        return $this->creatorID;
    }
}

