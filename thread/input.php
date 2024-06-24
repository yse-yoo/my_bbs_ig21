<?php
require_once '../app.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include(COMPONENTS_DIR . 'head.php') ?>

<body>
    <?php include(COMPONENTS_DIR . 'nav.php') ?>

    <h1>スレッド作成ページ</h1>
    <div>
        <form action="thread/add.php" method="post">
            <div>
                <label for="">タイトル</label>
                <input type="text" name="title">
            </div>
            <div>
                <label for="">説明</label>
                <textarea name="description"></textarea>
            </div>
            <div>
                <label for="">パスワード</label>
                <input type="password" name="password">
            </div>
            <button>作成</button>
        </form>
    </div>
</body>

</html>