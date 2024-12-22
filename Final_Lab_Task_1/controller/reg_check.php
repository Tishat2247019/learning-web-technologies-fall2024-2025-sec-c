<?php
session_start();
require_once('../model/usermodel.php');
if(isset($_POST["signup"])){

$id = trim($_POST["id"]);
$password = trim($_POST["password"]);
$confirm_password = trim($_POST["confirm_password"]);
$name = trim($_POST["name"]);
$email = trim($_POST['email']);

if(empty($id) || empty($name) || empty($email) || empty($password) || empty($confirm_password) || !isset($_POST['type'])){
    echo "<h3>Input fields can not be emtpy</h3>";
}
else if( $password !== $confirm_password){
    echo "<h3>Password and Confirm password does not match</h3>";
}
else{
    if(!isset($_SESSION['users'])){
        $_SESSION['users'] = [];
    }
   
    $type = $_POST['type'];
    // $user = ['id' => $id, 'password' => $password, 'name' => $name, "type" => $type];

    // $conn = mysqli_connect('127.0.0.1', 'root', '', 'check');
    // var_dump($conn);
    // $sql = "select * from first_check";
    // $result = mysqli_query($conn, $sql);

    // $sql = "insert into first_check VALUES('$name', '$password', '$id', '$email')";
    // if(mysqli_query($conn, $sql)){
        //    header("location:login.html");
    // }else{
        // echo "There is an error";
    // }

     $addUser = addUser($name, $password, $id, $email, $type);
     if($addUser){
        header("location:../view/login.html");
     }
     else{
        header("location:../view/reg.html");
     }


    // $_SESSION['users'][] = $user;
    // $user_info = "$id $name $password $type \n";
    // fwrite( $file, $user_info);
    // fclose( $file );
    // foreach($_SESSION['users'] as $user){
    //     echo ''.$user['id'].' '.$user['password']. $user['type'] ."<br>";
    // }   
//    header("location:login.html");

}

}
else{
    header("location:../view/reg.html");
}

?>