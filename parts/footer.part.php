<!--<footer>
    <p>
        <span>Copyright &copy; 2021</span>
        <a href="<?= $url ?>" rel="noopener"><?= $name ?></a>
        <span>-</span>
        <a href="https://github.com/H33Tx/kr34t3" target="_blank" rel="noopener">@H33Tx</a> <?php include("version") ?>
    </p>
</footer>-->
<div class="nes-container is-rounded is-dark is-centered">
    <span>Copyright &copy; <?= date("Y") ?></span>
    <a href="<?= $url ?>" rel="noopener"><?= $name ?></a>
    <span>-</span>
    Powered by <a href="https://wiki.henai.eu/index.php/Software/KR34T3" target="_blank">KR34T3</a> <?php include("version.txt") ?>
</div>

<script>
    function proveHuman() {
        document.getElementById("javascriptChallange").style.display = "none";
        console.log("You have Javascript enabled, everything's fine desu desu~. Also, before I forget to mention that, you better not try messing with the console! Could lead to... you know, Data loss or hacking?");
    }

</script>
