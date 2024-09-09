<?php
require_once '../app.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include(COMPONENTS_DIR . 'head.php') ?>

<body>
    <?php include(COMPONENTS_DIR . 'nav.php') ?>

    <div class="max-w-4xl mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">新しいスレッドを作成</h1>
        <form action="thread/add.php" method="post" class="mb-6">
            <input name="title" class="w-full p-2 border border-gray-300 rounded mb-2" type="text" placeholder="タイトル" required />
            <textarea name="content" class="w-full p-2 border border-gray-300 rounded mb-2" placeholder="内容" required></textarea>
            <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600" type="submit">
                作成
            </button>
            <a href="thread/" class="inline-block bg-white py-2 px-4 rounded hover:bg-gray-100">
                もどる
            </a>
        </form>
    </div>
</body>

</html>