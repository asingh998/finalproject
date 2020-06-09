<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once("vendor/autoload.php");

//Instantiate the F3 Base class
$f3 = Base::instance();

//Default route
$f3->route('GET /', function () {
    //echo '<h1>It is raining today.</h1>';

    $views = new Template();
    echo $views->render('views/home.html');
});

//form

$f3->route('GET /form', function()
{
    //echo '<h1>form</h1>';

    $view = new Template();
    echo $view->render('views/form.html');
});

//Run F3
$f3->run();