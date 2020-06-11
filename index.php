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
            $_SESSION['last'] = $_POST['last'];
            $_SESSION['service'] = $_POST['service'];
            $_SESSION['phone'] = $_POST['phone'];

            //Redirect to summary page
            $f3->reroute('summary');
        }
    }

    $f3->set('first', $_POST['first']);
    $f3->set('last', $_POST['last']);
    $f3->set('service', $_POST['service']);
    $f3->set('phone', $_POST['phone']);

    $view = new Template();
    echo $view->render('views/form.html');
});

//form 2
$f3->route('GET|POST /form2', function($f3)
{
    //echo '<h1>form</h1>';
    //If the form has been submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        var_dump($_POST);

        //Data is valid
        if (empty($f3->get('errors'))) {

            //Store the data in the session array
            $_SESSION['first'] = $_POST['first'];
            $_SESSION['last'] = $_POST['last'];
            $_SESSION['year'] = $_POST['year'];
            $_SESSION['model'] = $_POST['model'];
            $_SESSION['comments'] = $_POST['comments'];

            //Redirect to summary 2 page
            $f3->reroute('summary2');
        }
    }

    $f3->set('first', $_POST['first']);
    $f3->set('last', $_POST['last']);
    $f3->set('year', $_POST['year']);
    $f3->set('model', $_POST['model']);
    $f3->set('comments', $_POST['comments']);

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

//summary2
$f3->route('GET /summary2', function()
{
    //echo '<h1>form</h1>';

    $view = new Template();
    echo $view->render('views/summary2.html');
});

//Run F3
$f3->run();