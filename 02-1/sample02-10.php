<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php

    srand(microtime() * 1000000);

    for ($passcnt = 1; $passcnt <= 10; $passcnt++) {
        $password = "";
        for ($cnt = 1; $cnt <= 5; $cnt++) {
            $password = $password . rand(1, 9);
        }
        for ($cnt = 1; $cnt <= 5; $cnt++) {
            $password = $password . chr(rand(65, 90));
        }
        print $password;
        print "<br>";
    }

    ?>
    </body>
</html>
