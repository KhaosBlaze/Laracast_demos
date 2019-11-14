<?php

require 'functions.php';

$response = bouncer($_GET['age']);

require 'index.view.php';

?>
