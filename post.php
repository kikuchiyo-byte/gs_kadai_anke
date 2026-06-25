
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>造語登録</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <select name="syurui" id="mode" required>
        <option value="">選択してください</option>
        <option value="shingo">新語・造語</option>
        <option value="ateji">新しい読み方・当て字</option>
    </select>
    <form class="group ateji" action="post_confirm.php" method="post">
    <input class="text" type="text" name="zogo" placeholder="あなたの作った言葉">
    <input class="text" type="text" name="yomikata" placeholder="読み方">
    <input type="submit" value="登録" class="submit">
    </form>
    <form class="group shingo" action="post_confirm.php" method="post">
    <input class="text" type="text" name="zogo" placeholder="あなたの作った言葉">
    <input class="text" type="text" name="yomikata" placeholder="読み方">
    <input class="text" type="text" name="imi" placeholder="言葉の意味">
    <input type="submit" value="登録" class="submit">
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>