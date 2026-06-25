<?php
 echo 'hello world';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <p>HTMLで
    <?php
    echo "こんにちは";
    ?></p>
    <p>
    <?php
    $hajime = "言葉";
    $owari = "読み方";
    echo $hajime . "は" . $owari; 
    ?>と読みます</p>

    <?php
    $today = date("Y,m,d H:i:s");
    echo $today . "<br>";
    $random = rand(0,5);
    echo $random . "<br>";
    if($random == 0){
        echo "大吉";
    }else if ($random == 1){
        echo "中吉";
    }else if($random == 2){
        echo "吉";
    }else if($random == 3){
        echo "小吉";
    }else if($random == 4){
        echo "末吉";
    }else {
        echo "凶";
    }

    //もしくはswich文
    
    switch($random){
        case 0: echo "<br>すごくいいことあるかも"; break;
        case 1: echo "<br>まあまあいいことあるかも"; break;
        case 2: echo "<br>いいことあるかも"; break;
        case 3: echo "<br>ちょっといいことあるかも"; break;
        case 4: echo "<br>まあまあかも"; break;
        default: echo "<br>今日は忘れものに注意！";
    }

    ?>
<?php
    $seiza = ["牡羊座","牡牛座","双子座","蟹座","獅子座","乙女座","天秤座","蠍座","射手座","山羊座","水瓶座","魚座"];
    var_dump($seiza[0]);
    echo $seiza[0];


?>

</body>
</html>

