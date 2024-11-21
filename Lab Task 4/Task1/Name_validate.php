<?php

    $name_var = $_GET['name'];

    $name_validation = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ";
    $flag = true;

    function check_first_word($first_letter){
        for($i = 'a'; $i <= 'z'; $i++){
            if($first_letter == $i){
                return true;
            }
        }
        return false;
    }


        for($i = 0; $i < strlen($name_var); $i++){
            for($j = 0; $j < strlen($name_validation); $j++){
                if($name_var[$i] == $name_validation[$j]){
                    $flag = true;
                    break;
                }
                else{
                    $flag = false;
                }
            }
            if($flag == false){
                break;
            }
        }

    if(!isset($_GET['name'])){
        echo "<h1>Username can not be empty </h1>";
    }
    else if(strpos($name_var, " ") == null){
        echo "<h1>Username must conatain at least two words </h1>";
    }
    else if(!check_first_word($name_var[0])){
        echo "<h1>Username must start with a letter  </h1>";
    }
    else if(!$flag){
        echo "<h1> Not a valid Username </h1>";
    }
    else{
        echo "<h1>Your username is " . $name_var ."</h1>";
    }

?>