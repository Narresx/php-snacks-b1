<?php

/* 
Traccia:
Snack 1
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto 
e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET['name'];

var_dump($name);

$mail = $_GET['mail'];

var_dump($mail);

$age = $_GET['age'];

var_dump($age);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <div>
        <?php if (strlen($name) > 3 && strpos($mail, '.') != false && strpos($mail, '@') != false && !is_nan($age)) { //strpos restituisce false se il carattere cercato è in prima posizione
            echo 'Accesso Riuscito';
        } else {
            echo 'Accesso Negato';
        } ?>
    </div>
</body>

</html>