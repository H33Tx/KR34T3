<?php

if(empty($_GET["id"])) {
    die($lang["admin"]["edit"]["error"]);
}

$release = $_GET["id"];
$release = $conn->query("SELECT * FROM `releases` WHERE `id`='$release' LIMIT 1");
$release = mysqli_fetch_assoc($release);

if(empty($release["id"])) {
    die($lang["admin"]["edit"]["error"]);
}

if(isset($_POST["update_release"])) {
    $rID = mysqli_real_escape_string($conn, $_POST["id"]);
    $rName = mysqli_real_escape_string($conn, $_POST["name"]);
    $rAuthor = mysqli_real_escape_string($conn, $_POST["author"]);
    $rDescription = mysqli_real_escape_string($conn, $_POST["description"]);
    $rDownload = mysqli_real_escape_string($conn, $_POST["download"]);
    $rCategory = mysqli_real_escape_string($conn, $_POST["category"]);
    $conn->query("UPDATE `releases` SET `name`='$rName', `author`='$rAuthor', `description`='$rDescription', `url`='$rDownload', `cat`='$rCategory' WHERE `id`='$rID'");
    header("location: index.php?page=admin&act=release&id=$rID");
}

if(isset($_POST["confirm_delete"])) {
    $rID = mysqli_real_escape_string($conn, $_POST["id"]);
    $conn->query("DELETE FROM `releases` WHERE `id`='$rID' LIMIT 1");
    header("location: index.php");
}

?>

<p class="title"><?= $lang["title"]["admin_edit"] ?></p>
<form method="post" action="index.php?page=admin&act=release&id=<?= $release["id"] ?>">
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="name" style="color:#fff;"><?= $lang["admin"]["release"]["name"] ?></label>
        <input required type="text" id="name" name="name" class="nes-input is-dark" placeholder="<?= $lang["admin"]["release"]["ph_name"] ?>" value="<?= $release["name"] ?>">
        <input required hidden type="text" name="id" value="<?= $release["id"] ?>">
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="author" style="color:#fff;"><?= $lang["admin"]["release"]["author"] ?></label>
        <input required type="text" id="author" name="author" class="nes-input is-dark" placeholder="<?= $lang["admin"]["release"]["ph_author"] ?>" value="<?= $release["author"] ?>">
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="description" style="color:#fff;"><?= $lang["admin"]["release"]["description"] ?></label>
        <textarea type="text" id="description" name="description" class="nes-input is-dark" placeholder="<?= $lang["admin"]["release"]["ph_description"] ?>" style="min-height: min-content;"><?= $release["description"] ?></textarea>
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="download" style="color:#fff;"><?= $lang["admin"]["release"]["download"] ?></label>
        <input required type="text" id="download" name="download" class="nes-input is-dark" placeholder="<?= $lang["admin"]["release"]["ph_download"] ?>" value="<?= $release["url"] ?>">
    </div>
    <div style="background-color:#212529; padding: 1rem 1.2rem 1rem 1rem;width:calc(100% + 8px)">
        <label for="category" style="color:#fff"><?= $lang["admin"]["release"]["category"] ?></label>
        <div class="nes-select is-dark" id="category">
            <select required id="category" name="category">
                <option value="" disabled selected hidden><?= $lang["admin"]["release"]["ph_category"] ?></option>
                <?php
                $result = $conn->query("SELECT * FROM `categories` ORDER BY `full` ASC");
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { ?>
                <option <?php if($release["cat"]==$row["short"]) { echo "selected"; } ?> value="<?= $row["short"] ?>"><?= $row["full"] ?></option>
                <?php
                                                         }
                } else {
                    echo "<option value='' disabled>".$lang["admin"]["release"]["no_category"]."</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div style="background-color:#212529; padding: 1rem 1.2rem 1rem 1rem;width:calc(100% + 8px)">
        <input name="update_release" type="submit" class="nes-btn is-primary" style="width:49%" value="<?= $lang["admin"]["release"]["edit"] ?>"><button type="button" class="nes-btn is-error" style="width:49%" onclick="document.getElementById('dialog-dark-rounded').showModal();"><?= $lang["admin"]["release"]["delete"] ?></button>
        <dialog class="nes-dialog is-dark is-rounded" id="dialog-dark-rounded">
            <form method="dialog">
                <p class="title"><?= $lang["admin"]["cats"]["delete_sure"] ?></p>
                <p><?= $lang["admin"]["cats"]["delete_undone"] ?></p>
                <menu class="dialog-menu">
                    <button class="nes-btn"><?= $lang["admin"]["cats"]["delete_cancel"] ?></button>
                    <input name="confirm_delete" type="submit" class="nes-btn is-primary" value="<?= $lang["admin"]["cats"]["delete_confirm"] ?>">
                </menu>
            </form>
        </dialog>
    </div>
</form>
