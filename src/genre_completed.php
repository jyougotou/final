<?php session_start(); ?>
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
    <link rel="stylesheet" href="../src/css/genre_completed.css">
    <title>音楽サイト</title>
</head>
<body>
    <?php
    //insertで追加
            $pdo = new PDO($connect, USER, PASS);
            $musicSql = $pdo->prepare('insert into Genre(genre_mei) values (?)');
            $musicSql->execute([$_POST['genre_mei']]);

            echo '<h1>登録が完了しました！</h1>';
    ?>
    <form action="registration.php" method="post">
        <input type="submit" value="楽曲登録へ" class="to">
    </form>
    <form action="list.php" method="post">
        <input type="submit" value="楽曲一覧へ" class="i">
    </form>
</body>
</html>