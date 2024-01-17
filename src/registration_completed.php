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
    <link rel="stylesheet" href="../src/css/registration_completed.css">
    <title>音楽サイト</title>
</head>
<body>
    <?php
    //insertで追加
       if(!preg_match('/^[0-9]+$/',$_POST['music_genre'])){
            echo 'ジャンル名を選択してください。';
        } else {
            $pdo = new PDO($connect, USER, PASS);
            $musicSql = $pdo->prepare('insert into Music(music_mei,music_art,genre_id) values (?,?,?)');
            $musicSql->execute([$_POST['music_mei'], $_POST['music_art'], $_POST['music_genre']]);

            echo '<h1>登録が完了しました！</h1>';
        }
    ?>
    <form action="registration.php" method="post">
        <input type="submit" value="楽曲登録へ" class="to">
    </form>
    <form action="list.php" method="post">
        <input type="submit" value="楽曲一覧へ" class="i">
    </form>
</body>
</html>
