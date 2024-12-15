<?php
    session_start();
    if(!isset($_SESSION['status'])){
        header('location: login.html'); 
    }

?>
<html>
<head>
    <title>View Users</title>
</head>
<body>
        <h2>User list</h2>
        <a href='home.php'>Back </a> |
        <a href='logout.php'>logout </a>

        <br>

        <table border=1 cessspacing="0">
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>User Type</th>
                
            </tr>
            <?php 
                foreach($_SESSION['users'] as $user){
            ?>
            <tr>
                <td><?php echo $users['id']; ?></td>
                <td><?php echo $users['name']; ?></td>
                <td><?php echo $users['type']; ?></td>
            </tr>
            <?php } ?>
                <tr>
                <td colspan="3">
                    <a href="admin.php"> Go Home </a> 
                </td>
                </tr>
               

           
        </table>
</body>
</html>
