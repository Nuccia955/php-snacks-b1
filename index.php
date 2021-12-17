<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Snacks block 1</title>
</head>
<body>
    <h1>Snack 3</h1>
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

    $arr_keys = array_keys($posts);
    for($i = 0; $i < count($arr_keys); $i++) {
        echo $arr_keys[$i];
        var_dump($posts[$arr_keys[$i]]);
    }
    ?>


    <h1>Snack 4</h1>
    <?php
    //Snack 4
    //Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

    $rand_numbers = [];
    while(count($rand_numbers) < 15) {
        $num = rand(1, 100);
        if(!in_array($num, $rand_numbers)) {
            $rand_numbers[] = $num;
        }
    }
    var_dump($rand_numbers);
    ?>

    <h1>Snack 5</h1>
    <?php
    //Snack 5
    //Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

    $text = ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae consectetur sapien, sit amet egestas justo. Pellentesque facilisis consequat justo sit amet finibus. Nulla tempor tortor iaculis ipsum auctor semper. Fusce varius mauris mi, sed efficitur nisi sagittis ut. Pellentesque placerat mattis laoreet. Suspendisse pellentesque, nisl id imperdiet dignissim, augue leo placerat tortor, non mollis urna lectus ac lectus. Nullam lacinia tincidunt ultrices. Donec pulvinar commodo auctor. Phasellus lacinia feugiat sem, at volutpat nulla vehicula in. Mauris purus eros, fermentum vel malesuada non, tincidunt quis mauris. Donec posuere mauris id mi tempor molestie. Pellentesque eget risus aliquam, ornare tellus eleifend, pellentesque lorem. Donec vulputate sollicitudin tortor sit amet maximus. Duis commodo ipsum non varius sollicitudin. Donec in ornare est, mattis ultricies nisl. Pellentesque hendrerit efficitur mi, tristique sodales massa. Donec vulputate ultrices enim. Sed a fringilla ipsum. Quisque iaculis pellentesque metus ac pulvinar. Etiam rutrum et velit id porttitor. In sit amet sapien consectetur, pulvinar nunc eget, ullamcorper velit. Aenean ac elit purus. Vestibulum in condimentum velit';

    echo $text;

    $paragraph = explode('.', $text);
    for($i = 0; $i < count($paragraph); $i++) {
        echo "<p>".$paragraph[$i].".<br></p>";
    }
    ?>

    <h1>Snack 6</h1>
    <?php
    //Snack 6
    //Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
    ?>
    <div class="row">
        <div class="box lightgray">
            <?php
                for($i = 0; $i < count($db['teachers']); $i++) {
                    echo $db['teachers'][$i]['name']." ".$db['teachers'][$i]['lastname']."<br>";
                }
            ?>
        </div>
        <div class="box lightgreen">
            <?php
                for($i = 0; $i < count($db['teachers']); $i++) {
                    echo $db['pm'][$i]['name']." ".$db['pm'][$i]['lastname']."<br>";
                }
            ?>
        </div>
    </div>

    <h1>Snack 7</h1>
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
    ]
    ?>
    <div class="students">
        <?php
        for($i = 0; $i < count($students); $i++) {
            echo "Nome studente: ".$students[$i]['name']."<br>";
            echo "Cognome studente: ".$students[$i]['lastname']."<br>";
            $votes_average = array_sum($students[$i]['votes']) / count($students[$i]['votes']);
            echo "Media Voti: ".round($votes_average, 1)."<br>";
        }
        ?>
    </div>
</body>
</html>
