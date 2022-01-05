<!doctype html>
<html lang="ja">

<head>
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
  <meta property="og:url" content="">
  <meta property="og:site_name" content="TacosTube">
  <meta property="og:image" content="https://katsu-climbing.site/images/bb.png">
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
  <header>
    <div class="header-contents">
      <h1>TacosTube</h1>
      <h2>タコスとゆかいなおともだち</h2>
    </div><!-- /.header-contents -->
  </header>
  <div class="main">
    <article>
      <section>
        <h2>ちょっぴり昔の動画一覧</h2>

        <div class="column">
          <div class="v2">
            <h3>はじまりの動画</h3>
            <a href="video/tacotube01.mp4" controlsList="nodownload" oncontextmenu="return false;"><img class="video" src="images/t01.jpg" alt="はじまりの動画"></a>
            <p>はじまりのおわり<br>多分、高校生</p>
          </div>
          <div class="v2">
            <h3>テニス活動</h3>
            <a href="video/tacotube02.mp4" controlsList="nodownload" oncontextmenu="return false;"><img class="video" src="images/t02.jpg" alt="テニス活動"></a>
            <p>よく遊んでた「ざき」でテニス</p>
          </div>
        </div>


        

      </section>
    </article>
  </div><!-- /main -->

  <footer><small>&copy; 2022 TacosTube</small></footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>