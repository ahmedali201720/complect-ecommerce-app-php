<?php

require_once("config.php");

function redirect($location){
    return header("location : $location");
}

function query($query){
    global $connection;
    return mysqli_query($connection,$query);
}

function confirm($result){
    global $connection;
    if(!$result){
        die("Query Failed" . ' - ' . mysqli_error($connection));
    }
}

function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection , $string);
}

function fetch_array($array){
    return mysqli_fetch_array($array);
}