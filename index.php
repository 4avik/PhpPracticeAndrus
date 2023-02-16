<?php

require_once('vendor/autoload.php');
require_once('core/bootstrap.php');

// $router = new Router;

//require_once('routes.php');


//require_once($router->direct($uri));



require_once Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

//Try "var masterpiece" chrome extension

//Connections above

//An instance of a class is an object

// $tasks = [
//    new Task('Tähtis ülesanne 1'), //0, object
//    new Task('Maiju tööd'), //1
//    new Task('Tähtis ülesanne 2'), //2 
//];

// $tasks[0]->complete();var_dump($task->isComplete());