<?php
session_start();
$_SESSION = array();
session_destroy();
?>

<!doctype html>
<html lang="ja" prefix="og:http://ogp.me/ns#">

<head>
  <?php $title = "ログイン画面" ?>
  <?php require_once "../common/head.php"; ?>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQ96QHM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <?php require_once "../common/header.php"; ?>
  </header>

  <div class="main">
    <h2>ログアウトしました！</h2>
    <div class="blank100"></div>
    <p><a href="login.php" class="log">ログインページに戻る</a></p>
  </div>
</body>

</html>