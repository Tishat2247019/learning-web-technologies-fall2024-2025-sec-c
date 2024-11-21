<?php

if(isset($_GET["gender"])){
    $gender_var = $_GET["gender"];
    echo " <h1>You selected " . $gender_var ."</h1>";
}
else{
    echo "<h1>At least one of the genders must be selected </h1>";
}

?>