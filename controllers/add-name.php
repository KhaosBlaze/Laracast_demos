<?php

$app['database']->insert('names', [
  'name' => $_POST['name']
]);

require 'views/submit.view.php';
