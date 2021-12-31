<?php

if(empty($_GET["page"])) {
    $page = "public/recent";
    $pagination = "1";
    $title = "Recent - Page $pagination";
} elseif($_GET["page"]=="recent") {
    $page = "public/recent";
    $pagination = $_GET["pagination"];
    $title = "Recent - Page $pagination";
} elseif($_GET["page"]=="search") {
    if(empty($_GET["act"])) {
        $page = "public/search_home";
        $title = "Search - Home";
    } elseif($_GET["act"]=="home") {
        $page = "public/search_home";
        $title = "Search - Home";
    }
} elseif($_GET["page"]=="about") {
    $page = "public/about";
    $title = "About";
} elseif($_GET["page"]=="admin") {
    
} else {
    $page = "public/recent";
    $pagination = "1";
    $title = "Recent - Page $pagination";
}

?>
