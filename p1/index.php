<!doctype html>
<html lang='en'>

<head>
    <title>Pass The Pigs [Single Pig]</title>
    <meta charset='utf-8'>
</head>

<body>

    <h1>Pass The Pigs [Single Pig] Game Simulator</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Player A and Player B each throw a "model pig" ... each of which has a dot on one side.</li>
        <li>The player receives points based on the way the pig lands:</li>
        <ul>
            <li><strong>Sider</strong>: The pig is lying on its side [<u>0</u> Points]</li>
            <li><strong>Razorback</strong>: The pig is lying on its back [<u>5</u> Points]</li>
            <li><strong>Trotter</strong>: The pig is standing upright [<u>10</u> Points]</li>
            <li><strong>Snouter</strong>: The pig is leaning on its snout [<u>15</u> Points]</li>
            <li><strong>Leaning Jowler</strong>: The pig is leaning on its snout and ear [<u>20</u> Points]</li>
        </ul>
        <li>The winner is the player with the highest score.</li>
    </ul>

    <?php

$pigs = array("<strong>Sider</strong> [<u>0</u> Points]", "<strong>Razorback</strong> [<u>5</u> Points]", "<strong>Trotter</strong> [<u>10</u> Points]", "<strong>Snouter</strong> [<u>15</u> Points]", "<strong>Leaning Jowler</strong> [<u>20</u> Points]");

$p1 = rand(0,4);
$p2 = rand(0,4);

if ($p1 > $p2) {
	$winner = "<strong>Player A</strong>";
} elseif ($p1 < $p2) {
	$winner = "<strong>Player B</strong>";
} else {
	$winner = "None (<i>Tie</i>)";
}

?>

    <h2>Results</h2>
    <ul>
        <li>Player A threw a <?php echo $pigs[$p1]; ?></li>
        <li>Player B threw a <?php echo $pigs[$p2]; ?></li>
        <li><u>Winner</u>: <?php echo $winner; ?></li>
    </ul>

</body>

</html>