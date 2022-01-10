<?php

session_start();

if(file_exists("installed")) {
    require_once("core/config.inc.php");
    require_once("language/".$config["general"]["lang"].".lang.php");
}
require_once("core/doraemon.inc.php");

?>

<!doctype html>
<html lang="<?= $config["general"]["lang"] ?>">

<head>
    <?php include("parts/head.part.php"); ?>
</head>

<body style="background-color:black;color:#fff;padding-top:20px" onload="proveHuman()">
    <div class="nes-container with-title is-centered is-rounded is-dark" id="javascriptChallange"><?= $lang["notice"] ?></div>
    <div class="container">
        <main class="main-content">
            <section id="header-img" class="topic nes-container is-rounded is-dark is-centered">
                <a href="<?= $url ?>" style="text-decoration: none;">
                    <?php if(file_exists("custom/art.txt")) {
    include("custom/art.txt"); // https://patorjk.com/software/taag/
} else { ?>
                    <i class="nes-jp-logo"></i>
                    <p><?= $name ?> - <?= $slogan ?></p>
                    <?php } ?>
                </a>
            </section>

            <div class="grid">
                <div class="item-2">
                    <section class="topic nes-container with-title is-centered is-rounded is-dark">
                        <p class="title"><?= $lang["nav"]["menu"] ?></p>
                        <a type="button" class="nes-btn is-primary" style="width:100%" href="?page=recent&pagination=1"><?= $lang["nav"]["recent"] ?></a>
                        <a type="button" class="nes-btn is-primary" style="width:100%" href="?page=search&act=home"><?= $lang["nav"]["search"] ?></a>
                        <a type="button" class="nes-btn is-primary" style="width:100%" href="?page=about"><?= $lang["nav"]["about"] ?></a>
                        <a type="button" class="nes-btn is-success" style="width:100%" href="?page=admin&act=home"><?= $lang["nav"]["admin"] ?></a>
                        <?php if($admin==true) { ?>
                        <a type="button" class="nes-btn is-info" style="width:100%" href="?page=admin&act=settings"><?= $lang["nav"]["main"] ?></a>
                        <a type="button" class="nes-btn is-info" style="width:100%" href="?page=admin&act=users"><?= $lang["nav"]["user"] ?></a>
                        <a type="button" class="nes-btn is-info" style="width:100%" href="?page=admin&act=new"><?= $lang["nav"]["new"] ?></a>
                        <a type="button" class="nes-btn is-info" style="width:100%" href="?page=admin&act=cats"><?= $lang["nav"]["cats"] ?></a>
                        <a type="button" class="nes-btn is-info" style="width:100%" href="?page=admin&act=note"><?= $lang["nav"]["note"] ?></a>
                        <a type="button" class="nes-btn is-error" style="width:100%" href="?page=admin&act=logout"><?= $lang["nav"]["logout"] ?></a>
                        <?php } ?>
                    </section>
                </div>
                <div class="item-2">
                    <section class="topic nes-container with-title is-rounded is-dark">
                        <?php include("pages/$page.req.php"); ?>
                    </section>
                </div>
            </div>

        </main>
    </div>
    <?php include("parts/footer.part.php"); ?>
</body>

</html>
