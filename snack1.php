<?php
    $matches = [
        [
            "Squadra 1" => "Toronto Raptors",
            "Squadra 2" => "Philadelphia 76ers",
            "Punteggio 1" => 110,
            "Punteggio 2" => 103
        ],
        [
            "Squadra 1" => "Cleveland Cavaliers",
            "Squadra 2" => "Oklahoma City Thunder",
            "Punteggio 1" => 101,
            "Punteggio 2" => 117
        ],
        [
            "Squadra 1" => "New York Knicks",
            "Squadra 2" => "Minnesota Timberwolves",
            "Punteggio 1" => 103,
            "Punteggio 2" => 99
        ],
        [
            "Squadra 1" => "Orlando Magic",
            "Squadra 2" => "Detroit Pistons",
            "Punteggio 1" => 105,
            "Punteggio 2" => 96
        ],
        [
            "Squadra 1" => "Atlanta Hawks",
            "Squadra 2" => "Denver Nuggets",
            "Punteggio 1" => 123,
            "Punteggio 2" => 115
        ],
        [
            "Squadra 1" => "Los Angeles Clippers",
            "Squadra 2" => "Brooklyn Nets",
            "Punteggio 1" => 108,
            "Punteggio 2" => 112
        ],
        [
            "Squadra 1" => "Milwaukee Bucks",
            "Squadra 2" => "Sacramento Kings",
            "Punteggio 1" => 128,
            "Punteggio 2" => 115
        ]
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>PhP Snack 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- MAIN -->
    <main>
        <h1>Tabellone Partite</h1>
        <?php for ($i = 0; $i < count($matches); $i++) { 
            $prima_squadra = $matches[$i]["Squadra 1"];
            $seconda_squadra = $matches[$i]["Squadra 2"];
            $punti_squadra1 = $matches[$i]["Punteggio 1"];
            $punti_squadra2 = $matches[$i]["Punteggio 2"];
        ?>
            <div class="row">
                <p><?php echo $prima_squadra; ?> -</p>
                <p><?php echo $seconda_squadra; ?> |</p>
                <p><?php echo $punti_squadra1; ?> -</p>
                <p><?php echo $punti_squadra2; ?></p>
            </div>
        <?php } ?>
    </main>

</body>
</html>