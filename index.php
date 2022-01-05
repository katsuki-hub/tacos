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
      <h2>動画一覧</h2>
    </div><!-- /.header-contents -->
  </header>
  <div class="main">
    <article>
      <section>
        <h2>ちょっぴり昔の動画一覧</h2>

        <div class="column">
          <div class="v2">
            <h3>Barehandsへ</h3>
            <a href="video/b15.mp4"><img class="video" src="images/b15.jpg" alt="Barehandsへ"></a>
            <p>Barehandsへ<br>ボルダリングムービー</p>
          </div>
          <div class="v2">
            <h3>スラブ3級と垂壁2級</h3>
            <a href="video/b14.mp4"><img class="video" src="images/b14.jpg" alt="道場課題6月4週"></a>
            <p>新課題スラブ壁の紫3級と垂壁赤の2級に挑戦！</p>
          </div>
        </div>

        <div class="column">
          <div class="v2">
            <h3>垂壁壁2級</h3>
            <a href="video/b13.mp4"><img class="video" src="images/b13.jpg" alt="垂壁壁2級"></a>
            <p>垂壁壁の白2級課題！完登？？</p>
          </div>
          <div class="v2">
            <h3>110度課題</h3>
            <a href="video/b12.mp4"><img class="video" src="images/b12.jpg" alt="110度課題"></a>
            <p>マンスリーの110度課題にトライ! マンスリー4番、6番、8番</p>
          </div>
        </div>

        <div class="column">
          <div class="v2">
            <h3>道場課題6月4週</h3>
            <a href="video/b11.mp4"><img class="video" src="images/b11.jpg" alt="道場課題6月4週"></a>
            <p>6月4週の道場課題!! 垂壁、95度壁、110度壁の完登動画</p>
          </div>
          <div class="v2">
            <h3>110度マンスリー6番</h3>
            <a href="video/b10.mp4"><img class="video" src="images/b10.jpg" alt="道場課題6月4週"></a>
            <p>マンスリー110度6番完登!!＆道場垂壁課題の完登動画</p>
          </div>
        </div>

        <div class="column">
          <div class="v2">
            <h3>95度マンスリー5番</h3>
            <a href="video/b9.mp4"><img class="video" src="images/b9.jpg" alt="マンスリー5"></a>
            <p>マンスリー課題95度！<br>5番みんな完登</p>
          </div>
          <div class="v2">
            <h3>マンスリー5番と6番</h3>
            <a href="video/b3.mp4"><img class="video" src="images/b3.png" alt="マンスリー56"></a>
            <p>マンスリー95度壁の5番挑戦!!＆マンスリー110度壁の6番挑戦!!</p>
          </div>
        </div>

        <div class="column">
          <div class="v2">
            <h3>スラブ道場課題</h3>
            <a href="video/b2.mp4"><img class="video" src="images/b2.png" alt="道場スラブ"></a>
            <p>スラブ壁の道場課題！<br>4人で課題へ</p>
          </div>
          <div class="v2">
            <h3>垂壁マンスリー７番</h3>
            <a href="video/b1.mp4"><img class="video" src="images/b1.png" alt="マンスリー７番"></a>
            <p>垂壁壁のマンスリー7番課題！3人セッション</p>
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