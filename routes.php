<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('tasks', 'TasksController@index');

$router->get('about/culture', 'controllers/about-culture.php');

$router->get('task', 'controllers/add-task.php');

//proovi php - interactive hiljem var_dump(1)
//Explode splits up a string


// index. view -> <h1>Sisesta ülesanne</h1> <form method="POST" action="/task"><input type="task" type="text"><input type="submit" value="Salvesta"></form>