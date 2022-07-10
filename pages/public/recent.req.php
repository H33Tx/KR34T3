<?php

$count = $conn->query("SELECT COUNT(*) AS total FROM releases");
$count = mysqli_fetch_assoc($count);
if($pagination=="0") {
    $dream = 'SELECT * FROM `releases` ORDER BY `timestamp` DESC';
} else {
    $dream = 'SELECT * FROM `releases` ORDER BY `timestamp` DESC LIMIT ?,?';
}
$total_pages = $conn->query('SELECT COUNT(*) FROM `releases`')->fetch_row()[0];
$page = isset($_GET['pagination']) && is_numeric($_GET['pagination']) ? $_GET['pagination'] : 1;
$num_results_on_page = 20;

if ($stmt = $conn->prepare($dream)) {
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	$result = $stmt->get_result();
	$stmt->close();
}

?>
<p class="title"><?= $lang["title"]["recent"].$pagination ?></p>
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
<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
<?php if ($page > 1): ?>
<a href="index.php?page=recent&pagination=<?php echo $page-1 ?>" class="nes-btn is-primary"><?= $lang["pagination"]["prev"] ?></a>
<?php endif; ?>

<?php if ($page > 3): ?>
<a href="index.php?page=recent&pagination=1" class="nes-btn">1</a>
...
<?php endif; ?>

<?php if ($page-2 > 0): ?><a class="nes-btn" href="index.php?page=recent&pagination=<?php echo $page-2 ?>"><?php echo $page-2 ?></a><?php endif; ?>
<?php if ($page-1 > 0): ?><a class="nes-btn" href="index.php?page=recent&pagination=<?php echo $page-1 ?>"><?php echo $page-1 ?></a><?php endif; ?>

<a class="nes-btn is-primary" href="index.php?page=recent&pagination=<?php echo $page ?>"><?php echo $page ?></a>

<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><a class="nes-btn" href="index.php?page=recent&pagination=<?php echo $page+1 ?>"><?php echo $page+1 ?></a><?php endif; ?>
<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><a class="nes-btn is-primary" href="index.php?page=recent&pagination=<?php echo $page+2 ?>"><?php echo $page+2 ?></a><?php endif; ?>

<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
...
<a class="nes-btn" href="index.php?page=recent&pagination=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
<?php endif; ?>

<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
<a class="nes-btn is-primary" href="index.php?page=recent&pagination=<?php echo $page+1 ?>"><?= $lang["pagination"]["next"] ?></a>
<?php endif; ?>
<?php if($page!=="0") { ?>
<a class="nes-btn is-warning" href="index.php?page=recent&pagination=0"><?= $lang["recent"]["view_all"] ?></a>
<?php } ?>
<?php endif; ?>
<?php } else {
    echo $lang["recent"]["no_releases"];
}
?>
</div>

<!-- idk if you need this? uncomment if you do <div class="nes-container is-dark is-rounded with-title is-centered">
    <p class="title">Entries</p>
    <?= $count["total"] ?> total.
</div>

<div class="nes-container is-dark is-rounded with-title">
    <p class="title">Welcome</p>
    welcome to our release-system!
</div>-->
