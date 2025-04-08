<?php
include("connect.php");

$name = urldecode($_GET["name"]);

$cursor = $collectionTeams->find(
    ['name' => $name],
    ['projection' => ['_id' => 0, 'players' => 1]]
);

echo "<h2>Список гравців у команді: $name</h2>";

foreach ($cursor as $team) {
    $players = $team['players']->getArrayCopy();    

    echo "<ol>";
    foreach ($players as $player) {
        echo "<li>$player</li>";
    }
    echo "</ol>";
}
?>
