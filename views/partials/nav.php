<?php
  $dir = App::get('config')['directory'];
?>
<nav>
  <ul>
    <li><a href="/<?= $dir; ?>">Homet</a></li>
    <li><a href="/<?= $dir; ?>/about">About</a></li>
    <li><a href="/<?= $dir; ?>/about/culture">About our Culture</a></li>
    <li><a href="/<?= $dir; ?>/contact">Contact</a></li>
    <li><a href="/<?= $dir; ?>/submit">Submit Name</a></li>
  </ul>
</nav>
