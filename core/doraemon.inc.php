<?php

if(!file_exists("installed")) {
    header("location: install/");
}

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
    // check if cookie is set
    if(!empty($_COOKIE["loggedincookie"]) || isset($_COOKIE["loggedincookie"])) {
        if($_GET["act"]=="home") {
            $page = "admin/home";
            $title = "Admin - Home";
        } elseif($_GET["act"]=="logout") {
            $page = "admin/logout";
            $title = "Admin - Logout";
        } elseif($_GET["act"]=="note") {
            $page = "admin/note";
            $title = "Admin - Note of the Author";
        } elseif($_GET["act"]=="settings") {
            $page = "admin/settings";
            $title = "Admin - Main Settings";
        } elseif($_GET["act"]=="new") {
            $page = "admin/new";
            $title = "Admin - New Release";
        } else {
            $page = "admin/home";
            $title = "Admin - Home";
        }
    } else {
        $page = "admin/login";
        $title = "Login";
    }
} else {
    $page = "public/recent";
    $pagination = "1";
    $title = "Recent - Page $pagination";
}

?>
