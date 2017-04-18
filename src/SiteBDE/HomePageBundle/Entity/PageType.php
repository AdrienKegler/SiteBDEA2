<?php

namespace SiteBDE\HomePageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageType
 *
 * @ORM\Table(name="page_type")
 * @ORM\Entity(repositoryClass="SiteBDE\HomePageBundle\Repository\PageTypeRepository")
 */
class PageType
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
     * @ORM\Column(name="PageTypeName", type="string", length=255)
     */
    private $pageTypeName;


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
     * Set pageTypeName
     *
     * @param string $pageTypeName
     *
     * @return PageType
     */
    public function setPageTypeName($pageTypeName)
    {
        $this->pageTypeName = $pageTypeName;

        return $this;
    }

    /**
     * Get pageTypeName
     *
     * @return string
     */
    public function getPageTypeName()
    {
        return $this->pageTypeName;
    }
}

