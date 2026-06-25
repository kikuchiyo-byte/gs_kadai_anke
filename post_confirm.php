<?php var_dump($_POST);?>
<?php
$zogo = $_POST['zogo'];
$yomikata = $_POST['yomikata'];
$imi = $_POST['imi'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登録確認</title>
</head>
<body>
    <form action="write.php" method="post">
    <p>あなたの作った新語・造語：<?= htmlspecialchars($zogo, ENT_QUOTES) ?></p>
    <p>読み方：<?= htmlspecialchars($yomikata, ENT_QUOTES) ?></p>
    <?php if($imi !== ''):?>
    <p>意味：<?= htmlspecialchars($imi, ENT_QUOTES) ?></p>
    <?php endif; ?>
    <input type="hidden" name="zogo" value="<?= htmlspecialchars($zogo, ENT_QUOTES) ?>">
    <input type="hidden" name="yomikata" value="<?= htmlspecialchars($yomikata, ENT_QUOTES) ?>">
    <input type="hidden" name="imi" value="<?= htmlspecialchars($imi, ENT_QUOTES) ?>">
    <button type="submit">この内容で登録する</button>
</form>

<button onclick="history.back()">戻る</button>
</body>
</html>
