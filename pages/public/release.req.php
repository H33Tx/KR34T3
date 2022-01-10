<?php

if(empty($_GET["id"])) {
    die($lang["release"]["error"]);
}

$release = $_GET["id"];
$release = $conn->query("SELECT * FROM `releases` WHERE `id`='$release' LIMIT 1");
$release = mysqli_fetch_assoc($release);
$cat = $release["cat"];
$cat = $conn->query("SELECT * FROM `categories` WHERE `short`='$cat' LIMIT 1");
$cat = mysqli_fetch_assoc($cat);

if(empty($release["id"])) {
    die($lang["admin"]["edit"]["release"]);
}

?>

<p class="title"><?= $release["name"] ?></p>

<p>
    <?= $lang["release"]["released"] ?><b><?= $release["date"] ?></b><br>
    <?= $lang["release"]["by"] ?><b><?= $release["author"] ?></b> (<a href="index.php?page=search&act=search&query=&cat=&author=<?= $release["author"] ?>"><?= $lang["release"]["search_author"] ?></a>)<br>
    <?= $lang["release"]["cat"] ?><b><?= $cat["full"] ?></b> (<a href="index.php?page=search&act=search&query=&cat=<?= $cat["short"] ?>&author="><?= $lang["release"]["search_cat"]?></a>)<br>
    <?= $lang["release"]["description"] ?>
</p>

<p>
    <?= $release["description"] ?>
</p>

<button class="nes-btn is-success" style="width:100%" onclick="window.location.href='<?= $release["url"] ?>'"><?= $lang["release"]["download"] ?></button>
<?php if(isset($_COOKIE["kr34t3_loggedin"]) && !empty($_COOKIE["kr34t3_loggedin"])) { ?>
<a class="nes-btn is-primary" style="width:100%" href="index.php?page=admin&act=release&id=<?= $release["id"] ?>"><?= $lang["release"]["edit"] ?></a>
<?php } ?>
