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
    <link rel="stylesheet" href="../src/css/registration.css">
    <title>音楽サイト</title>
</head>
<body>
    <div class="field">
    <form action = "registration_completed.php" method = "post">
        <table>
        <tr><th>楽曲名</th><th>アーティスト名</th><th>ジャンル名</th></tr>
            <tr><td><input type = "text" name = "music_mei" required></td>
            <td><input type = "text" name = "music_art" required></td>
            <td>
            <?php
                echo '<select name="music_genre">';
                echo '<option value="">---</option>';
                $pdo=new PDO($connect, USER, PASS);
                $sql=$pdo->query('select * from Genre');
                foreach($sql as $row){
                    echo '<option value="', $row['genre_id'],'">',$row['genre_mei'],'</option>';
                }
                echo '</select>';
            ?>
            </td></tr>
        </table>
    <input type="submit" value="登録" class="to">
    </form>
    </div>
    <button onclick="history.back()" class="mo">戻る</button>
</body>
</html>