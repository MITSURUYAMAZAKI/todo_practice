<?php

// ファイルの読み込み
require_once('./Models/Task.php');

// データの受け取り
$title = $_POST['title'];
$contents = $_POST['contents'];
$currentTime = date("Y/m/d H:i:s");
// var_dump($_POST);

// DBへのデータ保存
$task = new Task();
$task->create([$title, $contents, $currentTime]);

// リダイレクト
header('location:index.php');
exit;