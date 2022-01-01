<?php

session_start();

require_once("core/config.inc.php");
require_once("language/".$config["general"]["lang"].".lang.php");
require_once("core/doraemon.inc.php");
require_once("core/daemon.inc.php");
require_once("core/functions.inc.php");

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
                        <a type="button" class="nes-btn is-success" style="width:100%" href="?page=admin&act=home">Admin</a>
                        <?php if(!empty($_COOKIE["loggedincookie"])) { ?>
                        <a type="button" class="nes-btn is-info" style="width:100%" href="?page=admin&act=settings">Main</a>
                        <a type="button" class="nes-btn is-info" style="width:100%" href="?page=admin&act=users">User</a>
                        <a type="button" class="nes-btn is-info" style="width:100%" href="?page=admin&act=new">New</a>
                        <a type="button" class="nes-btn is-info" style="width:100%" href="?page=admin&act=edit&pagination=1">Edit</a>
                        <a type="button" class="nes-btn is-info" style="width:100%" href="?page=admin&act=note">Note</a>
                        <a type="button" class="nes-btn is-error" style="width:100%" href="?page=admin&act=logout">Logout</a>
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
