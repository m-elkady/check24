<?php
session_start();
include_once 'vendor/autoload.php';
$controller = $_GET['controller'] ?? 'HomeController';
$action = $_GET['action'] ?? 'index';
if($controller){
    $class = 'Check24\\Controllers\\'.ucfirst($controller);
    if(class_exists($class)){
        $classObject = new $class();
        if(method_exists($classObject, $action)){
            return $classObject->$action();
        }else{
            die('invalid Action');
        }
    }else{
        die('invalid Controller');
    }
}


