<?php

namespace innobisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FormsAns
 *
 * @ORM\Table(name="forms_ans")
 * @ORM\Entity(repositoryClass="innobisBundle\Repository\FormsAnsRepository")
 */
class FormsAns
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
     * @var int
     *
     * @ORM\Column(name="formID", type="integer")
     * @Assert\NotBlank()
     */
    private $formID;

    /**
     * @var int
     *
     * @ORM\Column(name="userID", type="integer")
     * @Assert\NotBlank()
     */
    private $userID;

    /**
     * @var string
     *
     * @ORM\Column(name="preg1", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Choice(choices={"Masculino","Femenino"})
     */
    private $preg1;

    /**
     * @var int
     *
     * @ORM\Column(name="preg2", type="integer")
     * @Assert\NotBlank()
     * @Assert\Choice(choices={1,2,3})
     */
    private $preg2;

    /**
     * @var int
     *
     * @ORM\Column(name="preg3", type="integer")
     * @Assert\NotBlank()
     * @Assert\Choice(choices={1,2,3,4,5,6,7,8,9,10,11,12})
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
     * Set formID
     *
     * @param integer $formID
     *
     * @return FormsAns
     */
    public function setFormID($formID)
    {
        $this->formID = $formID;

        return $this;
    }

    /**
     * Get formID
     *
     * @return int
     */
    public function getFormID()
    {
        return $this->formID;
    }

    /**
     * Set userID
     *
     * @param integer $userID
     *
     * @return FormsAns
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;

        return $this;
    }

    /**
     * Get userID
     *
     * @return int
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Set preg1
     *
     * @param string $preg1
     *
     * @return FormsAns
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
     * @param integer $preg2
     *
     * @return FormsAns
     */
    public function setPreg2($preg2)
    {
        $this->preg2 = $preg2;

        return $this;
    }

    /**
     * Get preg2
     *
     * @return int
     */
    public function getPreg2()
    {
        return $this->preg2;
    }

    /**
     * Set preg3
     *
     * @param integer $preg3
     *
     * @return FormsAns
     */
    public function setPreg3($preg3)
    {
        $this->preg3 = $preg3;

        return $this;
    }

    /**
     * Get preg3
     *
     * @return int
     */
    public function getPreg3()
    {
        return $this->preg3;
    }
}

