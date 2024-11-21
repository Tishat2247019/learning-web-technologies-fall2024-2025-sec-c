<?php

$get_length = count($_GET);
// $ssc_var = $_GET["ssc"];
// $hsc_var = $_GET["hsc"];
// $bsc_var = $_GET["bsc"];
// $msc_var = $_GET["msc"];
if($get_length < 2){
    echo "<h1>At least two degrees must be selected </h1>";
}
else{
    echo "<h1>Ok, at least two degrees are selected </h1>";
}

?>