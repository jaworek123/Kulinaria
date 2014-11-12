<?php

namespace Kulinaria\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nickname;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $email;

    /**
     *
     * @var ArrayCollection
     */
    protected $recipts;
    
    public function __construct() {
        $this->recipts = new ArrayCollection();
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

    /**
     * Set nickname
     *
     * @param string $nickname
     * @return User
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
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
     * Set surname
     *
     * @param string $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add recipts
     *
     * @param \Kulinaria\MainBundle\Entity\Recipt $recipts
     * @return User
     */
    public function addRecipt(\Kulinaria\MainBundle\Entity\Recipt $recipts)
    {
        $this->recipts[] = $recipts;

        return $this;
    }

    /**
     * Remove recipts
     *
     * @param \Kulinaria\MainBundle\Entity\Recipt $recipts
     */
    public function removeRecipt(\Kulinaria\MainBundle\Entity\Recipt $recipts)
    {
        $this->recipts->removeElement($recipts);
    }

    /**
     * Get recipts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecipts()
    {
        return $this->recipts;
    }
}
