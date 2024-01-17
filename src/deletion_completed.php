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
        <link rel="stylesheet" href="../src/css/deletion_completed.css">
		<title>音楽サイト</title>
	</head>
	<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $musicNumber = $_GET['id'];
    $sql=$pdo->prepare('delete from Music where music_id=?');
    $sql->execute([$musicNumber]);

    echo '<h1>削除が完了しました！</h1>'; 
?>
<button onclick="location.href='list.php'" class="de">楽曲一覧へ</button>
</html>
