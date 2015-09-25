<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clothes
 *
 * @ORM\Table(name="clothes")
 * @ORM\Entity
 */
class Clothes
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoryID", type="integer", nullable=false)
     */
    private $categoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text", length=65535, nullable=false)
     */
    private $details;

    /**
     * @var integer
     *
     * @ORM\Column(name="gender", type="integer", nullable=false)
     */
    private $gender;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="brandID", type="integer", nullable=false)
     */
    private $brandid;

    /**
     * @var float
     *
     * @ORM\Column(name="rating", type="float", precision=10, scale=0, nullable=false)
     */
    private $rating;

    /**
     * @var integer
     *
     * @ORM\Column(name="featured", type="integer", nullable=false)
     */
    private $featured;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=150, nullable=false)
     */
    private $slug;

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
     * @return Clothes
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
     * Set categoryid
     *
     * @param integer $categoryid
     *
     * @return Clothes
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return integer
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Clothes
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     *
     * @return Clothes
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Clothes
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set brandid
     *
     * @param integer $brandid
     *
     * @return Clothes
     */
    public function setBrandid($brandid)
    {
        $this->brandid = $brandid;

        return $this;
    }

    /**
     * Get brandid
     *
     * @return integer
     */
    public function getBrandid()
    {
        return $this->brandid;
    }

    /**
     * Set rating
     *
     * @param float $rating
     *
     * @return Clothes
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return float
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set featured
     *
     * @param integer $featured
     *
     * @return Clothes
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;

        return $this;
    }

    /**
     * Get featured
     *
     * @return integer
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Clothes
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
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
