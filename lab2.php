<?php
echo "<link rel='stylesheet' href='css/styles.css'>";
    $Limlower = 1; // найменшее число
    $Limupper = 9; // найбольшее число

    for ($i = 1; $i <= $Limupper; $i++){
        for ($j = $Limlower; $j <= $Limupper; $j++){
            $mult[$i][$j] = $i*$j;
        }
    }

    echo '<table>';
    foreach ($mult as $multipyer1 => $auxMultiplyer){
        echo '<tr>';
        echo "<td>{$multipyer1}</td>";
        foreach ($auxMultiplyer as $multipyer2 => $value){
            echo "<td>{$multipyer1}x{$multipyer2}={$value}</td>";
        }
        echo '</tr>';
    }