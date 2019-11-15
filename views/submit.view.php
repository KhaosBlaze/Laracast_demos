<?php require 'partials/head.php'; ?>
  <?php if($submission) : ?>
    <h1>Your Submission was successful</h1>
  <?php endif ?>
  <h1>Submit Your Name</h1>

  <form method="POST" action="/Laracast/names">
    <input name="name"></input>
    <button type="submit">Submit</button>
  </form>

<?php require 'partials/footer.php'; ?>
