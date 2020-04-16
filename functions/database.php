<?php
require("../config.php");
try {
    $db = new PDO("mysql:host={$config['DB_HOST']};dbname=digicoco", $config['DB_USER'], $config['DB_PASSWORD']);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}