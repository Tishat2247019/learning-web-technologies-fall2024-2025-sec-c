<?php
require_once("../model/employer_model.php");
$user_name = $_REQUEST['user_name'];

$result = delete_emp($user_name);

if($result){
    echo "delete succesfull";
}
else{
    echo "problem in deleting user";
}


?>