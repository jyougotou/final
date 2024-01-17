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
		<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../src/css/update.css">
		<title>音楽サイト</title>
	</head>
	<body>
        <div class="field">
    <table>
<?php
    $pdo=new PDO($connect, USER, PASS);

	$sql = $pdo->prepare('select * from Music where music_id = ?');
    $sql->execute([$_GET['id']]);
    foreach($sql as $row){
	
		//var_dump($row);

		        echo '<form action="update_completed.php?id=', $_GET['id'],'" method="post">';
                echo '<input type="hidden" name="music_id" value="',$row['music_id'],'required">';

                echo '<table>';
                echo '<tr><th>楽曲名</th><th>アーティスト名</th><th>ジャンル名</th></tr>';
                echo '<tr>';
	        	echo '<div class="td1">';
                echo '<td><input type="text" name="music_mei" value="',$row['music_mei'],'"required></td>';
                echo '</div> ';

		        echo '<div class="td1">';
                echo '<td><input type="text" name="music_art" value="',$row['music_art'],'"required></td>';
        		echo '</div> ';
        
                echo '<div class="td1">';
                echo '<td><select name="music_genre">';
                echo '<option value="">---</option>';
                $pdo=new PDO($connect, USER, PASS);
                $sql=$pdo->query('select * from Genre');
                foreach($sql as $row){
                    echo '<option value="', $row['genre_id'],'">',$row['genre_mei'],'</option>';
                }
                echo '</select></td>';
                echo '</div>';
                echo '</tr>';
                echo '</table>';
                
                echo '<input type="submit" value="更新" class="ko"></div>';
	        	echo '</form>';
	        	echo "\n";
                echo '<form action="list.php" method="post">';
                echo '<input type="submit" value="戻る" class="mo"></div>';
	        	echo '</form>';

            }
?>
</table>
</div>
    </body>
</html>