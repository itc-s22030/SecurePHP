<?php
  session_start();
  if (empty($_SESSION['token'])) { 
    $token = bin2hex(openssl_random_pseudo_bytes(24));
    $_SESSION['token'] = $token;
  } else {  
    $token = $_SESSION['token'];
  }
?><body>
<form action="45-003a.php" method="POST">
新パスワード<input name="pwd" type="password"><BR>
<input type=submit value="パスワード変更">
<input type="hidden" name="token" value="<?php echo htmlspecialchars($token, ENT_COMPAT, 'UTF-8'); ?>">
</form>
</body>
