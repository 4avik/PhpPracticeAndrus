<?php

ini_set('display_error', 1);


$config = require_once('config.php');


require_once('database/Connection.php');
require_once('database/QueryBuilder.php');

return new QueryBuilder(
    Connection::make($config['database'])
);