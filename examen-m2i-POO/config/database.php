<?php
try {
    $db = new PDO('mysql:host=localhost;port=3306;dbname=exam_m2i', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
} catch (Exception $exception) {
    echo '<img width="100" src="assets/img/travolta.gif" />';
    echo $exception->getMessage(); // Affiche le message de l'erreur
    exit(); // Arrête le script PHP
}