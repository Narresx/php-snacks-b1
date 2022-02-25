<?php 
/* 
Snack 3
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
*/ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <h2>I tuoi numeri</h2>
    <ul>
    <?php for ($i = 0; $i < 15; $i++) {?>
    <li><?php echo rand(0, 15) ?></li>
    <?php } ?>
    </ul>
</body>
</html>