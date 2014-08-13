<?php

namespace TwigTest\Classes;

use TwigTest\Classes\Auteur;

/**
 * Description of TwigTest
 *
 * @author dazao
 */
class Article
{

    protected $id;
    protected $title;
    protected $description;
    protected $auteurs;
    protected $date;
    
    /**
     * Constructor
     * 
     * @param int $id
     * @param string $title
     * @param string $description
     * @param Auteur $auteurs
     * @param date $date
     */
    function __construct($id, $title, $description, $auteur, $date)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->auteur = $auteur;
        $this->date = $date;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }



}
