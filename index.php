<?php
//Turn on error reporting -- this is critical
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require ("vendor/autoload.php");

//Instantiate fat free
$f3 = Base::instance();

//define default route
$f3->route('GET /', function () {

    $pet1 = new Pet("Mango", "Gold");
    $pet1->eat();

    $pet2 = new Pet();

    //Call the talk method
    $pet1->talk();
    /*$view = new Template();
    echo $view->render('views/my-pets.html');*/

});

//run fat free
$f3-> run();