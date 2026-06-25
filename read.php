<?php
$data = file_get_contents("data.txt");
echo nl2br($data);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録データ</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php echo nl2br(htmlspecialchars($data, ENT_QUOTES)); ?>
</body>
</html>