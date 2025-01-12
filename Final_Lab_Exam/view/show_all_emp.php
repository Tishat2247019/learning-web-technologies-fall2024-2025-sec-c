<?php
    session_start();
    require_once("../model/employer_model.php");
    $result = show_emps();
?>
<html>
<head>
    <title>View Emp List</title>
</head>
<body>
        <h1 align="center" style="font-size:60px; text-align:center">Employers list</h1>

        <div  style="display:flex; ">

        <h1><input style="padding:10px 20px" type="text" id="search" onkeyup="search_emp()"> search An Employess</h1>

        
        <table border=1 cellspacing="0" align="center" width="50%" id="table1" class="table">

        <thead>

            <tr align="center">
                <th>User Name</th>
                <th>Employer Name</th>
                <th>Company Name</th>
                <th>Contact No</th>
                <th>Password</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
          

            <?php 
                 while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr align="center">                          
                <td><?php echo $row['user_name']; ?></td>
                <td><?php echo $row['emp_name']; ?></td>
                <td><?php echo $row['comp_name']; ?></td>
                <td><?php echo $row['contact_no']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                    <a href="edit_emp.php?user_name=<?php echo $row['user_name']?>"> <button>
                        EDIT
                    </button> </a> 
                </td>
                <td>
                    <a href="../controller/delete_emp.php?user_name=<?php echo $row['user_name']?>"> <button>
                        delete
                    </button> </a> 
                </td>
                <?php } ?>
            </tr>
                
        </table>
        </div>



    <script src="../asset/js/search_emp.js"></script>

</body>
</html>