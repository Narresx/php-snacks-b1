<?php
/* 
Snack 2
Creare un array di array.
 Ogni array figlio avrà come chiave una data in questo formato:
 DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
 Stampare ogni data con i relativi post.
*/

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <h2>Soluzione con il foreach</h2>
    <!-- Soluzione con il foreach -->
    <ul>
        <?php foreach($posts as $key => $data) { ?> 
            <li>
                <?php echo $key; ?>
                <ul>
                    <?php for ($i = 0; $i < count($data); $i++){ ?>
                        <li><?php  echo $data[$i]['title']?></li>
                        <li><?php  echo $data[$i]['author']?></li>
                        <li><?php  echo $data[$i]['text']?></li>
                        <li></li>
                    <?php } ?>
                </ul>
            </li>
        <?php }; ?>
    </ul>
<hr>

<!-- Soluzione con il for normale -->

<h2>Soluzione con il for normale</h2>
    <ul>
        <?php $date= array_keys($posts); ?>

        <?php for($j=0; $j < count($posts); $j++) { ?> 
            <li>
                <?php echo $date[$j]; ?>
                <ul>

                    <?php $current=$posts[$date[$j]]; ?>
                    
                    <?php for ($i = 0; $i < count($current); $i++){ ?>
                        <li><?php  echo $current[$i]['title']?></li>
                        <li><?php  echo $current[$i]['author']?></li>
                        <li><?php  echo $current[$i]['text']?></li>
                        <li></li>
                    <?php } ?>
                </ul>
            </li>
        <?php }; ?>
    </ul>
</body>

</html>