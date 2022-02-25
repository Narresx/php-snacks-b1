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
