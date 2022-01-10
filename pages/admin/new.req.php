<?php

if(isset($_POST["add_release"])) {
    $r_name = mysqli_real_escape_string($conn, $_POST["name"]);
    $r_author = mysqli_real_escape_string($conn, $_POST["author"]);
    $r_description = mysqli_real_escape_string($conn, $_POST["description"]);
    $r_download = mysqli_real_escape_string($conn, $_POST["download"]);
    $r_category = mysqli_real_escape_string($conn, $_POST["category"]);
    $r_date = date("d.m.Y");
    
    $check = $conn->query("SELECT * FROM `releases` WHERE `name`='$name'");
    if(mysqli_num_rows($check)==1) {
        echo "a Release with that name already exists!";
    } else {
        $conn->query("INSERT INTO `releases`(`name`,`author`,`description`,`url`,`cat`,`date`) VALUES('$r_name','$r_author','$r_description','$r_download','$r_category','$r_date')");
    }
}

?>


<p class="title"><?= $lang["title"]["admin_release"] ?></p>
<form method="post" action="index.php?page=admin&act=new">
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="name" style="color:#fff;"><?= $lang["admin"]["release"]["name"] ?></label>
        <input required type="text" id="name" maxlength="100" name="name" class="nes-input is-dark" placeholder="<?= $lang["admin"]["release"]["ph_name"] ?>">
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="author" style="color:#fff;"><?= $lang["admin"]["release"]["author"] ?></label>
        <input required type="text" id="author" maxlength="20" name="author" class="nes-input is-dark" placeholder="<?= $lang["admin"]["release"]["ph_author"] ?>">
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="description"><?= $lang["admin"]["release"]["description"] ?></label>
        <textarea id="description" name="description" maxlength="20000" placeholder="<?= $lang["admin"]["release"]["ph_description"] ?>" class="nes-textarea is-dark"></textarea>
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <label for="download" style="color:#fff;"><?= $lang["admin"]["release"]["download"] ?></label>
        <input required type="text" id="download" maxlength="2000" name="download" class="nes-input is-dark" placeholder="<?= $lang["admin"]["release"]["ph_download"] ?>">
    </div>
    <div style="background-color:#212529; padding: 1rem 1.2rem 1rem 1rem;width:calc(100% + 8px)">
        <label for="category" style="color:#fff"><?= $lang["admin"]["release"]["category"] ?></label>
        <div class="nes-select is-dark" id="category">
            <select required id="dark_select" name="category">
                <option value="" disabled selected hidden><?= $lang["admin"]["release"]["ph_category"] ?></option>
                <?php
                $result = $conn->query("SELECT * FROM `categories` ORDER BY `full` ASC");
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { ?>
                <option value="<?= $row["short"] ?>"><?= $row["full"] ?></option>
                <?php
                                                         }
                } else {
                    echo "<option value='' disabled>".$lang["admin"]["release"]["no_category"]."</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
        <input type="submit" class="nes-btn is-primary" value="<?= $lang["admin"]["release"]["add"] ?>" style="width:100%" name="add_release">
    </div>
</form>
