<?php require 'partials/header.blade.php' ?>
<h1>Contacte</h1>
<ul>
    <?php foreach ($data as $info) : ?>
    <li>
        <?= $info->name; ?>
    </li>
    <?php endforeach;?>
</ul>

<?php require 'partials/footer.blade.php' ?>
