<?php require 'partials/head.php'; ?>

<?php foreach($names as $name) : ?>
  <li>
    <?= $name->name; ?>
  </li>
<?php endforeach; ?>
  <h1>Submit Your Name</h1>

  <form method="POST" action="/Laracast/names">
    <input name="name"></input>
    <button type="submit">Submit</button>
  </form>

<?php require 'partials/footer.php'; ?>
