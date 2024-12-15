<?php
session_start();
if(isset($_POST['login'])){
    $id = trim($_POST["id"]);
    $password = trim($_POST["password"]);
    if(empty($id) || empty($password)){
        echo "<h3>Username or Password is emtpy</h3>";
        
    }
    else{
    foreach($_SESSION['users'] as $user){
      //  echo ''.$user['id'].' '.$user['password']. "<br>";
    if($user['id'] === $id && $user['password'] === $password){
        $auth = true;
        $type = $user['type'];
        $id = $user['id'];
        break;
        // $_SESSION['status'] = true;
        
        //echo "ok";
    }
   
    }
    if($auth){
        if($type ==='user'){
            $_SESSION['status'] = true;
            header("location:user_home.php?id={$user['id']}");
        }
        else if($type === 'admin'){
        $_SESSION['status'] = true;
            header("location:admin_home.php?id={$user['id']}");
        }
    }
    else{
        echo "<h3>Invalid Username and Password</h3>";
        // break;  
    }
    }
    

}
else{
    header("location:login.html");
}

?>