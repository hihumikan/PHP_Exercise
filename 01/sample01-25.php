<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php

    $data = 3;

    for ($cnt = 1; $cnt <= 10; $cnt++) {
        print $cnt;
        if ($cnt <= 5) {
            print "●";
        } else {
            exit("変数値が5を超えました！");
        }
        print "<br>";
    }
    print "ループ終了！";
    ?>
    </body>
</html>
