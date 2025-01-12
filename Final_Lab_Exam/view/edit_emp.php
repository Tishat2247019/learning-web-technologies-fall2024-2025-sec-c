<?php
require_once('../model/employer_model.php');
    $user_name = $_REQUEST['user_name'];
    $emp_info = emp_info($user_name);
    $emp_name = $emp_info['emp_name'];
    $comp_name = $emp_info['comp_name'];
    $contact_no = $emp_info['contact_no'];
    $password = $emp_info['password'];
  
?>

<html>
    <head>
        <title>Edit User Page</title>
    </head>

    <body>

    <table align="center" >
    <form action="../controller/edit_emp_check.php" method="POST">
    <h1 style="text-align: center;font-size: 60px;">Welcome to Edit Employer Page</h1>
       
        <tr>
            <td>Username</td>
            <td><input type="text" readonly value="<?php echo $user_name ?>" name="old_user_name" id="old_user_name_id"></td>
        </tr>
        <tr>
            <td>Employer Name</td>
            <td><input type="text" disabled value="<?php echo $emp_name ?>" id="old_emp_name_id"></td>
        </tr>
        <tr>
            <td>New Employer Name</td>
            <td><input type="text"  name="new_emp_name" id="new_emp_name_id"></td>
        </tr>
        <tr>
            <td>Company Name</td>
            <td><input type="text" disabled value="<?php echo $comp_name ?>" id="old_comp_name_id"></td>
        </tr>
        <tr>
            <td>New Company Name</td>
            <td><input type="text"  name="new_comp_name" id="new_comp_name_id"></td>
        </tr>
        <tr>
            <td>Contact No</td>
            <td><input type="text" disabled value="<?php echo $contact_no ?>" id="old_contact_no_id"></td>
        </tr>
        <tr>
            <td>New Contact No</td>
            <td><input type="text"  name="new_contact_no" id="new_contact_no_id"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" disabled value="<?php echo $password ?>"></td>
        </tr>
        <tr>
            <td>New Password</td>
            <td><input type="text"  name="new_password" id="new_password_id"></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" name="submit"> &nbsp; &nbsp; &nbsp;<input type="reset" value="Reset" name="reset"></td>
        </tr>
        <tr>
          <td colspan="2"><a href="show_all_emp.php"> Go Back</a></td>
        </tr>
        </form>
    </table>
    <script src="../asset/js/edit_user.js"></script>
        
       
    </body>
</html>