<?php

if(!empty($_GET["query"])) {
    $query = $_GET["query"];
    $sql = "SELECT * FROM `releases` WHERE `name` LIKE '%".$query."%' ORDER BY `timestamp` DESC";
}

if(!empty($_GET["cat"])) {
    $query = $_GET["cat"];
    $sql = "SELECT * FROM `releases` WHERE `cat` LIKE '%".$query."%' ORDER BY `timestamp` DESC";
}

if(!empty($_GET["author"])) {
    $query = $_GET["author"];
    $sql = "SELECT * FROM `releases` WHERE `author` LIKE '%".$query."%' ORDER BY `timestamp` DESC";
}

$result = $conn->query($sql);

?>

<p class="title"><?= $lang["title"]["search_act"] ?></p>
<?php
if ($result->num_rows > 0) { ?>
<div class="nes-table-responsive" style="width:100%">
    <table class="nes-table is-centered is-dark" style="width:100%">
        <thead>
            <tr>
                <th style="width:15%"><?= $lang["recent"]["cat"] ?></th>
                <th style="width:40%"><?= $lang["recent"]["name"] ?></th>
                <th style="width:25%"><?= $lang["recent"]["by"] ?></th>
                <th style="width:21%"><?= $lang["recent"]["date"] ?></th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><a href="index.php?page=search&act=search&query=&cat=<?= $row["cat"] ?>&author="><?= $row["cat"] ?></a></td>
                <td><a href="index.php?page=release&id=<?= $row["id"] ?>"><?= $row["name"] ?></a></td>
                <td><a href="index.php?page=search&act=search&query=&cat=&author=<?= $row["author"] ?>"><?= $row["author"] ?></a></td>
                <td><?= $row["date"] ?></td>
            </tr>
            <?php
                                         } ?>
        </tbody>
    </table>
</div>
<?php } else { ?>
<p><?= $lang["search"]["nothing"] ?></p>
<?php } ?>
<div class="nes-container is-dark is-centered">
    <button onclick="history.back()" type="button" class="nes-btn is-primary" style="width:100%"><?= $lang["search"]["again"] ?></button>
</div>
