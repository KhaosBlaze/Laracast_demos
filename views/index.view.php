<?php require 'partials/head.php'; ?>

  <?php foreach($tasks as $task) : ?>
    <li>
      <?php if ($task->completed) : ?>
        <strke><?= $task->description; ?></strke>
      <?php endif; ?>
      <?= $task->description; ?>


    </li>
  <?php endforeach; ?>

<?php require 'partials/footer.php'; ?>
