<?php

$app = [];
$app['config'] = require 'config.php';
require 'core/database/QueryBuilder.php';
require 'core/database/Connection.php';
require 'core/class.Task.php';
require 'core/class.Router.php';
require 'core/class.Request.php';

$app['database'] =  new QueryBuilder(
  Connection::make($app['config']['database'])
);
