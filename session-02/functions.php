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

function get_users(){
    return array(
        array('id'=>1,'name'=>'ali','email'=>'ali@gmail.com'),
        array('id'=>2,'name'=>'mohammad','email'=>'mohammad@gmail.com'),
        array('id'=>3,'name'=>'sam','email'=>'sam@gmail.com'),
        array('id'=>4,'name'=>'reza','email'=>'reza@gmail.com'),
        array('id'=>5,'name'=>'sara','email'=>'sara@gmail.com'),
        array('id'=>6,'name'=>'negin','email'=>'negin@gmail.com'),
        array('id'=>7,'name'=>'nazanin','email'=>'nazanin@gmail.com')
    );
}