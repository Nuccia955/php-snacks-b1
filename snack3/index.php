<?php 
    //Snack 3
    //Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. ///Stampare ogni data con i relativi post.

    $posts = [
        '17-12-2021' => [
            [
                'title' => 'Post 1',
                'author' => 'Elena Munaro',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Ciccio Pasticcio',
                'text' => 'Testo post 2'
            ],
            [
                'title' => 'Post 3',
                'author' => 'Elena Munaro',
                'text' => 'Testo post 3'
            ]
        ],
        '31-01-2021' => [
            [
                'title' => 'Post 4',
                'author' => 'Maurizio Natalizio',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Guido Vespa',
                'text' => 'Testo post 5'
            ]
        ]   ,
        '01-01-2022' => [
            [
                'title' => 'Post 6',
                'author' => 'Gatto Silvestro',
                'text' => 'Testo post 6'
            ],
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
</head>
<body>
    <h1>Snack 3: Posts</h1>
    <?php 
        $arr_keys = array_keys($posts);
        for($i = 0; $i < count($arr_keys); $i++) { ?> 
            <h2><?php echo $arr_keys[$i]?></h2>
            <?php for($j = 0; $j < count($posts[$arr_keys[$i]]); $j++) { ?> 
                <ul>
                    <li>
                        Title: <?php echo $posts[$arr_keys[$i]][$j]['title'] ?>
                    </li>
                    <li>
                        Author: <?php echo $posts[$arr_keys[$i]][$j]['author'] ?>
                    </li>
                    <li>
                        text: <?php echo $posts[$arr_keys[$i]][$j]['text'] ?>
                    </li>
                </ul>
            <?php } ?>
        <?php } ?>
</body>
</html>