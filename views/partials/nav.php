<?php
  $config = require 'config.php';
  $dir = $config['directory'];
?>
<nav>
  <ul>
    <li><a href="/<?= $dir; ?>">Homet</a></li>
    <li><a href="/<?= $dir; ?>/about">About</a></li>
    <li><a href="/<?= $dir; ?>/about/culture">About our Culture</a></li>
    <li><a href="/<?= $dir; ?>/contact">Contact</a></li>
    <li><a href="/<?= $dir; ?>/submit">Contact</a></li>
  </ul>
</nav>
