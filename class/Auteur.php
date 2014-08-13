<?php

namespace TwigTest\Classes;

/**
 * Description of Auteur
 *
 * @author dazao
 */
class Auteur
{

    /**
     *
     * @var int 
     */
    protected $id;
    
    /**
     * @var string 
     */
    protected $firstName;
    
    /**
     *
     * @var string
     */
    protected $lastName;
    
    /**
     * @var \DateTime 
     */
    protected $birthDate;
    
    /**
     *
     * @var string 
     */
    protected $description;
    
    function __construct($id, $firstName, $lastName, $birthDate, $description)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setBirthDate(date $birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function setDescription(text $description)
    {
        $this->description = $description;
    }


}

