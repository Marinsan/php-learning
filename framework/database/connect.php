<?php
function connect() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','h3vBPc4hwZa3734t';
    } catch (\PDOException $e) {
        die('Could not connect: ' . $e);
    }
}