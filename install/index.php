<?php

session_start();

if(file_exists("../installed")) {
    header("location: ../");
}

//fopen("../installed","w");

if(!isset($_GET["step"]) || empty($_GET["step"])) {
    $step = "1";
} else {
    $step = $_GET["step"];
}

if($step=="3") {
    $cf_title = $_GET["cf_title"];
    $cf_slogan = $_GET["cf_slogan"];
    $cf_url = $_GET["cf_url"];
    $cf_sub = $_GET["cf_sub"];   
    $cf_lang = $_GET["cf_lang"];
    $db_host = $_GET["db_host"];
    $db_user = $_GET["db_user"];
    $db_pass = $_GET["db_pass"];
    $db_tale = $_GET["db_tale"];
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_tale);
    $conn->set_charset("utf8mb4");
    if(!$conn->connect_error) {
        // Create all stuff etc
    }
    $file = fopen("config.inc.php", "a+");
    fwrite($file, "<?php\n\n");
    fwrite($file, "\$config[\"general\"][\"name\"] = \"$cf_title\";\n");
    fwrite($file, "\$config[\"general\"][\"slogan\"] = \"$cf_slogan\";\n");
    fwrite($file, "\$config[\"general\"][\"url\"] = \"$cf_url\";\n");
    fwrite($file, "\$config[\"general\"][\"folder\"] = \"$cf_sub\";\n");
    fwrite($file, "\$config[\"general\"][\"lang\"] = \"$cf_lang\";\n\n");
    fwrite($file, "\$config[\"db\"][\"host\"] = \"$db_host\";\n");
    fwrite($file, "\$config[\"db\"][\"user\"] = \"$db_user\";\n");
    fwrite($file, "\$config[\"db\"][\"pass\"] = \"$db_pass\";\n");
    fwrite($file, "\$config[\"db\"][\"tale\"] = \"$db_tale\";\n\n");
    fwrite($file, "/* DO NOT EDIT BELOW THIS LINE */\n\n");
    fwrite($file, "\$name = \$config[\"general\"][\"name\"];\n");
    fwrite($file, "\$slogan = \$config[\"general\"][\"slogan\"];\n");
    fwrite($file, "\$url = \$config[\"general\"][\"url\"].\$config[\"general\"][\"folder\"];\n\n");
    fwrite($file, "\$conn = new mysqli(\$config[\"db\"][\"host\"], \$config[\"db\"][\"user\"], \$config[\"db\"][\"pass\"], \$config[\"db\"][\"tale\"]);\n");
    fwrite($file, "\$conn->set_charset(\"utf8mb4\");\n\n");
    fwrite($file, "if (\$conn->connect_error) {\n");
    fwrite($file, "    // Something went wrong?\n");
    fwrite($file, "    die(\"Couldn't connect to Database: \" . \$conn->connect_error);\n");
    fwrite($file, "}\n");
    fwrite($file, "\n?>");
fclose($file);
$before = "config.inc.php";
$after = "../core/config.inc.php";
rename($before, $after);
}

if($step=="4") {
$at_user = $_GET["at_user"];
$at_pass1 = $_GET["at_pass1"];
$at_pass2 = $_GET["at_pass2"];

if($at_pass1===$at_pass2) {
$db_host = $_GET["db_host"];
$db_user = $_GET["db_user"];
$db_pass = $_GET["db_pass"];
$db_tale = $_GET["db_tale"];
$conn = new mysqli($db_host, $db_user, $db_pass, $db_tale);
$conn->set_charset("utf8mb4");
$at_pass = $at_pass1;
$conn->query("INSERT INTO user(username, password) VALUES('$at_user','$at_pass')");
} else {
echo "<script>
    history.back()

</script>";
}
}

if($step=="5") {
fopen("../installed", "w");
header("location: ../");
}

?>
<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/nes.css@2.3.0/css/nes.min.css" rel="stylesheet" />

    <title>Installation -=- KR34T3-Release-System</title>

    <link href="../assets/css/style.css" type="text/css" rel="stylesheet">
</head>

<body style="background-color:grey;color:#fff;padding-top:20px">
    <div class="container">
        <main class="main-content">

            <section class="topic nes-container is-rounded is-dark is-centered">
                <a href="#" style="text-decoration: none;">
                    <img src="banner.png" width="100%">
                </a>
            </section>

            <?php if($step=="1") { ?>

            <div class="nes-container is-dark is-rounded with-title">
                <p class="title">KR34T3 Installation</p>
                <p>Welcome to KR34T3! In the next few steps, you're gonna setup your own System :P</p>
                <a type="button" class="nes-btn is-primary" style="width:100%" href="?step=2">Let's start!</a>
            </div>

            <?php } elseif($step=="2") { ?>

            <form method="get" action="">
                <input type="text" readonly hidden value="3" name="step">
                <div class="nes-container is-dark is-rounded with-title">
                    <p class="title">Default Config</p>
                    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
                        <label for="cf_title" style="color:#fff;">title</label>
                        <input required type="text" id="cf_title" class="nes-input is-dark" placeholder="KR34T3" name="cf_title">
                    </div>
                    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
                        <label for="cf_slogan" style="color:#fff;">slogan</label>
                        <input type="text" id="cf_slogan" class="nes-input is-dark" placeholder="your own release system" name="cf_slogan">
                    </div>
                    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
                        <label for="cf_url" style="color:#fff;">domain</label>
                        <input required type="text" id="cf_url" class="nes-input is-dark" placeholder="https://kr34t3.url/" name="cf_url">
                    </div>
                    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
                        <label for="cf_sub" style="color:#fff;">subfolder</label>
                        <input type="text" id="cf_sub" class="nes-input is-dark" placeholder="kr34t3/" name="cf_sub">
                    </div>
                    <div style="background-color:#212529; padding: 1rem 1.2rem 1rem 1rem;width:calc(100% + 8px)">
                        <label for="cf_lang" style="color:#fff">language</label>
                        <div class="nes-select is-dark">
                            <select required id="cf_lang" name="cf_lang">
                                <option value="" disabled selected hidden>Select...</option>
                                <option value="en">english</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="nes-container is-dark is-rounded with-title">
                    <p class="title">MySQL Database</p>
                    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
                        <label for="db_host" style="color:#fff;">host</label>
                        <input required type="text" id="db_host" class="nes-input is-dark" placeholder="localhost" name="db_host">
                    </div>
                    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
                        <label for="db_user" style="color:#fff;">user</label>
                        <input required type="text" id="db_user" class="nes-input is-dark" placeholder="root" name="db_user">
                    </div>
                    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
                        <label for="db_pass" style="color:#fff;">password</label>
                        <input type="text" id="db_pass" class="nes-input is-dark" placeholder="root" name="db_pass">
                    </div>
                    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
                        <label for="db_tale" style="color:#fff;">table</label>
                        <input type="text" id="db_tale" class="nes-input is-dark" placeholder="kr34t3" name="db_tale">
                    </div>
                </div>
                <div class="nes-container is-dark is-rounded with-title">
                    <p class="title">Save Config</p>
                    <input type="submit" class="nes-btn is-primary" style="width:100%" value="Save Config">
                </div>
            </form>

            <?php } elseif($step=="3") { ?>

            <?php if(!$conn->connect_error) {?>

            <div class="nes-container is-dark is-rounded with-title">
                <p class="title">Success</p>
                <p>Successfully connected to Database!</p>
            </div>

            <?php if(empty($_GET["cf_title"]) || !isset($_GET["cf_title"])) { ?>
            <div class="nes-container is-dark is-error is-rounded with-title">
                <p class="title">Error</p>
                <p>if you leave "title" empty, it will result in an error! <button onclick="history.back()" type="button" class="nes-btn is-error">fix this!</button></p>
            </div>
            <?php } ?>

            <?php if(empty($_GET["cf_url"]) || !isset($_GET["cf_url"])) { ?>
            <div class="nes-container is-dark is-error is-rounded with-title">
                <p class="title">Error</p>
                <p>if you leave "domain" empty, it will result in an error! <button onclick="history.back()" type="button" class="nes-btn is-error">fix this!</button></p>
            </div>
            <?php } ?>

            <?php if(empty($_GET["cf_lang"]) || !isset($_GET["cf_lang"])) { ?>
            <div class="nes-container is-dark is-error is-rounded with-title">
                <p class="title">Error</p>
                <p>if you leave "language" empty, it will result in an error! <button onclick="history.back()" type="button" class="nes-btn is-error">fix this!</button></p>
            </div>
            <?php } ?>

            <form method="get" action="">
                <div class="nes-container is-dark is-rounded with-title">
                    <p class="title">Create Admin</p>
                    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
                        <label for="at_user" style="color:#fff;">username</label>
                        <input required type="text" name="step" value="4" hidden readonly>
                        <input required type="text" name="db_host" value="<?= $_GET["db_host"] ?>" hidden readonly>
                        <input required type="text" name="db_user" value="<?= $_GET["db_user"] ?>" hidden readonly>
                        <input required type="text" name="db_pass" value="<?= $_GET["db_pass"] ?>" hidden readonly>
                        <input required type="text" name="db_tale" value="<?= $_GET["db_tale"] ?>" hidden readonly>
                        <input required type="text" id="at_user" class="nes-input is-dark" placeholder="admin" name="at_user">
                    </div>
                    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
                        <label for="at_pass1" style="color:#fff;">password</label>
                        <input required type="password" id="at_pass1" class="nes-input is-dark" placeholder="c00l_p4ssw0rd_6969" name="at_pass1">
                    </div>
                    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
                        <label for="at_pass2" style="color:#fff;">repeat</label>
                        <input required type="password" id="at_pass2" class="nes-input is-dark" placeholder="c00l_p4ssw0rd_6969" name="at_pass2">
                    </div>
                    <input type="submit" class="nes-btn is-primary" style="width:100%" value="Create Account!">
                </div>
            </form>

            <?php } else { ?>

            <div class="nes-container is-dark is-error is-rounded with-title">
                <p class="title">Error</p>
                <p>Errror establishing a MySQL Connection: <?= $conn->connect_error ?> <button onclick="history.back()" type="button" class="nes-btn is-error">fix this!</button></p>
            </div>

            <?php } ?>

            <?php } elseif($step=="4") { ?>

            <?php if(!$conn->connect_error) { ?>

            <div class="nes-container is-dark is-rounded with-title">
                <form method="get" action="">
                    <p class="title">Success</p>
                    <p>Your System is ready to go!</p>
                    <input required type="text" name="step" value="5" hidden readonly>
                    <input type="submit" class="nes-btn is-primary" style="width:100%" value="Lock installation Panel">
                </form>
            </div>

            <?php } else { ?>

            <div class="nes-container is-dark is-error is-rounded with-title">
                <p class="title">Error</p>
                <p>Errror establishing a MySQL Connection: <?= $conn->connect_error ?> <button onclick="history.back()" type="button" class="nes-btn is-error">fix this!</button></p>
            </div>

            <?php } ?>

            <?php } ?>
        </main>
    </div>
    <div class="nes-container is-rounded is-dark is-centered">
        <span>Copyright &copy; 2021</span>
        <a href="https://github.com/H33Tx/KR34T3" target="_blank">KR34T3</a> <?php include("../version") ?> by <a href="https://h33t.moe" target="_blank" rel="noopener">@H33Tx</a>
    </div>
</body>

</html>
