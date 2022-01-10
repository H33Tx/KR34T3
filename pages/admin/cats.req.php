<?php

$count = $conn->query("SELECT COUNT(*) AS total FROM categories");
$count = mysqli_fetch_assoc($count);
$catsql = $conn->query("SELECT * FROM categories");

if(isset($_POST["add_cat"])) {
    $cat_short = mysqli_real_escape_string($conn, $_POST["cat_short"]);
    $cat_full = mysqli_real_escape_string($conn, $_POST["cat_full"]);

    $cat_check = $conn->query("SELECT * FROM `categories` WHERE `full`='$cat_full' OR `short`='$cat_short'");
    if(mysqli_num_rows($cat_check)==1) {
        echo "You can't add more than one Category with the same Name or short!";
    } else {
        $conn->query("INSERT INTO `categories`(`short`,`full`) VALUES('$cat_short','$cat_full')");
    }

    header("location: index.php?page=admin&act=cats#showCatForm");
}

if(isset($_POST["delete_cat_cancel"])) {
    header("location: index.php?page=admin&act=cats#cat-overview");
}

if(isset($_POST["update_cat"])) {
    $cat_id = mysqli_real_escape_string($conn, $_POST["cat_id"]);
    $cat_full = mysqli_real_escape_string($conn, $_POST["cat_full"]);
    $cat_short = mysqli_real_escape_string($conn, $_POST["cat_short"]);
    
    $conn->query("UPDATE `categories` SET `short`='$cat_short', `full`='$cat_full' WHERE `id`='$cat_id'");
    
    header("location: index.php?page=admin&act=cats#cat-overview");
}

if(isset($_POST["delete_cat"])) {
    $cat_id = mysqli_real_escape_string($conn, $_POST["cat_id"]);
    $cat_full = mysqli_real_escape_string($conn, $_POST["cat_full"]);
    $cat_short = mysqli_real_escape_string($conn, $_POST["cat_short"]);
    
    $conn->query("DELETE FROM `categories` WHERE `id`='$cat_id' AND `short`='$cat_short' AND `full`='$cat_full'");
    
    header("location: index.php?page=admin&act=cats#cat-overview");
}

?>
<p id="cat-overview" class="title"><?= $lang["title"]["admin_cats"] ?></p>

<?php
$result = $conn->query("SELECT * FROM `categories` ORDER BY `id` ASC");
if ($result->num_rows > 0) { ?>
<div class="nes-table-responsive" style="width:100%">
    <table class="nes-table is-centered is-dark" style="width:100%">
        <thead>
            <tr>
                <th style="width:10%"><?= $lang["admin"]["cats"]["id"] ?></th>
                <th style="width:40%"><?= $lang["admin"]["cats"]["name"] ?></th>
                <th style="width:20%"><?= $lang["admin"]["cats"]["short"] ?></th>
                <th style="width:30%"><?= $lang["admin"]["cats"]["action"] ?></th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
            <form method="post" action="index.php?page=admin&act=cats">
                <tr>
                    <td>
                        <div class="nes-field">
                            <input required type="text" name="cat_id" value="<?= $row["id"] ?>" readonly class="nes-input" title="<?= $lang["admin"]["cats"]["cannot_id"] ?>">
                        </div>
                    </td>
                    <td>
                        <div class="nes-field">
                            <input required type="text" name="cat_full" value="<?= $row["full"] ?>" class="nes-input" title="<?= $lang["admin"]["cats"]["ph_name"] ?>" maxlength="20">
                        </div>
                    </td>
                    <td>
                        <div class="nes-field">
                            <input required type="text" name="cat_short" value="<?= $row["short"] ?>" class="nes-input" title="<?= $lang["admin"]["cats"]["ph_short"] ?>" maxlength="5">
                        </div>
                    </td>
                    <td><input type="submit" name="update_cat" class="nes-btn is-primary" value="<?= $lang["admin"]["cats"]["action_update"] ?>">
                        <button type="button" class="nes-btn is-error" onclick="document.getElementById('del-dialog-<?= $row["id"] ?>').showModal();">
                            <?= $lang["admin"]["cats"]["action_delete"] ?>
                        </button>
                        <dialog class="nes-dialog is-dark is-rounded" id="del-dialog-<?= $row["id"] ?>">
                            <form method="post" action="index.php?page=admin&act=cats">
                                <p class="title"><?= $lang["admin"]["cats"]["delete_sure"] ?></p>
                                <p><?= $lang["admin"]["cats"]["delete_undone"] ?></p>
                                <menu class="dialog-menu">
                                    <input type="submit" class="nes-btn" name="delete_cat_cancel" value="<?= $lang["admin"]["cats"]["delete_cancel"] ?>">
                                    <input type="submit" class="nes-btn is-primary" name="delete_cat" value="<?= $lang["admin"]["cats"]["delete_confirm"] ?>">
                                </menu>
                            </form>
                        </dialog>
                    </td>
                </tr>
            </form>
            <?php
                                         } ?>
        </tbody>
    </table>
</div>
<?php } else {
    echo $lang["admin"]["cats"]["none"];
}
?>

</div>

<div class="nes-container is-dark with-title is-rounded is-centered">
    <?= $count["total"].$lang["admin"]["cats"]["total"] ?>
</div>
<div class="nes-container is-dark with-title is-rounded">
    <p class="title"><?= $lang["admin"]["cats"]["form_add"] ?></p>
    <span id="showCatForm"><a href="#hideCatForm" onclick="showCatForm()"><?= $lang["admin"]["cats"]["form_show"] ?></a></span>
    <span id="showCatForm2" style="display:none"><a href="#showCatForm" onclick="hideCatForm()"><?= $lang["admin"]["cats"]["form_hide"] ?></a></span>
    <form id="hideCatForm" method="post" action="index.php?page=admin&act=cats" style="display:none">
        <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
            <label for="cat_full" style="color:#fff;"><?= $lang["admin"]["cats"]["form_cat_name"] ?></label>
            <input required maxlength="20" type="text" id="cat_full" class="nes-input is-dark" placeholder="cracks - games" name="cat_full">
        </div>
        <div style="background-color:#212529; padding: 1rem;" class="nes-field is-inline">
            <label for="cat_short" style="color:#fff;"><?= $lang["admin"]["cats"]["form_cat_short"]?></label>
            <input required maxlength="5" type="text" id="cat_short" class="nes-input is-dark" placeholder="cr-gm" name="cat_short">
        </div>
        <input type="submit" class="nes-btn is-primary" style="width:100%" value="<?= $lang["admin"]["cats"]["form_add_cat"] ?>" name="add_cat">
    </form>
</div>

<script>
    function showCatForm() {
        document.getElementById("showCatForm").style.display = "none";
        document.getElementById("hideCatForm").style.display = "block";
        document.getElementById("showCatForm2").style.display = "block";
    }

    function hideCatForm() {
        document.getElementById("showCatForm").style.display = "block";
        document.getElementById("hideCatForm").style.display = "none";
        document.getElementById("showCatForm2").style.display = "none";
    }

</script>
