<?php

require_once("../model/employer_model.php");

$user_name = $_REQUEST['user_name'];
$password= $_REQUEST['password'];

if(empty(trim($user_name)) || empty(trim($password))){
    echo "please fill all the input fields<br>";
}
else{
    // echo "hello";
    
    $result = emp_login($user_name, $password);
    if($result ==  true){
       header("location:../view/home.php");


    }
    else{
        echo "Invalid Name and Password";
    }
}


?>
