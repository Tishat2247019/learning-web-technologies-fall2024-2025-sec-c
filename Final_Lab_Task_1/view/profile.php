<?php
session_start();
require_once('../model/usermodel.php');
if($_SESSION['status'] == true){
$idd = $_REQUEST['id'];
// foreach($_SESSION['users'] as $user){
//     if ($idd == $user['id']){
//         break;
//     }
// }
    $user_info = user_info($idd);
    $name = $user_info['name'];
    $id = $user_info['id'];
    $email = $user_info['email'];
    $type = $user_info['type'];
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
                    <td><?php echo $id  ?></td>
                </tr>
                <tr align="center">
                    <td>Name</td>
                    <td><?php echo $name ?></td>
                </tr>
                <tr align="center">
                    <td>Email</td>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <?php if($type == 'Admin'){  ?>
                        <a href="admin_home.php?id=<?php echo $idd?>">Go Home</a>
                        <?php }
                        else if($type == 'User'){ ?>
                        <a href="admin_home.php?id=<?php echo $idd?>">Go Home</a>
                        <?php }
                        else { ?>
                        <a href="admin_home.php?id=<?php echo $idd?>">Go Home</a>
                            <?php 
                                }   
                            ?>
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