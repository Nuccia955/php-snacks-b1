<h1>Snack 4: Rand Numbers</h1>
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