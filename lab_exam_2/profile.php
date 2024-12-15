<?php
session_start();
if($_SESSION['status'] == true){
$idd = $_REQUEST['id'];
foreach($_SESSION['users'] as $user){
    if ($idd == $user['id']){
        break;
    }
}
?>
    <html>
        <head>
            <title>Home Page</title>
        </head>
            <body>
                
                <table align="center" border="1" cellspacing="0" width="300px" height="300px">
                    
                
                <tr align="center">
                    <td colspan="2">Profile</td>
                </tr>
                <tr align="center">
                    <td>Id</td>
                    <td><?php echo $user['id']  ?></td>
                </tr>
                <tr align="center">
                    <td>Name</td>
                    <td><?php echo $user['name'] ?></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="admin_home.php?id=<?php echo $idd ?>">Go Home</a>
                    </td>
                </tr>
                
                </table>    
            </body>
    </html>

<?php
}
else{
    header("location:login.html");
}
?>