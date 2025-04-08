<?php
include("connect.php");

$name = urldecode($_GET["name"]);

$cursor = $collectionGames->find(
    ['teams' => $name]
);

echo "<h2>Список ігор, у яких брала участь команда: $name</h2>";

echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>
        <th>Дата</th>
        <th>Місце</th>
        <th>Команди</th>
        <th>Переможець</th>
        <th>Рахунок</th>
      </tr>';

foreach ($cursor as $item) {
    echo '<tr>';
    echo '<td>' . $item['date'] . '</td>';
    echo '<td>' . $item['location'] . '</td>';
    
    $teams = $item['teams']->getArrayCopy();
    echo '<td>' . (is_array($teams) ? implode(' vs ', $teams) : 'невідомо') . '</td>';
    
    echo '<td>' . $item['winner'] . '</td>';
    echo '<td>' . $item['score'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>
