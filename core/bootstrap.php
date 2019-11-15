<?php

$config = require 'config.php';
require 'database/QueryBuilder.php';
require 'database/Connection.php';
require 'class.Task.php'

return new QueryBuilder(
  Connection::make($config['database'])
);
