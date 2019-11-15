<?php

$app['database']->insert('name', [
  'names' => $_POST['name']
]);

require 'submit.view.php';
