<?php

namespace SiteBDE\HomePageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 *
 * @ORM\Table(name="languages")
 * @ORM\Entity(repositoryClass="SiteBDE\HomePageBundle\Repository\LanguagesRepository")
 */
class Languages
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
     * @ORM\Column(name="LangName", type="string", length=255)
     */
    private $langName;


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
     * Set langName
     *
     * @param string $langName
     *
     * @return Languages
     */
    public function setLangName($langName)
    {
        $this->langName = $langName;

        return $this;
    }

    /**
     * Get langName
     *
     * @return string
     */
    public function getLangName()
    {
        return $this->langName;
    }
}

