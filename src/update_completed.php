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
        <link rel="stylesheet" href="../src/css/update_completed.css">
		<title>音楽サイト</title>
	</head>
	<body>
<?php
    if(!preg_match('/^[0-9]+$/',$_POST['music_genre'])){
        echo 'ジャンル名を選択してください。';
    }else{
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('update Music set music_mei=?,music_art=?,genre_id=? where music_id=?');
            if($sql->execute([htmlspecialchars($_POST['music_mei']),$_POST['music_art'],$_POST['music_genre'],$_GET['id']])){
        // var_dump($sql);
                echo '<h1>更新に成功しました！</h1>';
            }else{
                echo '<h1>更新に失敗しました！</h1>';
            }
        }
    echo '<form action="update.php?id=', $_GET['id'],'" method="post">';
    echo '<input type="submit" value="更新画面へ" class="ko"></div>';
    echo '</form>';
    echo "\n";
?>
        <button onclick="location.href='list.php'" class="i">楽曲一覧へ</button>
    </body>
</html>