<?php
  function redirect($url) {
    if (! mb_ereg('\A[-_.!~*\'();\/?:@&=+\$,%#a-zA-Z0-9]+\z', $url)) {
      die('Bad URL');
    }
    header('Location: ' . $url);
  }

  $url = isset($_GET['url']) ? $_GET['url'] : '';
  redirect($url);
?>
<body>
リダイレクトします
</body>

