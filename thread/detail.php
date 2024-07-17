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

    <div class="max-w-4xl mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4"><?= $thread->value['title']  ?></h1>
        <p class="text-gray-500 text-sm"><?= $thread->value['createdAt']  ?></p>
        <p class="text-gray-700 mb-2"><?= $thread->value['content'] ?></p>

        <form action="post/add.php" method="post">
            <div>
                <textarea name="content" class="w-full p-2 border border-gray-300 rounded mb-2" name="content"></textarea>
            </div>
            <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">レス</button>
            <input type="hidden" name="threadId" value="<?= $thread->value['id'] ?>">
        </form>

        <div class="mt-6">
            <?php if ($post->values) : ?>
                <?php foreach ($post->values as $value) : ?>
                    <div class="border-b border-gray-300 mb-4 pb-2">
                        <div>
                            <label for="">日時</label>
                            <div><?= $value['createdAt'] ?></div>
                        </div>
                        <div><?= $value['content'] ?></div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </div>
</body>

</html>