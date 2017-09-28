<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Third
 *
 * @ORM\Table(name="third")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\ThirdRepository")
 */
class Third
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
     * @var string
     *
     * @ORM\Column(name="first_text", type="text", length=2000, nullable=false)
     */
    protected $firstText;

    /**
     * @var string
     *
     * @ORM\Column(name="second_text", type="text", length=2000, nullable=false)
     */
    protected $secondText;

    /**
     * @var string
     *
     * @ORM\Column(name="third_text", type="text", length=2000, nullable=false)
     */
    protected $thirdText;

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

    public function setFirstText($firstText)
    {
        $this->firstText = $firstText;
    }

    public function getFirstText()
    {
        return $this->firstText;
    }

    public function setSecondText($secondText)
    {
        $this->secondText = $secondText;
    }

    public function getSecondText()
    {
        return $this->secondText;
    }

    public function setThirdText($thirdText)
    {
        $this->thirdText = $thirdText;
    }

    public function getThirdText()
    {
        return $this->thirdText;
    }

    public function __toString() {
        $title= $this->title;
        if (! is_string ( $title)) {
            $title= strval ( $title);
        }

        return $title;
    }
}