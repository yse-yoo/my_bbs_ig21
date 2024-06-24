<?php
require_once '../app.php';

$thread = new Thread();
$threads = $thread->get();
?>

<!DOCTYPE html>
<html lang="en">

<?php include(COMPONENTS_DIR . 'head.php') ?>

<body>
    <?php include(COMPONENTS_DIR . 'nav.php') ?>
    <div>
        <a href="thread/input.php">スレッド作成</a>
    </div>
    <h1>スレッド一覧</h1>
    <div>
        <ul>
            <?php if ($threads) : ?>
                <?php foreach ($threads as $thread) : ?>
                    <li><a href="thread/detail.php?id=<?= $thread['id'] ?>"><?= $thread['title'] ?></a></li>
                <?php endforeach ?>
            <?php endif ?>
        </ul>
    </div>
</body>

</html>