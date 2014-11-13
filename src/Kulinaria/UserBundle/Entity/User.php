<?php

namespace Kulinaria\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $surname;
    
    /**
     *
     * @var ArrayCollection
     */
    protected $recipts;

    public function __construct() {
        parent::__construct();
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
     * Add recipts
     *
     * @param \Kulinaria\UserBundle\Entity\Recipt $recipts
     * @return User
     */
    public function addRecipt(\Kulinaria\UserBundle\Entity\Recipt $recipts)
    {
        $this->recipts[] = $recipts;

        return $this;
    }

    /**
     * Remove recipts
     *
     * @param \Kulinaria\UserBundle\Entity\Recipt $recipts
     */
    public function removeRecipt(\Kulinaria\UserBundle\Entity\Recipt $recipts)
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
