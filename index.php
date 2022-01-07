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
  <link href="css/style.css" rel="stylesheet" type="text/css">
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
        <div class="chara">
          <div class="chara3"></div>
          <div class="chara4"></div>
          <div class="chara5"></div>
          <div class="blank4"></div>
        </div>
        <h2>ちょっぴり昔の動画一覧</h2>

        <div class="column">
          <div class="left-column">
            <h3>はじまりの動画</h3>
            <video src="video/tacotube01.mp4" poster="images/poster/t01.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>

            <p>はじまりのおわり<br>多分、高校生</p>
          </div>
          <div class="right-culumn">
            <h3>テニス活動</h3>
            <video src="video/tacotube02.mp4" poster="images/poster/t02.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>よく遊んでた「ざき」でテニス<br>懐かしい日々</p>
          </div>
        </div>
        <div class="chara1"></div>
        <div class="blank0"></div>

        <div class="column">
          <div class="left-column">
            <h3>テニスの続き</h3>
            <video src="video/tacotube03.mp4" poster="images/poster/t03.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>ザキでよくしていたテニス<br>きっと、高校生</p>
          </div>
          <div class="right-culumn">
            <h3>フレッシュマン</h3>
            <video src="video/tacotube04.mp4" poster="images/poster/t04.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>二人が合流<br>多分、社会人</p>
          </div>
        </div>
        <div class="blank3"></div>

        <!-- 過去動画ボタン -->
        <a class="more" href="content/movie.php">
          <span class="more-bottom"></span>
          <span class="more-top"><span>動画一覧へ</span></span>
        </a>
      </section>

      <div class="blank3"></div>

      <section>
        <div class="don">
          <h2>タコスのゲームチャンネル</h2>
          <a href="https://youtube.com/channel/UC--hSAY-QaZVAkbtYxmlWbA"><img src="images/dontacos.jpg" alt="ドンタコス" width="70%"></a>
        </div>
      </section>
    </article>
  </div><!-- /main -->
  <footer><small>&copy; 2022 TacosTube</small></footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>