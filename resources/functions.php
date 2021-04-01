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

function get_products(){
    $query = query("SELECT * from products");
    confirm($query);
    while( $row = fetch_array($query) ){
        $product = <<< DELIMITER
                            <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="item.php?id={$row['id']}"><img src="{$row['product_image']}" alt="product"></a>
                            <div class="caption">
                                <h4 class="pull-right">{$row['price']}</h4>
                                <h4><a href="item.php?id={$row['id']}">{$row['title']}</a>
                                </h4>
                                <p>{$row['description']} <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
DELIMITER;

        echo $product;


    }
}

function get_categories(){
    $query = query("SELECT * from categories");
    confirm($query);
    while( $row = fetch_array($query) ){
        $category = <<< DELIMITER
         <a href='category.php?id={$row['id']}' class='list-group-item'>{$row['title']}</a>                   
DELIMITER;

        echo $category;


    }
}