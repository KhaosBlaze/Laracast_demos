<?php

$app['database']->insert('names', [
  'name' => $_POST['name']
]);

require 'submit.view.php';
