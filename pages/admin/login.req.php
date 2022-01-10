<?php

$error = "";

if(isset($_POST["login"])) {
    $username = strip_tags(mysqli_real_escape_string($conn, $_POST["username"]));
    $password = strip_tags(mysqli_real_escape_string($conn, $_POST["password"]));
    $password = hash('sha512', $password);
    $user_check = $conn->query("SELECT username FROM user WHERE username='$username' AND password='$password' LIMIT 1");
    if(mysqli_num_rows($user_check)=="1") {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        setcookie("kr34t3_loggedin", "$username", time()+(86400*30), "/");
        setcookie("kr34t3_passhash", "$password", time()+(86400*30), "/");
        header("location: ".$url."index.php?page=admin&act=home");
    } else {
        $error = $lang["admin"]["login"]["error"];
    }
}

?>

<p class="title"><?= $lang["title"]["login"] ?></p>
<p style="color:red"><?= $error ?></p>
<form method="post" action="index.php?page=admin&act=login">
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="username" style="color:#fff;"><?= $lang["admin"]["login"]["username"] ?></label>
        <input type="text" id="username" class="nes-input is-dark is-primary" placeholder="<?= $lang["admin"]["login"]["username"] ?>" name="username">
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="password" style="color:#fff;"><?= $lang["admin"]["login"]["password"] ?></label>
        <input type="password" id="password" class="nes-input is-dark is-primary" placeholder="<?= $lang["admin"]["login"]["password"] ?>" name="password">
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <button class="nes-btn is-primary" type="submit" name="login"><?= $lang["admin"]["login"]["login"] ?></button>
    </div>
</form>
