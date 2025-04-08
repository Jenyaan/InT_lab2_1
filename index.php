<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Lab2</title>

</head>
<body>
    <h2>1. інформація чемпіонатів за обраною лігою</h2>
    <form action="get_1.php" method="get">
        <select name="league" id="league">
        <?php
            include("connect.php");
            $leagueList = $collectionGames->distinct('league');
            foreach($leagueList as $row){
                echo("<option value=\"" . htmlspecialchars($row, ENT_QUOTES) . "\">$row</option>");
            }
        ?>
        </select>
        <input type="submit" value="Показати">
    </form>

    <h2>2. список футболістів зазначеної команди</h2>
    <form action="get_2.php" method="get">
        <select name="name" id="name">
        <?php
            include("connect.php");
            $leagueList = $collectionTeams->distinct('name');
            foreach($leagueList as $row){
                echo("<option value=\"" . htmlspecialchars($row, ENT_QUOTES) . "\">$row</option>");
            }
        ?>
        </select>
        <input type="submit" value="Показати">
    </form>

    <h2>3. список ігор, у яких брала участь обрана команда</h2>
    <form action="get_3.php" method="get">
        <select name="name" id="name">
        <?php
            include("connect.php");
            $leagueList = $collectionTeams->distinct('name');
            foreach($leagueList as $row){
                echo("<option value=\"" . htmlspecialchars($row, ENT_QUOTES) . "\">$row</option>");
            }
        ?>
        </select>
        <input type="submit" value="Показати">
    </form>
</body>
</html>
