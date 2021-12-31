<?php

require_once("core/config.inc.php");
require_once("language/".$config["general"]["lang"].".lang.php");
require_once("core/doraemon.inc.php");

?>

<!doctype html>
<html lang="<?= $config["general"]["lang"] ?>">

<head>
    <?php include("parts/head.part.php"); ?>
</head>

<body style="background-color:grey;color:#fff;padding-top:20px">
    <div class="container">
        <main class="main-content">

            <section class="topic nes-container is-rounded is-dark is-centered">
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
                        <p class="title">Menu</p>
                        <a type="button" class="nes-btn is-primary" style="width:100%" href="?page=recent&pagination=1">Recent</a>
                        <a type="button" class="nes-btn is-primary" style="width:100%" href="?page=search&act=home">Search</a>
                        <a type="button" class="nes-btn is-primary" style="width:100%" href="?page=about">About</a>
                        <a type="button" class="nes-btn is-primary" style="width:100%" href="?page=admin&act=home">Admin</a>
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
