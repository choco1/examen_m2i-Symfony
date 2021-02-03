<?php



    function getStagiers() {
    global $db;
    $query = $db->query('SELECT * FROM `stagiaire`');

    return $query->fetchAll();
    }