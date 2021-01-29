<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->
<?php
$matches = [
    [
        'match' => "Olimpia Milano - Cantu",
        "result" => "55 - 60"
    ],
    [
        'match' => "Fortitudo - Venezia",
        "result" => "57 - 67"
    ],
    [
        'match' => "Capo d'Orlando - Virtus",
        "result" => "78 -35"
    ],
    [
        'match' => "Reggio - Inter",
        "result" => "50 - 100"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-snacks-b1</title>
    </head>
    <body>
        <h1>4 Giornata Serie A1</h1>
        <ul>
            <li>
                <?php for ($i = 0; $i < count($matches); $i++) {
                    print $matches[$i]['match'] ." | ". $matches[$i]['result'];
                }
                ?>
                
            </li>
        </ul>
    </body>
</html>