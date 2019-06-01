<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
		<title>High＆Lowゲーム</title>
	</head>
	<body>
	<form action="#" method="post">
		<?php
		echo '<div align="center">';
		echo '■円の面積を求めます！<br>';
		echo '<input type="text" name="nagasa">';
		echo '<input type="submit" value="送信"><br><br>';

		//フォームのPOST送信データを各変数に代入

		//$Num='nagasa';
	    $Num=$_POST['nagasa'];
	    if($Num==''){
	       echo '求めたい円の半径を入力してください。<br><br>';
	    }  else{
	       echo '半径が',$Num,'cmの円の面積は',$Num*$Num*3.14,'cm^2です。<br><br>';
	    }
	    echo '<a href="test.php">元に戻す</a>';
	    echo '</div>';
		?>

	</form>
	</body>
</html>