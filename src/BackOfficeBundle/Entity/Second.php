<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Sonata\MediaBundle\Model\Media;

/**
 * Second
 *
 * @ORM\Table(name="second")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\SecondRepository")
 */
class Second
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
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="picture_one_id", referencedColumnName="id")
     * })
     */
    private $pictureOne;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="picture_two_id", referencedColumnName="id")
     * })
     */
    private $pictureTwo;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="picture_three_id", referencedColumnName="id")
     * })
     */
    private $pictureThree;

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

    public function setPictureOne($pictureOne)
    {
        $this->pictureOne = $pictureOne;
    }

    public function getPictureOne()
    {
        return $this->pictureOne;
    }

    public function setPictureTwo($pictureTwo)
    {
        $this->pictureTwo = $pictureTwo;
    }

    public function getPictureTwo()
    {
        return $this->pictureTwo;
    }

    public function setPictureThree($pictureThree)
    {
        $this->pictureThree = $pictureThree;
    }

    public function getPictureThree()
    {
        return $this->pictureThree;
    }

    public function __toString() {
        $title= $this->title;
        if (! is_string ( $title)) {
            $title= strval ( $title);
        }

        return $title;
    }
}