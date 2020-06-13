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

//Instantiate my classes
$validator = new validation();
$controller = new controller($f3, $validator);

$db = new database();

//Default route
$f3->route('GET /', function () {
   $GLOBALS['controller']->home();
});

//form 1

$f3->route('GET|POST /form', function()
{
    $GLOBALS['controller']->form();
});

//form 2
$f3->route('GET|POST /form2', function()
{
    $GLOBALS['controller']->form2();
});

//summary
$f3->route('GET /summary', function()
{
    $GLOBALS['controller']->summary();
});

//summary2
$f3->route('GET /summary2', function()
{
   $GLOBALS['controller']->summary2();
});

//admin
$f3->route('GET /admin', function()
{
    $GLOBALS['controller']->admin();
});

//Run F3
$f3->run();