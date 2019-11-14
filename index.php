<?php

require 'functions.php';

$response = bouncer(htmlspecialchars($_GET['age']));

require 'index.view.php';

?>
