<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Fourth
 *
 * @ORM\Table(name="fourth")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\FourthRepository")
 */
class Fourth
{

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="text", length=2000, nullable=false)
     */
    protected $intro;

    /**
     * @ORM\OneToOne(targetEntity="Slider")
     */
    protected $slider;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setIntro($intro)
    {
        $this->intro = $intro;
    }

    public function getIntro()
    {
        return $this->intro;
    }

    public function setSlider($slider = null)
    {
        $this->slider = $slider;
    }

    public function getSlider()
    {
        return $this->slider;
    }

    public function __toString() {
        $title= $this->title;
        if (! is_string ( $title)) {
            $title= strval ( $title);
        }

        return $title;
    }
}