<?php

$day_var = $_GET["day"];
$month_var = $_GET["month"];
$year_var = $_GET["year"];

function check_day($day_var)
{
    for ($i = 1; $i <= 31; $i++){
        if($day_var == $i){
           return true;
        }
    }
    return false;
}

function check_month($month_var)
{
    for ($i = 1; $i <= 12; $i++){
        if($month_var == $i){
           return true;
        }
    }
    return false;
}

function check_year($year_var)
{
    for ($i = 1953; $i <= 1998; $i++){
        if($year_var== $i){
           return true;
        }
    }
    return false;
}


if(empty($day_var) || empty($month_var) || empty($month_var)){
    echo "<h1>Date of Birth can not be empty</h1>";
}
else if(!check_day($day_var)){
    echo "<h1>Day must be in between 1 - 31</h1>";
}
else if(!check_month($month_var)){
    echo "<h1>Month must be in between 1 - 12 </h1>";
}

else if(!check_year($year_var)){
    echo "<h1>Year must be in between 1953 - 1998</h1>";
}
else{
    echo "<h1> Email is {$day_var} / {$month_var} /{$year_var}</h1>";
}

?>