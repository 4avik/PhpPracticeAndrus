<?php

ini_set('display_error', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

App::bind('config', require_once ('config.php'));

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($task, $data = []){
    extract($data);
    return require "views/{$task}.view.php";
}

//$config = App::get('config');

//BOOTSTRAP.PHP - App::bind('key', 'value') - get - app.php static propety, meetodid - composer dump autoload - controllerid parandada 





//$app = [];
//$app['config'] = require_once('config.php');


//require_once('core/Router.php');
//require_once('core/Request.php');
//require_once('core/database/Connection.php');
//require_once('core/database/QueryBuilder.php');

//$app['database'] = new QueryBuilder(
//    Connection::make($app['config']['database'])
//);

