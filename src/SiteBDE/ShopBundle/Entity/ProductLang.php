<?php

namespace SiteBDE\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductLang
 *
 * @ORM\Table(name="product_lang")
 * @ORM\Entity(repositoryClass="SiteBDE\ShopBundle\Repository\ProductLangRepository")
 */
class ProductLang
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
     * @var string
     *
     * @ORM\Column(name="ProductName", type="string", length=255)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductDesc", type="text")
     */
    private $productDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductSmlDesc", type="string", length=255)
     */
    private $productSmlDesc;

    /**
     * @var int
     *
     * @ORM\Column(name="LangID", type="integer")
     */
    private $langID;

    /**
     * @var int
     *
     * @ORM\Column(name="ProductID", type="integer")
     */
    private $productID;


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
     * Set productName
     *
     * @param string $productName
     *
     * @return ProductLang
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productDesc
     *
     * @param string $productDesc
     *
     * @return ProductLang
     */
    public function setProductDesc($productDesc)
    {
        $this->productDesc = $productDesc;

        return $this;
    }

    /**
     * Get productDesc
     *
     * @return string
     */
    public function getProductDesc()
    {
        return $this->productDesc;
    }

    /**
     * Set productSmlDesc
     *
     * @param string $productSmlDesc
     *
     * @return ProductLang
     */
    public function setProductSmlDesc($productSmlDesc)
    {
        $this->productSmlDesc = $productSmlDesc;

        return $this;
    }

    /**
     * Get productSmlDesc
     *
     * @return string
     */
    public function getProductSmlDesc()
    {
        return $this->productSmlDesc;
    }

    /**
     * Set langID
     *
     * @param integer $langID
     *
     * @return ProductLang
     */
    public function setLangID($langID)
    {
        $this->langID = $langID;

        return $this;
    }

    /**
     * Get langID
     *
     * @return int
     */
    public function getLangID()
    {
        return $this->langID;
    }

    /**
     * Set productID
     *
     * @param integer $productID
     *
     * @return ProductLang
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;

        return $this;
    }

    /**
     * Get productID
     *
     * @return int
     */
    public function getProductID()
    {
        return $this->productID;
    }
}

