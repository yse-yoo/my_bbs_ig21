<?php
require_once '../app.php';
if (isset($_POST)) {
    $thread = new Thread();
    $thread->insert($_POST);
    header('Location: ./');
}
