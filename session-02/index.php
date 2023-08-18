<?php include "functions.php";
$bg_color = '#fff';
if(isset($_POST['send'])){

    $background_color = $_POST['background'];
    $bg_color = select_bg($background_color);
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $bg_color ?>">
<!--    --><?php //if(is_user_logged_in()){
//        echo "<p>welcome</p>";
//    }else{
//        echo "<a href=''>login</a>";
//    } ?>

    <?php
//    $sample = "Ghazal";
//
//    switch($sample){
//        case "Ghazal":
//            echo "ghazal";
//           // break;
//        case "Niazzadeh":
//            echo "Niazzadeh";
//          //  break;
//        default:
//            break;
//
//    }




    ?>

<form action="" method="POST" style="background-color: <?php echo $background_color ?>">
    red<input type="radio" name="background"  value="red" <?php echo ($_POST['background'] == 'red')? 'checked' : ''; ?> />
    blue<input type="radio" name="background" value="blue" <?php echo ($_POST['background'] == 'blue')? 'checked' : ''; ?>>
    green<input type="radio" name="background" value="green" <?php echo ($_POST['background'] == 'green')? 'checked' : ''; ?>>
    <input type="submit" name="send" value="send">
</form>
</body>
</html>
<?php

//echo "hello world";
//
//$sample = 12; // integer
//
//$sample = "wordpress"; // string
//
//$a = 12.1; // float
//
//$b = "abcd"; // string
//
//$c = true; //boolean
//
//$d = 1.5;
//
//echo "<br>";
//echo $result = $a + $d;
//
//$users_id = array(11,17,19,26,19);
//
//echo "<br>";
//echo $users_id[0];
//echo "<br>";
//echo $users_id[3];
//
//$users_data = array("score1"=>11,17,19,26,19);
//
//$lessons = array("1"=>"riazi","2"=>"oloom","fizic"=>"fizic2");
//
//echo "<br>";
//echo  $lessons['fizic'];
//
//
//$sample_array = array("number"=>12,67,true,"car",array(26,"red","bmw"));
//
//echo "<br>";
//
//echo $sample_array[3][1];

