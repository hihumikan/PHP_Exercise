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
        if ($cnt <= 5 and $cnt <= $data) {
            print "●";
        }
        if ($cnt >= 8 or $cnt <= $data) {
            print "○";
        }
        if ($cnt >= 8 xor $cnt <= 10) {
            print "▼";
        }
        if (! ($cnt >= 8 xor $cnt <= 10)) {
            print "▽";
        }
        print "<br>";
    }

    ?>
    </body>
</html>
