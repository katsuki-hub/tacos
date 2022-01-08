<!doctype html>
<html lang="ja" prefix="og:http://ogp.me/ns#">

<head>
  <?php $title = "ゆかいな仲間の過去動画一覧" ?>
  <?php require_once "../common/head.php"; ?>
  <link href="../css/page.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQ96QHM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <?php require_once "../common/header.php"; ?>
  </header>

  <!-- main -->
  <div class="main">
    <article>
      <section>
        <h2>ゆかいな仲間の過去動画一覧</h2>
        <div class="chara">
          <div class="chara6"></div>
        </div>

        <!--
        <div class="item">
          <h3></h3>
          <video src="../video/tacotube.mp4" poster="../images/poster/t.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
          <p><br></p>
        </div>
        -->

        <div class="items">

        <div class="item">
          <h3>トライ！</h3>
          <video src="../video/tacotube10.mp4" poster="../images/poster/t10.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
          <p>と、と、と、トラーイ！！<br>どれをトライアスロン…</p>
        </div>

        <div class="item">
          <h3>がん</h3>
          <video src="../video/tacotube09.mp4" poster="../images/poster/t09.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
          <p>がんってなに？？<br>なんで「がん」？？</p>
        </div>

        <div class="item">
          <h3>撮してよ</h3>
          <video src="../video/tacotube08.mp4" poster="../images/poster/t08.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
          <p>別の日のザキ<br>なつかしいね</p>
        </div>

          <div class="item">
            <h3>テニスに夢中</h3>
            <video src="../video/tacotube07.mp4" poster="../images/poster/t07.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>さらにテニスの続き<br>高校生だったはず</p>
          </div>

          <div class="item">
            <h3>撮るなマジで！</h3>
            <video src="../video/tacotube06.mp4" poster="../images/poster/t06.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>陽気なテルちゃん<br>恥ずかしがりモンチ</p>
          </div>

          <div class="item">
            <h3>たばこのテル</h3>
            <video src="../video/tacotube05.mp4" poster="../images/poster/t05.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>俺がたばこ吸いよとこでも撮っとけ！<br>多分、浪人生</p>
          </div>

          <div class="item">
            <h3>フレッシュマン</h3>
            <video src="../video/tacotube04.mp4" poster="../images/poster/t04.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>二人が合流<br>多分、社会人</p>
          </div>

          <div class="item">
            <h3>テニスの続き</h3>
            <video src="../video/tacotube03.mp4" poster="../images/poster/t03.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>ザキでよくしていたテニス<br>きっと、高校生</p>
          </div>

          <div class="item">
            <h3>テニス活動</h3>
            <video src="../video/tacotube02.mp4" poster="../images/poster/t02.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>よく遊んでた「ざき」でテニス<br>懐かしい日々</p>
          </div>

          <div class="item">
            <h3>はじまりの動画</h3>
            <video src="../video/tacotube01.mp4" poster="../images/poster/t01.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>はじまりのおわり<br>多分、高校生</p>
          </div>
        </div><!-- /items -->
      </section>
    </article>
  </div><!-- /.main-wrapper -->
  <footer>
    <?php require_once "../common/footer.php"; ?>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../script/jquery.pagination.js"></script>
  <script>
    $(function() {
      $('.items').pagination({
        itemElement: '> .item',
        paginationClassName: 'pagination',
        paginationInnerClassName: 'clearfix',
      })
    });
  </script>
</body>

</html>