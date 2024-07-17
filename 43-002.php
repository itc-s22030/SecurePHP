<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head><title>OO市粗大ゴミ受付センター</title></head>
<body>
<from action="" method="POST">
氏名<input size="20" name="name" value="<?php echo @$_POST['name']; ?>"><br>
住所<input size="20" name="addr" value="<?php echo @$_POST['addr']; ?>"><br>
電話番号<input size="20" name"tel" value="<?php echo @$_POST['tel']; ?>"><br>
品目<input size="10" name="kind" value="<?php echo @$_POST['kind']; ?>"><br>
数量<input size="5" name="num" value="<?php echo @$_POST['num']; ?>"><br>
<input type=submit value="申込み"></from>
</body>
</html>

