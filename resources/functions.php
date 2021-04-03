<?php

require_once("config.php");

function setMessage($msg){
    if(!empty($msg)){
        $message = escape_string($msg);
        $_SESSION['message'] = $message;
    }
}

function displayMessage(){
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function redirect($location){
    return header("location:$location");
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

function get_specific_category_products(){
    $query = query("SELECT * from products where cat_id =" . escape_string($_GET['id']) . " ");
    confirm($query);
    while( $row = fetch_array($query) ){
        $products = <<< DELIMITER
         <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail" style="height:500px;">
                    <img src="{$row['product_image']}" alt="product" style="width: 100%;height: auto;max-height: 200px;overflow: auto;">
                    <div class="caption">
                        <h3>{$row['title']}</h3>
                        <p>{$row['short_desc']}</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['id']}" class="btn btn-primary">More Info</a>
                        </p>
                    </div>
                </div>
            </div>               
DELIMITER;

        echo $products;


    }
}

function get_shop_products(){
    $query = query("SELECT * from products");
    confirm($query);
    while( $row = fetch_array($query) ){
        $products = <<< DELIMITER
         <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail" style="height: 400px;overflow: auto;">
                    <img src="{$row['product_image']}" alt="product" style="width: 100%;height: auto;max-height: 200px;overflow: auto;">
                    <div class="body" style="padding: 10px">
                         <h3>{$row['title']}</h3>
                    <p>{$row['short_desc']}</p>
                    <div class="mb-3">
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['id']}" class="btn btn-primary">More Info</a>
                    </div>
                    </div>
                </div>
            </div>               
DELIMITER;

        echo $products;


    }
}

function login(){
    if(isset($_POST['submit'])){
        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);
        $result = query("SELECT * FROM users WHERE username='{$username}' AND password='{$password}'");
        confirm($result);
        if(mysqli_num_rows($result) == 0){
            redirect("login.php");
            setMessage("your username or password is incorrect");
        }
        else{
            redirect("admin");

        }
    }
}