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
        $imagefile = rand(1, 9);

        $imagefile = "image" . $imagefile . ".gif";

        print "<img src='images/$imagefile' hspace='2'>";
    }


    ?>
    </body>
</html>
