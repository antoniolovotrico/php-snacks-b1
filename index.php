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
        "result" => "78 - 35"
    ],
    [
        'match' => "Reggio - Inter",
        "result" => "50 - 100"
    ],
];
?>

<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php 
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];


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
        <h2>PHP Snack 1:</h2>
        <h3><?php for ($i = 0; $i < count($matches); $i++) {
                    print $matches[$i]['match'] ." | ". $matches[$i]['result']."</br>";
                    }
            ?>
        </h3>
        <hr>
        <hr>
        <h2>PHP Snack 2:</h2>
        <h3>
            <?php echo $name ."  ". $mail ."  ". $age ?>
        </h3> 
        <form action="" method="get">
            <input type="text" name="name" id="">
            <input type="text" name="mail" id="">
            <input type="text" name="age" id="">
            <input type="submit" value="Invia">
        </form>
                
                
            
    </body>
</html>