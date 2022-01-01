<?php

if(isset($_POST["login"])) {
    $username = strip_tags(mysqli_real_escape_string($conn, $_POST["username"]));
    $password = strip_tags(mysqli_real_escape_string($conn, $_POST["password"]));
    
    $user_check = $conn->query("SELECT username FROM user WHERE username='$username' AND password='$password' LIMIT 1");
    if(mysqli_num_rows($user_check)=="1") {
        $_SESSION["username"] = $username;
        setcookie("loggedincookie", "$username", time()+(86400*30), "/");
        header("location: ".$url."?page=admin&act=home");
    } else {
        header("location: ".$url."?page=admin&act=login");
        echo "uh oh... bad username or password.";
    }
}

?>
