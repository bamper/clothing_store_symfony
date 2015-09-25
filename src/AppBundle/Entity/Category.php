<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentCategory", type="integer", nullable=true)
     */
    private $parentcategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set parentcategory
     *
     * @param integer $parentcategory
     *
     * @return Category
     */
    public function setParentcategory($parentcategory)
    {
        $this->parentcategory = $parentcategory;

        return $this;
    }

    /**
     * Get parentcategory
     *
     * @return integer
     */
    public function getParentcategory()
    {
        return $this->parentcategory;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
