<?php
class Pet
{
    private $_name;
    private $_color;

    //Default constructor
    /*function __construct()
    {
        $this->_name = "unknown";
        $this->_color = "?";
    }*/

    //Parameterized constructor
    function __construct($_name = "unknown", $_color = "?")
    {
        $this->_name = $_name;
        $this->_color = $_color;
    }

    function getName()
    {
        return $this->_name;
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function getColor()
    {
        return $this->_color;

    }


    function  setColor($color)
    {
        $this->_color = $color;
    }

    function eat()
    {
        echo $this->_name . " is eating<br>";
    }

    function talk()
    {
        echo $this->_name . " is talking<br>";
    }
}