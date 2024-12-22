<?php
$idd = $_REQUEST['id'];
$idt = $_REQUEST['idt'];
require_once("usermodel.php");
$conn = getConnection();
$sql = "DELETE FROM users WHERE id='$idt'";
$result = mysqli_query($conn, $sql);
if($result){
    echo "user deleted";
}
else{
    echo "some error";
}
?>

<a href="../view/view_users.php?id=<?php echo $idd   ?>"> Go Back</a>

