<?php

    App::get('database')->insert('tasks', [
        'description' => $_POST['description'],
    ]);


header('Location: /');


//    $app['database']->insert('tasks', [
//    'description' => $_POST['description'],
//    'name' => $_POST['task']
//    ]);

 ?>
 