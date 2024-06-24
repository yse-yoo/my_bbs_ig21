<?php
require_once '../app.php';

if (isset($_GET['id'])) {
    $thread = new Thread();
    $thread->findById($_GET['id']);

    $post = new Post();
    $post->getByThread($thread->value);
} else {
    header('Location: ./');
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include(COMPONENTS_DIR . 'head.php') ?>

<body>
    <?php include(COMPONENTS_DIR . 'nav.php') ?>

    <div>
        <h1><?= $thread->value['title']  ?></h1>
        <p>
            <?= $thread->value['description'] ?>
        </p>
    </div>

    <div>
        <form action="post/add.php" method="post">
            <div>
                <label for="">投稿者</label>
                <input type="text" name="posted_name">
            </div>
            <div>
                <label for="">投稿内容</label>
                <textarea name="comment"></textarea>
            </div>
            <button>投稿</button>
            <input type="hidden" name="thread_id" value="<?= $thread->value['id'] ?>">
        </form>
    </div>

    <div>
        <?php if ($post->values) : ?>
            <?php foreach ($post->values as $value) : ?>
                <div>
                    <div>
                        <label>投稿者</label>
                        <div>
                            <?= $value['posted_name'] ? $value['posted_name'] : 'ななし' ?>
                        </div>
                    </div>
                    <div>
                        <label for="">日時</label>
                        <div><?= $value['created_at'] ?></div>
                    </div>
                    <div><?= $value['comment'] ?></div>
                </div>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</body>

</html>