<?php
require_once '../app.php';

if (isset($_POST)) {
    $post = new Post();
    $post->insert($_POST);
    header("Location: ../thread/detail.php?id={$_POST['thread_id']}");
}
