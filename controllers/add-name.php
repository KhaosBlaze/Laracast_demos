<?php

$app['database']->submitName(htmlspecialchars($_POST['name']));
$submission = true;

require 'submit.view.php'
