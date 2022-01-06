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
      <h1>TacosTube</h1>
      <h2>タコスとゆかいなおともだち</h2>
    </div><!-- /.header-contents -->
  </header>
  <div class="main">
    <article>
      <section id="gallery">
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
            <p>よく遊んでた「ざき」でテニス</p>
          </div>
        </div>

        <div class="chara1"></div>
        <div class="chara2"></div>
        <div class="blank0"></div>

        <div class="column">
          <div class="left-column">
            <h3>はじまりの動画</h3>
            <video src="video/tacotube01.mp4" poster="images/poster/t01.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>

            <p>はじまりのおわり<br>多分、高校生</p>
          </div>
          <div class="right-culumn">
            <h3>テニス活動</h3>
            <video src="video/tacotube02.mp4" poster="images/poster/t02.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>よく遊んでた「ざき」でテニス</p>
          </div>
        </div>
      </section>

      <div class="blank3"></div>

      <section>
        <div class="don">
          <h2>タコスのゲームチャンネル</h2>
          <a href="https://youtube.com/channel/UC--hSAY-QaZVAkbtYxmlWbA"><img src="images/dontacos.jpg" alt="ドンタコス" width="70%"></a>
        </div>
        <a href="content/movie.php">test</a>
      </section>
    </article>
  </div><!-- /main -->
  <footer><small>&copy; 2022 TacosTube</small></footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>