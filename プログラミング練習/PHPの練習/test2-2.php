<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
		<title>High＆Lowゲーム</title>
	</head>
	<body>
		<?php
		//フォームのPOST送信データを各変数に代入

	    $Num=$_POST['tuki'];
        echo '<div align="center">';
	    if($Num=='1'){
	       echo $Num,'月は冬です。<br>新年明けましておめでとうございます！<br><br>';
	    }  elseif($Num=='2'){
	       echo $Num,'月は冬です。<br>寒いです！<br><br>';
	    }  elseif($Num=='3'){
	       echo $Num,'月は春です。<br>そろそろ梅の花が咲いています<br><br>';
	    }  elseif($Num=='4'){
	       echo $Num,'月は春です。<br>桜の季節になりました。<br><br>';
	    }  elseif($Num=='5'){
	       echo $Num,'月は春です。<br>今はフジの花が見ごろです。<br><br>';
	    }  elseif($Num=='6'){
	       echo $Num,'月は夏です。<br>緑が生い茂っていますね！<br><br>';
	    }  elseif($Num=='7'){
	       echo $Num,'月は夏です。<br>暑くなってきました<br><br>';
	    }  elseif($Num=='8'){
	       echo $Num,'月は夏です。<br>セミが一生懸命鳴いています。<br><br>';
	    }  elseif($Num=='9'){
	       echo $Num,'月は秋です。<br>暑さも少し和らぎましたね。<br><br>';
	    }  elseif($Num=='10'){
	       echo $Num,'月は秋です。<br>食欲の秋です<br><br>';
	    }  elseif($Num=='11'){
	       echo $Num,'月は秋です。<br>少しずつ寒くなってきましたね<br><br>';
	    }  elseif($Num=='12'){
	       echo $Num,'月は冬です。<br>寒いです！メリークリスマス！<br><br>';
	    }  else{
	       echo '1～12の数字を入れてください。<br><br>';
	    }
	    echo '<a href="test2.php">元に戻す</a>';
	    echo '</div>';
		?>
	</body>
</html>