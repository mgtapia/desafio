<?php

namespace innobisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Forms
 *
 * @ORM\Table(name="forms")
 * @ORM\Entity(repositoryClass="innobisBundle\Repository\FormsRepository")
 */
class Forms
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
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="preg1", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $preg1;

    /**
     * @var string
     *
     * @ORM\Column(name="preg2", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $preg2;

    /**
     * @var string
     *
     * @ORM\Column(name="preg3", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $preg3;


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
     * Set title
     *
     * @param string $title
     *
     * @return Forms
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Forms
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set preg1
     *
     * @param string $preg1
     *
     * @return Forms
     */
    public function setPreg1($preg1)
    {
        $this->preg1 = $preg1;

        return $this;
    }

    /**
     * Get preg1
     *
     * @return string
     */
    public function getPreg1()
    {
        return $this->preg1;
    }

    /**
     * Set preg2
     *
     * @param string $preg2
     *
     * @return Forms
     */
    public function setPreg2($preg2)
    {
        $this->preg2 = $preg2;

        return $this;
    }

    /**
     * Get preg2
     *
     * @return string
     */
    public function getPreg2()
    {
        return $this->preg2;
    }

    /**
     * Set preg3
     *
     * @param string $preg3
     *
     * @return Forms
     */
    public function setPreg3($preg3)
    {
        $this->preg3 = $preg3;

        return $this;
    }

    /**
     * Get preg3
     *
     * @return string
     */
    public function getPreg3()
    {
        return $this->preg3;
    }
}

