<?php
    $data1 = 10;
    $data2 = "PHP: Hypertext Preprocessor";

    // データをクッキーに保存
    if (setcookie("mycookiedata", "ck_data1=$data1&ck_data2=$data2", time() + (3600 * 24 * 7))) {
        ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample13-01</title>
</head>
<body>
<h3>クッキーにデータを保存</h3>
<?php
                print "データをクッキーに保存しました。";
    } else {
        print "クッキーの保存に失敗しました。";
    }
    ?>
</body>
</html>
