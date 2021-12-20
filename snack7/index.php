<?php
    //Snack 7
    //Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
    $students = [
        [
            'name' => 'Elena',
            'lastname' => 'Munaro',
            'votes' => [
                8, 
                9,
                4,
                5,
                7,
                6
            ]
        ],
        [
            'name' => 'Lorenzo',
            'lastname' => 'Rossi',
            'votes' => [
                8, 
                8,
                7,
                9,
                9,
                7
            ]
        ],
        [
            'name' => 'Ciccio',
            'lastname' => 'Pasticcio',
            'votes' => [
                7, 
                7,
                8,
                6,
                6,
                6
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
    <title>Snack7</title>
</head>
<body>
    <h1>Snack 7: Registro di classe</h1>
    <ul class="students">
        <?php for($i = 0; $i < count($students); $i++) { ?> 
            <li>
                <strong><?php echo $students[$i]['name'] . ' ' . $students[$i]['lastname'] . '<br>'?></strong>
                <strong>Media voti: </strong> <?php 
                    $votes_average = array_sum($students[$i]['votes']) / count($students[$i]['votes']);
                    echo round($votes_average, 1);
                ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>