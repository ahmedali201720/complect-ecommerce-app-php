<?php

require_once("config.php");

if($connection->connect_error){
    echo "Failed to connect to database";
}