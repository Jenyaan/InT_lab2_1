<?php
    require_once __DIR__ . "/vendor/autoload.php";
    $collectionGames = (new MongoDB\Client)->test->games;
    $collectionTeams = (new MongoDB\Client)->test->teams;

?>