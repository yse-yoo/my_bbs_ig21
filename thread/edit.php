<?php
require_once '../app.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include(COMPONENTS_DIR . 'head.php') ?>

<body>
    <?php include(COMPONENTS_DIR . 'nav.php') ?>

    <h1>スレッド管理</h1>
    <div>
        <form action="thread/add.php" method="post">
            <div>
                <label for="">スレッドタイトル</label>
                <p>サッカーについて語れ！</p>
            </div>
            <div>
                <label for="">説明</label>
                <p>スレッドの内容。。。</p>
            </div>
            <div>
                <label for="">パスワード</label>
                <input type="password" name="password">
            </div>
            <button>削除</button>
        </form>
    </div>
</body>

</html>