<?php

$email_var = $_GET["email"];
$validate1 = strpos($email_var, ".com");
$validate2 = strpos($email_var, "@");
if($validate1 == null || $validate1 < strlen($email_var) - 4 || (strlen($email_var) - $validate2) < 5){
    echo "<h1>This is not a valid email</h1>";
} 
else{
    echo "<h1>Your email is " . $email_var . "</h1>";
}

?>