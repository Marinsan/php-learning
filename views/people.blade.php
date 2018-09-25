<?php require 'partials/header.blade.php' ?>
<h1>Persones</h1>
<ul>
    <?php foreach ($people as $person) : ?>
    <li>
        <?= $person->name; ?> | <?= $person->dni; ?>
    </li>
    <?php endforeach;?>
</ul>

<?php require 'partials/footer.blade.php' ?>
