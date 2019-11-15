<?php

$config = require 'config.php';
require 'core/database/QueryBuilder.php';
require 'core/database/Connection.php';
require 'core/class.Task.php';
require 'core/class.Router.php';

return new QueryBuilder(
  Connection::make($config['database'])
);
