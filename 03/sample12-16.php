<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-16</title>
</head>
<body>
<h3>HTMLの特殊文字を実体参照に置換</h3>    
<?php
    if (isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        // 受け取ったデータをそのまま表示
        print "【そのまま表示】<br />";
        print $_POST['inputdata'] . "<br /><br />\n\n";

        // HTMLの特殊文字を置換
        print "【HTMLの特殊文字を置換】<br />";
        print htmlspecialchars($_POST['inputdata']) . "<br /><br />\n\n";
    }
?>
    <hr>
    テキストボックスに値を入力して[送信]ボタンをクリックしてください。<br />
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        <input size="90" type="text" name="inputdata">
        <input type="submit" name="btnExec" value="送信">
    </form>       
</body>
</html>