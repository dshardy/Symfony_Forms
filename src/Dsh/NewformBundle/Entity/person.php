<?php

namespace Dsh\NewformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * person
 */
class person
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $age;

    /**
     * @var string
     */
    private $footballteam;


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
     * @return person
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
     * Set age
     *
     * @param integer $age
     * @return person
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set footballteam
     *
     * @param string $footballteam
     * @return person
     */
    public function setFootballteam($footballteam)
    {
        $this->footballteam = $footballteam;

        return $this;
    }

    /**
     * Get footballteam
     *
     * @return string 
     */
    public function getFootballteam()
    {
        return $this->footballteam;
    }
}
