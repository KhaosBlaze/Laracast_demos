<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

	<h1>Daily Task</h1>
	
	<ul>

		<?php foreach ($task as $heading => $value) : ?>
			<li>
				<strong><?= ucwords($heading); ?></strong>: <?= $value; ?>
			</li>
		<?php endforeach; ?>	

	</ul>

	<strong> Status: </strong>
	
	<?php if ($task['completed'] > 500) : ?>
		<span class="icon">&#9989;</span>
	<?php elseif ( $task['completed'] > 50) : ?>
		<span class="icon">Incomplete</span>
	<?php else : ?>
		<span class="icon">What have you done</span>
	<?php endif; ?>

</body>
</html>

