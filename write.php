<?php
$zogo = $_POST['zogo'] ?? '';
$yomikata = $_POST['yomikata'] ?? '';
$imi = $_POST['imi'] ?? '';
$time = date("Y/m/d H:i:s");

$set = $zogo . "," . $yomikata . "," . $imi . "," . $time . PHP_EOL;
file_put_contents('data.txt', $set, FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="ja">
<head><meta charset="UTF-8"><title>登録完了</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>登録が完了しました！</h2>
<a href="post.php">入力画面に戻る</a>
</body>
</html>
