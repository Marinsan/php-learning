<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasques</title>
</head>
<body>
<!--
<?php
foreach ($tasks as $task) {
echo "<li>$task</li>";
}
?>
-->
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed == true): ?>
                <strike>
            <?php endif; ?>
            <?= $task ->name; ?>
            <?php if ($task->completed == true): ?>
                </strike>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

<hr>
<h1>Tasks</h1>
<p>Les meves tasques pendents són:</p>

<ul>
    <li>Comprar pa</li>
    <li>Comprar llet</li>
    <li>Practicar PHP</li>
    <li><strike>Practicar Git</strike></strike></li>
    <li><strike> bbladaojshd asjd</strike></li>
</ul>
</body>
</html>