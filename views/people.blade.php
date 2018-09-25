<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persones</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="/tasks">Tasques</a></li>
        <li><a href="/people">Persones</a></li>
        <li><a href="/lessons">Llisons</a></li>
        <li><a href="/contact">Contacte</a></li>
        <li><a href="/about">Sobre nosaltres</a></li>
    </ul>
</nav>
<h1>Persones</h1>
<ul>
    <?php foreach ($people as $person) : ?>
    <li>
        <?= $person->name; ?> | <?= $person->dni; ?>
    </li>
    <?php endforeach;?>
</ul>


</body>
</html>