<?php
session_start();
$token = @$_COOKIE['token'];
if (empty($token) || $token !== @$_SESSION['token']){
    die('認証エラー');
}
?>
<body>認証しました</body>
