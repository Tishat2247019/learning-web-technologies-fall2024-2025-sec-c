<?php 
require_once("../model/employer_model.php");
$search=$_REQUEST['search'];
$result = show_emps();

// echo "<tr align='center'>
//                     <th>User Name</th>
//                     <th>Employer Name</th>
//                     <th>Company Name</th>
//                     <th>Contact No</th>
//                     <th>Password</th>
//                     <th colspan='2'>Action</th>
//                 </tr>";

$emp_found = false;
while ($row = mysqli_fetch_assoc($result)) {
        if (strpos($row['user_name'], $search) !== false) {
            echo "
                <tr align='center'>                          
                <td>{$row['user_name']}</td>
                <td>{$row['emp_name']}</td>
                <td>{$row['comp_name']}</td>
                <td>{$row['contact_no']}</td>
                <td> {$row['password']}</td>
                <td>
                    <a href='../view/edit_emp.php?user_name={$row['user_name']}'> <button> EDIT</button> </a> 
                </td>
                <td>
                    <a href='delete_emp.php?user_name={$row['user_name']}'>  <button> DELETE</button> </a> 
                </td>
                <?php } ?>
            </tr>
            ";
            $emp_found = true;
        }
       
       
    }

    if(!$emp_found){
        echo "No Employer found";
    }
   


?>