
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
    <link rel="stylesheet" href="../src/css/list.css">
    <title>音楽サイト</title>                                 
</head>
<body>
    <div class="list_field">
    <h1>音楽情報一覧</h1>
    <a href="registration.php">
        <button type="button" class="re">楽曲登録</button><br><br>
    </a>
    <a href="genre.php">
        <button type="button" class="re">ジャンル登録</button>
    </a>
    <table align="center" border="1">
        <tr>
            <th>音楽ID</th>
            <th>楽曲名</th>
            <th>アーティスト名</th>
            <th>ジャンル名</th>
        </tr>
<?php
$pdo = new PDO($connect, USER, PASS);
$sql = $pdo->query('SELECT * FROM Music inner join Genre on Music.genre_id = Genre.genre_id');
foreach($sql as $row){

    echo '<tr>';
    echo '<td>', $row['music_id'], '</td>';
    echo '<td>', $row['music_mei'], '</td>';
    echo '<td>', $row['music_art'], '</td>';
    echo '<td>', $row['genre_mei'], '</td>';
    echo '<td>';
    echo '<div class="delete"><a href="deletion_completed.php?id=', $row['music_id'],'"><button type="button">削除</button></a></div>';
    echo '<div class="update"><a href="update.php?id=', $row['music_id'],'"><button type="button">更新</button></a></div>';
    echo '</td>';
    echo '</tr>';
    echo "\n";
}

?>
</table>
</div>
</body>
</html>