<?php
session_start();

if(!isset($_SESSION["userID"])) {
  $topURL = "https://tacos-2022.site/log/login.php";
  header("Location: {$topURL}");
  exit();
}
?>