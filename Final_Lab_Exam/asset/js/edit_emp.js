
function check_emp_name(){
    let emp_name = document.getElementById("new_emp_name_id").value;
    if(emp_name.trim() == ""){
        document.getElementById("emp_name_val").style="display:block; color:red"
    }
    else{
        document.getElementById("emp_name_val").style="display:none"
    }
}
function check_comp_name(){
    let comp_name = document.getElementById("new_comp_name_id").value;
    if(comp_name.trim() == ""){
        document.getElementById("comp_name_val").style="display:block; color:red"
    }
    else{
        document.getElementById("comp_name_val").style="display:none"

    }
}
function check_contact_no(){
    let contact_no = document.getElementById("new_contact_no_id").value;
    if(contact_no.trim() == ""){
        document.getElementById("contact_no_val").style="display:block; color:red"
    }
    else{
        document.getElementById("contact_no_val").style="display:none"

    }
}
function check_password(){
    let password = document.getElementById("new_password_id").value;
    if(password.trim() == ""){
        document.getElementById("password_val").style="display:block; color:red"
    }
    else{
        document.getElementById("password_val").style="display:none"

    }
}
