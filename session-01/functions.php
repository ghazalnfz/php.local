<?php

function sum ($a , $b){
    return $a + $b;
}

//$result = sum(10,20);
//echo $result;

function is_user_logged_in(){
    return true;
}

function select_bg($background_color){

    $result = '';
    switch($background_color){
        case  'red':
            $result =  '#c00';
            break;
        case 'green':
            $result =  '#0c0';
            break;
        case  'blue':
            $result =  '#00c';
        default:
            break;
    }

    return $result;
}