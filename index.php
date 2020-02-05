<?php
//Turn on error reporting -- this is critical
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require ("vendor/autoload.php");

//Instantiate fat free
$f3 = Base::instance();

//define default route
$f3->route('GET /', function ($f3) {

    $pet1 = new Pet("Mango", "Gold");
    $pet2 = new Pet();
    $pet2->setName("Liby");

    $pet2->setColor("white");
    //var_dump($pet1);
    $dog1 = new Dog("Podi", "gray");


    $f3->set('pet1', $pet1);
    $f3->set('pet2', $pet2);
    $f3->set('dog1', $dog1);



    $view = new Template();
    echo $view->render('views/my-pets.html');

});

//run fat free
$f3-> run();