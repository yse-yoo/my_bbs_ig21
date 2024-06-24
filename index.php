<?php
require_once 'app.php';
$thread = new Thread();
$thread->getLatests();
?>

<!DOCTYPE html>
<html lang="en">

<?php include(COMPONENTS_DIR . 'head.php') ?>

<body>
    <?php include(COMPONENTS_DIR . 'nav.php') ?>
    
    <h1>サイトのタイトル</h1>
    <div>
        <h2>最新スレッド</h2>
        <ul>
            <?php if ($thread->values) : ?>
                <?php foreach ($thread->values as $value) : ?>
                    <li><a href="thread/detail.php?id=<?= $value['id'] ?>"><?= $value['title'] ?></a></li>
                <?php endforeach ?>
            <?php endif ?>
        </ul>
    </div>
</body>

</html>