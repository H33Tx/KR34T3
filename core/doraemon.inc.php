<?php

if(!file_exists("installed")) {
    header("location: install/");
}

if(!empty($_COOKIE["kr34t3_loggedin"]) && !empty($_COOKIE["kr34t3_passhash"])) {
    $cUsername = mysqli_real_escape_string($conn, $_COOKIE["kr34t3_loggedin"]);
    $cPasshash = mysqli_real_escape_string($conn, $_COOKIE["kr34t3_passhash"]);
    $cUser = $conn->query("SELECT * FROM `user` WHERE `username`='$cUsername' AND `password`='$cPasshash'");
    if(mysqli_num_rows($cUser)==1) {
        $admin = true;
    } else {
        $admin = false;
    }
} else {
    $admin = false;
}

if(empty($_GET["page"])) {
    $page = "public/recent";
    $pagination = "1";
    $title = $lang["title"]["recent"].$pagination;
} elseif($_GET["page"]=="recent") {
    $page = "public/recent";
    $pagination = mysqli_real_escape_string($conn, $_GET["pagination"]);
    $title = $lang["title"]["recent"].$pagination;
} elseif($_GET["page"]=="search") {
    if(empty($_GET["act"])) {
        $page = "public/search_home";
        $title = $lang["title"]["search_home"];
    } elseif($_GET["act"]=="home") {
        $page = "public/search_home";
        $title = $lang["title"]["search_home"];
    } elseif($_GET["act"]=="search") {
        $page = "public/search_act";
        $title = $lang["title"]["search_act"];
    } else {
        $page = "public/search_home";
        $title = $lang["title"]["search_home"];
    }
} elseif($_GET["page"]=="about") {
    $page = "public/about";
    $title = $lang["title"]["about"];
} elseif($_GET["page"]=="release") {
    $page ="public/release";
    $title = $lang["title"]["view"];
} elseif($_GET["page"]=="admin") {
    // check if cookie is set
    if($admin==true) {
        if($_GET["act"]=="home") {
            $page = "admin/home";
            $title = $lang["title"]["admin_home"];
        } elseif($_GET["act"]=="logout") {
            $page = "admin/logout";
            $title = $lang["title"]["admin_logout"];
        } elseif($_GET["act"]=="note") {
            $page = "admin/note";
            $title = $lang["title"]["admin_note"];
        } elseif($_GET["act"]=="settings") {
            $page = "admin/settings";
            $title = $lang["title"]["admin_settings"];
        } elseif($_GET["act"]=="new") {
            $page = "admin/new";
            $title = $lang["title"]["admin_release"];
        } elseif($_GET["act"]=="cats") {
            $page = "admin/cats";
            $title = $lang["title"]["admin_cats"];
        } elseif($_GET["act"]=="release") {
            $page = "admin/release";
            $title = $lang["title"]["admin_edit"];
        } elseif($_GET["act"]=="users") {
            $page = "admin/users";
            $title = $lang["title"]["admin_users"];
        } else {
            $page = "admin/home";
            $title = $lang["title"]["admin_home"];
        }
    } else {
        $page = "admin/login";
        $title = $lang["title"]["login"];
    }
} else {
    $page = "public/recent";
    $pagination = "1";
    $title = $lang["title"]["recent"].$pagination;
}

?>
