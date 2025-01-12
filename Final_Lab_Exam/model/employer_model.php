<?php
function get_connection(){

    $conn = mysqli_connect("127.0.0.1", "root", "", "crud_op" );
    return $conn;
}

function add_emp($user_name, $emp_name, $comp_name, $contact_no, $password)
{
    $conn = get_connection();
    $sql = "insert into emp_info values ('$user_name', '$emp_name', '$comp_name', '$contact_no', '$password')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function emp_login($user_name, $password){
    $conn = get_connection();
    $sql = "select * from emp_info where user_name = '{$user_name}' and password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        return true;
    }
    else{
        return false;
    }
}

function show_emps(){
    $conn = get_connection();
    $sql = "select * from emp_info";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function emp_info($user_name){
    $conn = get_connection();
    $sql = "select * from emp_info where user_name = '$user_name'";
    $result = mysqli_query($conn, $sql);
    // var_dump($result);

    $row = mysqli_fetch_assoc($result);
    return $row; 
}

function change_emmp_info($old_user_name, $new_emp_name, $new_comp_name, $new_contact_no, $new_password){
    $conn = get_connection();
    $sql = "update emp_info set emp_name = '$new_emp_name', comp_name ='$new_comp_name',contact_no = '$new_contact_no', password='$new_password' where user_name = '$old_user_name'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function delete_emp($user_name){
    $conn = get_connection();
    $sql = "delete from emp_info where user_name = '$user_name'";
    $result = mysqli_query($conn, $sql);
    return $result;
}


?>