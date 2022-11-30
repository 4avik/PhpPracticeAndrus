<?php

$db = require_once('bootstrap.php');

$tasks = $db->selectAll('tasks');

require_once('index.view.php');

//Connections above

//An instance of a class is an object

// $tasks = [
//    new Task('Tähtis ülesanne 1'), //0, object
//    new Task('Maiju tööd'), //1
//    new Task('Tähtis ülesanne 2'), //2 
//];

// $tasks[0]->complete();var_dump($task->isComplete());