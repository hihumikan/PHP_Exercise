<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        for ($cnt = 1; $cnt <= 10; $cnt++) {
            print $cnt;
            if ($cnt < 5) {
                print "●";
            } elseif ($cnt <= 8) {
                print "■";
            } else {
                print "▼";
            }
            print "<br>";
        }
        ?>
    </body>
</html>
