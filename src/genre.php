<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1516824-final';
    const USER = 'LAA1516824';
    const PASS = 'Ryousuke1211';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../src/css/genre.css">
    <title>音楽サイト</title>
</head>
<body>
    <div class="field">
    <form action = "genre_completed.php" method = "post">
        <table align="center">
        <tr><th>ジャンル名</th></tr>
            <tr><td><input type = "text" name = "genre_mei" required></td>
        </tr>
        </table>
    <input type="submit" value="登録" class="to">
    </form>
    </div>
    <button onclick="history.back()" class="mo">戻る</button>
</body>
</html>