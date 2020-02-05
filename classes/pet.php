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

    function eat()
    {
        echo $this->_name . " is eating<br>";
    }

    function talk()
    {
        echo "Pet is talking<br>";
    }
}