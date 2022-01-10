<?php

$config["general"]["name"] = "KR34T3";
$config["general"]["slogan"] = "your own release system";
$config["general"]["url"] = "http://localhost/";
$config["general"]["folder"] = "KR34T3/";
$config["general"]["murdoch_murdoch"] = "0";
$config["general"]["lang"] = "en-us";

$config["db"]["host"] = "localhost";
$config["db"]["user"] = "root";
$config["db"]["pass"] = "";
$config["db"]["tale"] = "kr34t3";

/* DO NOT EDIT BELOW THIS LINE */

$name = $config["general"]["name"];
$slogan = $config["general"]["slogan"];
$url = $config["general"]["url"].$config["general"]["folder"];

$conn = new mysqli($config["db"]["host"], $config["db"]["user"], $config["db"]["pass"], $config["db"]["tale"]);
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    // Something went wrong?
    die("Couldn't connect to Database: " . $conn->connect_error);
}

?>