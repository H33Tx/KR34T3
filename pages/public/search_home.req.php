<?php

if(isset($_POST["search_release"])) {
    $query = mysqli_real_escape_string($conn, $_POST["search"]);
    header("location: index.php?page=search&act=search&query=$query&cat=&author=");
}

if(isset($_POST["search_category"])) {
    $cat = mysqli_real_escape_string($conn, $_POST["search"]);
    header("location: index.php?page=search&act=search&query=&cat=$cat&author=");
}

if(isset($_POST["search_author"])) {
    $author = mysqli_real_escape_string($conn, $_POST["search"]);
    header("location: index.php?page=search&act=search&query=&cat=&author=$author");
}

?>
<p class="title"><?= $lang["title"]["search_home"] ?></p>
<form method="post" action="index.php?page=search&act=home">
    <div style="background-color:#212529; padding: 1rem;" class="nes-field">
        <label for="search" style="color:#fff;"><?= $lang["search"]["for"] ?></label>
        <input type="text" id="search" name="search" class="nes-input is-dark" placeholder="<?= $lang["search"]["ph_for"] ?>">
    </div>
    <div style="background-color:#212529; padding: 1rem;" class="nes-field">
        <input type="submit" name="search_release" class="nes-btn is-primary" value="<?= $lang["search"]["for_release"] ?>">
        <input type="submit" name="search_author" class="nes-btn is-primary" value="<?= $lang["search"]["for_author"] ?>">
        <input type="submit" name="search_category" class="nes-btn is-primary" value="<?= $lang["search"]["for_category"] ?>">
    </div>
</form>
