<?php

if(!isset($_GET["bg"])){
    echo "<h1> Blood group must be selected </h1>";
}
else{
    echo "<h1>Your Blood Group is ".  $_GET["bg"] . "</h1>";
}

?>