<!doctype html>
<html lang='en'>

<head>
    <title>Pass The Pigs [Single Pig]</title>
    <meta charset='utf-8'>
</head>

<body>

    <h1>Pass The Pigs [Single Pig] Game Simulator</h1>

    <h2>Instructions</h2>
    <ul>
        <li>As Player A, throw a "model pig" ... each of which has a dot on one side.</li>
        <li>You will receives points based on the way the pig lands:</li>
        <ul>
            <li><strong>Sider</strong>: The pig is lying on its side [<u>0</u> Points]</li>
            <li><strong>Razorback</strong>: The pig is lying on its back [<u>5</u> Points]</li>
            <li><strong>Trotter</strong>: The pig is standing upright [<u>10</u> Points]</li>
            <li><strong>Snouter</strong>: The pig is leaning on its snout [<u>15</u> Points]</li>
            <li><strong>Leaning Jowler</strong>: The pig is leaning on its snout and ear [<u>20</u> Points]</li>
        </ul>
        <li>As Player B, I'll throw a pig as well.</li>
        <li>The winner is the player with the highest score.</li>
    </ul>

    <h2>Play [Random]</h2>
    <form method='get' action='index.php'>
        Throw A Pig:
        <input type="hidden" name="Play" value="Random">
        <input type='submit' value='Pass The Pigs - GO!!'>
    </form>

    <h2>Play [You Can Cheat!]</h2>
    <form method='get' action='index.php'>
        Throw A Pig:
        <label><input type='radio' name='Throw' value='0' checked>Sider</label>
        <label><input type='radio' name='Throw' value='1'>Razorback</label>
        <label><input type='radio' name='Throw' value='2'>Trotter</label>
        <label><input type='radio' name='Throw' value='3'>Snouter</label>
        <label><input type='radio' name='Throw' value='4'>Leaning Jowler</label>
        <input type="hidden" name="Play" value="Cheat">
        <input type='submit' value='Pass The Pigs - GO!!'>
    </form>

    <?php

    $pigs = array("<strong>Sider</strong> [<u>0</u> Points]", "<strong>Razorback</strong> [<u>5</u> Points]", "<strong>Trotter</strong> [<u>10</u> Points]", "<strong>Snouter</strong> [<u>15</u> Points]", "<strong>Leaning Jowler</strong> [<u>20</u> Points]");

    if ($_GET['Play'] == "Cheat") {
        $p1 = $_GET['Throw'];
    } else {
        $p1 = rand(0,4);
    }
    
    $p2 = rand(0,4);

    if ($p1 > $p2) {
        $winner = "<strong>Player A</strong>";
    } elseif ($p1 < $p2) {
	    $winner = "<strong>Player B</strong>";
    } else {
	    $winner = "None (<i>Tie</i>)";
    }

    if ($winner == "<strong>Player A</strong>" && $_GET['Play'] == 'Cheat') {
        $winner = "<strong>Player A</strong> <font style=color:Red;>** <strong><i>But You Cheated!!</i> ** &#128544;</strong></font>";
    }

    ?>

    <?php if ($_GET['Play'] == "Random" || $_GET['Play'] == 'Cheat') { ?>

    <h2>Results</h2>
    <ul>
        <li>Player A threw a <?php echo $pigs[$p1]; ?></li>
        <li>Player B threw a <?php echo $pigs[$p2]; ?></li>
        <li><u>Winner</u>: <?php echo $winner; ?></li>
    </ul>

    <?php } ?>

</body>

</html>