<?php
session_start();
if(isset($_POST["signup"])){

$id = trim($_POST["id"]);
$password = trim($_POST["password"]);
$confirm_password = trim($_POST["confirm_password"]);
$name = trim($_POST["name"]);

if(empty($id) || empty($name) || empty($password) || empty($confirm_password) || !isset($_POST['type'])){
    echo "<h3>Input fields can not be emtpy</h3>";
}
else if( $password !== $confirm_password){
    echo "<h3>Password and Confirm password does not match</h3>";
}
else{
    if(!isset($_SESSION['users'])){
        $_SESSION['users'] = [];
    }
   
   $file =  fopen('user_info.txt', 'a+');
    $type = $_POST['type'];
    $user = ['id' => $id, 'password' => $password, 'name' => $name, "type" => $type];
    $_SESSION['users'][] = $user;
    $user_info = "$id $name $password $type \n";
    fwrite( $file, $user_info);
    fclose( $file );
    // foreach($_SESSION['users'] as $user){
    //     echo ''.$user['id'].' '.$user['password']. $user['type'] ."<br>";
    // }   
   header("location:login.html");

}

}
else{
    header("location:Registration_page.html");
}


?>