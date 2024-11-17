<?php

$my_array = array(10, 20, 30, 40, 50);
$search_element = 30;
for( $i = 0; $i < sizeof($my_array); $i++ ){
   if ($search_element == $my_array[$i]){
    echo $search_element ." is found in the array <br>";
    break;
   }
   else{
    echo $search_element ." is not found in the array <br>";
    break;
   }
}


?>