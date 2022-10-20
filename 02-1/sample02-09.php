<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php

    srand(microtime() * 1000000);

    for ($cnt = 1; $cnt <= 5; $cnt++) {
        $data = rand(1, 6);
        print $data;
        print "<br>";
    }

    ?>
    </body>
</html>
