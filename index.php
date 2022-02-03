<?php
$fp = fopen('data/count.dat', 'r+b');
flock($fp, LOCK_EX);
$count = fgets($fp);
$count++;
?>

<!doctype html>
<html lang="ja" prefix="og:http://ogp.me/ns#">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TQ96QHM');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name=”robots” content=”noindex”>
  <title>TacosTube</title>
  <meta name="description" content="懐かしい過去動画">
  <link href="css/style.css?v=20220129" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="android-touch-icon.png">
  <meta property="og:title" content="TacosTube">
  <meta property="og:type" content="website">
  <meta property="og:description" content="TacosTube動画">
  <meta property="og:url" content="https://tacos-2022.site">
  <meta property="og:site_name" content="TacosTube">
  <meta property="og:image" content="https://tacos-2022.site/images/teru.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="TacosTube">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="manifest" href="manifest.json">
  <script>
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('sw.js')
        .then((reg) => {
          console.log('Service worker registered.', reg);
        });
    }
  </script>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQ96QHM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <div class="header-contents">
      <?php require_once "common/header.php"; ?>
    </div><!-- /.header-contents -->
  </header>
  <div class="main">
    <article>

      <section id="gallery">
        <div class="chara3"></div>
        <div class="chara4"></div>
        <div class="chara5"></div>
        <div class="blank3"></div>
        <h2>NEWS</h2>
        <div class="frame">
          <ul>
            <li>動画は気分が向いたら入れてくよ！持ってる動画あったら送って！</li>
            <li>下のツールボックスからコロナ感染の国内外の最新データが確認できるよ(-_-*)</li>
          </ul>
        </div>
        <h2>最近アップした ちょっぴり昔の動画</h2>

        <div class="column">
          <div class="left-column">
            <h3>V字のゴツ男とゴリラ</h3>
            <video src="video/tacotube17.mp4" poster="images/poster/t17.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>V字になった<br>ゴツ男君</p>
          </div>
          <div class="right-culumn">
            <h3>キャッチボール</h3>
            <video src="video/tacotube16.mp4" poster="images/poster/t16.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>最追試<br>再々追試</p>
          </div>
        </div>

        <div class="column">
          <div class="left-column">
            <h3>なんつった？おれ？</h3>
            <video src="video/tacotube15.mp4" poster="images/poster/t15.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>ざきでの日常<br>撮るのヤメテください</p>
          </div>
          <div class="right-culumn">
            <h3>ビデオ撮りよる顔</h3>
            <video src="video/tacotube14.mp4" poster="images/poster/t14.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>ラグビー終わり<br>普段の「ざき」</p>
          </div>
        </div>

        <div class="blank3"></div>

        <!-- 過去動画ボタン -->
        <a class="more" href="content/movie.php">
          <span class="more-bottom"></span>
          <span class="more-top"><span>動画一覧へ</span></span>
        </a>
      </section>

      <div class="chara1"></div>
      <div class="blank3"></div>

      <section>
        <div class="don">
          <h2>タコスのチャンネル</h2>
          <a href="https://youtube.com/channel/UC--hSAY-QaZVAkbtYxmlWbA"><img src="images/dontacos.jpg" alt="ドンタコス" width="70%"></a>
          <a href="https://tool.katsumaru.blog"><img src="images/tool.png" alt="ツールボックス" width="70%"></a>
        </div>
      </section>

      <?php
      require_once("common/es.php");
      ?>
      <section>
        <h2>掲示板</h2>

        <form method="POST" action="content/writeMemo.php">
          <ul>
            <li>
              <textarea name="memo" cols="40" rows="8" maxlength="200" placeholder="コメント入力"></textarea>
            </li>
            <li><input type="submit" value="送信する"></li>
          </ul>
        </form>

        <?php
        $line_num = 50; // 表示する行数

        $contents = file('data/comment.txt', FILE_IGNORE_NEW_LINES);

        $start_index = count($contents) - $line_num;
        if ($start_index < 0) {
          $start_index = 0;
        }
        ?>

        <div class="comment">
          <?php
          $filename = "data/comment.txt";
          try {
            $fileobj = new SplFileObject($filename, "rb");
            $fileobj->seek($start_index);
          } catch (Exception $e) {
            echo '<span class="error">エラーがありました</span>';
            echo $e->getMessage();
            exit();
          }

          $fileobj->flock(LOCK_SH);
          $readdata = $fileobj->fread($fileobj->getSize());
          $fileobj->flock(LOCK_UN);

          if (!($readdata === FALSE)) {
            $readdata = es($readdata);
            $readdata_br = nl2br($readdata, false);
            echo $readdata_br;
          } else {
            echo '<span class="error">ファイルを読み込めませんでした</span>';
          }
          ?>
        </div>

      </section>

    </article>
  </div><!-- /main -->
  <footer>
    <div class="counter-area">
      <span class="access-count"><?php echo $count; ?></span>
    </div><!-- /.counter-area -->
    <small>&copy; 2022 TacosTube</small>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>

<?php
rewind($fp);
fwrite($fp, $count);
flock($fp, LOCK_UN);
fclose($fp);
?>