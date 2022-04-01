<?php
session_start();

$error_mg = "";
if (isset($_POST["login"])) {
  if ($_POST["userID"] == "tacos" && $_POST["userPW"] == "0720") {
    $_SESSION["userID"] = $_POST["userID"];
    $login_index = "../index.php";
    header("Location:{$login_index}");
    exit();
  }
  $error_mg = "ID か パスワードに間違いがあります。<br>もう一度入力してください！！";
}
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
    <?php
    if ($error_mg) {
      echo '<span class="error_mg">', $error_mg, '</span>';
    }
    ?>

    <form action="login.php" method="POST">
      <li><label>
          <span class="log">ログインID</span><input type="text" name="userID">
        </label></li>
      <li><label>
          <span class="log">パスワード</span><input type="number" name="userPW">
        </label></li>
      <li><input type="submit" value="ログイン" name="login"></li>
    </form>
  </div>
</body>

</html>