<?php


//An instance of a class is an object
class Task { //class

    public $description; 
    public $is_completed = false;

    public function __construct($description) //Märgib ära, et Taski sees on kirjeldus ja 0. Lühem variant descriptionist ja is completedist võib siin olla ka nt. desc ja completed - erinevad muutujad kaitstud muutujatest
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->is_completed = true;
    }

    public function isComplete()
    {
        return $this->is_completed;
    }

}

//$task - variable

$tasks = [
    new Task('Täida lahter'), //0, object
    new Task('Pese hambaid'), //1
    new Task('Õpilasesinduse protokoll'), //2
];

$tasks[0]->complete();

require 'index.view.php';

//var_dump(tasks);

//$task = new Task('Go to the store'); //object

//var_dump($task->isComplete());

//$task->complete();

//var_dump($task->isComplete());