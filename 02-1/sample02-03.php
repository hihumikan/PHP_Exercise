<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>sample02-03</title>
    </head>
    <body>
    <?php
        // 例1 10回の加算ループ
        $data = 0;
    for ($count=1; $count<=10; $count++) {
        print ++$data;
        print ",";
    }
    print "<br />";

    // 例2 10回の加算ループ
    $data = 0;
    for ($count=1; $count<=10; $count++) {
        print $data++;
        print ",";
    }
    print "<br />";

    // 例：）③ 10回の減算ループ
    $data = 10;
    for ($count=1; $count<=10; $count++) {
        print $data--;
        print ",";
    }
    print "<br />";
    ?>
    </body>
</html>
