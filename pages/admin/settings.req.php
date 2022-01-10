<?php

if(isset($_POST["save_config"])) {
    $s_name = mysqli_real_escape_string($conn, $_POST["name"]);
    $s_slogan = mysqli_real_escape_string($conn, $_POST["slogan"]);
    $s_domain = mysqli_real_escape_string($conn, $_POST["domain"]);
    $s_folder = mysqli_real_escape_string($conn, $_POST["folder"]);
    $s_lang = mysqli_real_escape_string($conn, $_POST["lang"]);
    $db_host = mysqli_real_escape_string($conn, $_POST["db_host"]);
    $db_user = mysqli_real_escape_string($conn, $_POST["db_user"]);
    $db_pass = mysqli_real_escape_string($conn, $_POST["db_pass"]);
    $db_tale = mysqli_real_escape_string($conn, $_POST["db_tale"]);
    
    $file = fopen("config.inc.php", "a+");
    fwrite($file, "<?php\n\n");
    fwrite($file, "\$config[\"general\"][\"name\"] = \"$s_name\";\n");
    fwrite($file, "\$config[\"general\"][\"slogan\"] = \"$s_slogan\";\n");
    fwrite($file, "\$config[\"general\"][\"url\"] = \"$s_domain\";\n");
    fwrite($file, "\$config[\"general\"][\"folder\"] = \"$s_folder\";\n");
    fwrite($file, "\$config[\"general\"][\"murdoch_murdoch\"] = \"0\";\n");
    fwrite($file, "\$config[\"general\"][\"lang\"] = \"$s_lang\";\n\n");
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
$after = "core/config.inc.php";
unlink($after);
rename($before, $after);
chmod($after, 0777);
echo "<p id='config-overview' class='title'>Settings</p><i class='nes-squirtle'></i> <br>
<p class='title'>huh</p>".$lang["admin"]["settings"]["refreshing"];
header("refresh: 2");
}

?>

<p id="config-overview" class="title"><?= $lang["title"]["admin_settings"] ?></p>
<form method="post" action="index.php?page=admin&act=settings#config-overview">
    <input hidden readonly name="db_host" value="<?= $config["db"]["host"] ?>">
    <input hidden readonly name="db_user" value="<?= $config["db"]["user"] ?>">
    <input hidden readonly name="db_pass" value="<?= $config["db"]["pass"] ?>">
    <input hidden readonly name="db_tale" value="<?= $config["db"]["tale"] ?>">
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="name" style="color:#fff;"><?= $lang["admin"]["settings"]["name"] ?></label>
        <input required type="text" id="name" class="nes-input is-dark" placeholder="<?= $lang["admin"]["settings"]["ph_name"] ?>" name="name" value="<?= $config["general"]["name"] ?>">
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="slogan" style="color:#fff;"><?= $lang["admin"]["settings"]["slogan"] ?></label>
        <input type="text" id="slogan" class="nes-input is-dark" placeholder="<?= $lang["admin"]["settings"]["ph_slogan"] ?>" name="slogan" value="<?= $config["general"]["slogan"] ?>">
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="domain" style="color:#fff;"><?= $lang["admin"]["settings"]["domain"] ?></label>
        <input required type="text" id="domain" class="nes-input is-dark" placeholder="<?= $lang["admin"]["settings"]["ph_domain"] ?>" name="domain" value="<?= $config["general"]["url"] ?>">
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="folder" style="color:#fff;"><?= $lang["admin"]["settings"]["folder"] ?></label>
        <input type="text" id="folder" class="nes-input is-dark" placeholder="<?= $lang["admin"]["settings"]["ph_folder"] ?>" name="folder" value="<?= $config["general"]["folder"] ?>">
    </div>
    <div style="background-color:#212529; padding: 1rem 1.2rem 1rem 1rem;width:calc(100% + 8px)">
        <label for="lang" style="color:#fff"><?= $lang["admin"]["settings"]["language"] ?></label>
        <div class="nes-select is-dark">
            <select required id="lang" name="lang">
                <option value="" disabled selected hidden>Select...</option>
                <option <?php if($config["general"]["lang"]=="de-informal") { echo "selected"; } ?> value="de-informal">Deutsch (Du-Form, Informal)</option>
                <option <?php if($config["general"]["lang"]=="de-formal") { echo "selected"; } ?> value="de-formal">Deutsch (Sie-Form, Formal)</option>
                <option <?php if($config["general"]["lang"]=="en-us") { echo "selected"; } ?> value="en-us">English (US)</option>
            </select>
        </div>
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <input type="submit" name="save_config" value="<?= $lang["admin"]["settings"]["save"] ?>" style="width:100%" class="nes-btn is-primary">
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <p><i><?= $lang["admin"]["settings"]["notice"] ?></i></p>
    </div>
</form>
