<?php require 'partials/header.blade.php' ?>
<h1>About</h1>
<ul>
    <?php foreach ($myself as $my) : ?>
    <li>
        <?= $my->name; ?>
    </li>
    <?php endforeach;?>
</ul>

<?php require 'partials/footer.blade.php' ?>
