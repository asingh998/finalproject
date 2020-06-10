<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once("vendor/autoload.php");

//Start a session
session_start();

//Instantiate the F3 Base class
$f3 = Base::instance();

//Default route
$f3->route('GET /', function () {
    //echo '<h1>It is raining today.</h1>';

    $views = new Template();
    echo $views->render('views/home.html');
});

//form 1

$f3->route('GET|POST /form', function($f3)
{
    //echo '<h1>form</h1>';
    //If the form has been submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        var_dump($_POST);

        //Data is valid
        if (empty($f3->get('errors'))) {

            //Store the data in the session array
            $_SESSION['first'] = $_POST['first'];

            //Redirect to Order 2 page
            $f3->reroute('summary');
        }
    }

    $f3->set('first', $_POST['first']);
    $view = new Template();
    echo $view->render('views/form.html');
});

//form 2
$f3->route('GET /form2', function()
{
    //echo '<h1>form</h1>';

    $view = new Template();
    echo $view->render('views/form2.html');
});

//summary
$f3->route('GET /summary', function()
{
    //echo '<h1>form</h1>';

    $view = new Template();
    echo $view->render('views/summary.html');
});

//Run F3
$f3->run();