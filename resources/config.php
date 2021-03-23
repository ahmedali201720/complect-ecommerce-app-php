<?php

ob_start();

session_start();

// Directory Separator for OS.
defined("DS") ? null : define("DS",DIRECTORY_SEPARATOR);

// Defining Paths for front and back Templates.
defined("FRONT_TEMPLATE") ? null : define("FRONT_TEMPLATE", __DIR__ . DS . "templates" . DS . "front");
defined("BACK_TEMPLATE") ? null : define("BACK_TEMPLATE", __DIR__ . DS . "templates" . DS . "back");

// Database Configuration
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASSWORD") ? null : define("DB_PASSWORD", "");
defined("DB_NAME") ? null : define("DB_NAME", "ecommerce_db");

// Database Connection
$connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD , DB_NAME);
