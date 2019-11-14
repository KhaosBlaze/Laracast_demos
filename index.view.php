<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

  <?php foreach($tasks as $task) : ?>
    <li>
      <?php if ($task->completed) : ?>
        <strke>
      <?php endif; ?>
      <?= task->description; ?>
      <?php if ($task->completed) : ?>
        </strke>
      <?php endif; ?>

    </li>
  <?php endforeach; ?>

</body>
</html>
