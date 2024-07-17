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

    <div class="max-w-4xl mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4 text-center">スレッド一覧</h1>
        <div class="mb-6">
            <a href="./thread/input.php" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">
                新しいスレッドを作成
            </a>
        </div>

        <div>
            <?php if ($thread->values) : ?>
                <?php foreach ($thread->values as $value) : ?>
                    <div class="border-b border-gray-300 mb-4 pb-2">
                        <span class="text-gray-500 text-sm me-3"><?= $value['createdAt'] ?></span>
                        <a class="text-blue-500 hover:underline" href="thread/detail.php?id=<?= $value['id'] ?>"><?= $value['title'] ?></a>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>

    </div>

</body>

</html>