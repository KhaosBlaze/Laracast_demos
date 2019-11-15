<?php

$app['database']->insert('name', [
  'names' => $_POST['name']
]);
$submission = true;

require 'submit.view.php';
