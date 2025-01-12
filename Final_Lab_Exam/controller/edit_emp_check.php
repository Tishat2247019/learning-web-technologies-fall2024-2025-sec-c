<?php
require_once("../model/employer_model.php");
$old_user_name = $_REQUEST['old_user_name'];
$new_emp_name = $_REQUEST['new_emp_name'];
$new_comp_name = $_REQUEST['new_comp_name'];
$new_contact_no = $_REQUEST['new_contact_no'];
$new_password = $_REQUEST['new_password'];

$result = change_emmp_info($old_user_name, $new_emp_name, $new_comp_name, $new_contact_no, $new_password);
if($result == true){
    echo "edit success";
}
else{
    echo "failed to edit user";
}


?>