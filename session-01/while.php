<?php
$counter= 1;

while( $counter < 20  ){

    if($counter == 5){
        $counter++;
        continue;
    }
    echo "<h1>$counter</h1>";
    $counter++;
}


