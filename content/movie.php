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
        <div class="items">
          <div class="item">
            <h3>はじまりの動画</h3>
            <video src="../video/tacotube01.mp4" poster="../images/poster/t01.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>はじまりのおわり<br>多分、高校生</p>
          </div>


          <div class="item">
            <h3>テニス活動</h3>
            <video src="../video/tacotube02.mp4" poster="../images/poster/t02.jpg" playsinline width="100%" controls controlsList="nodownload" oncontextmenu="return false" preload="none"></video>
            <p>よく遊んでた「ざき」でテニス</p>
          </div>

          <div class="item">
            <p>item 3</p>
          </div>
          <div class="item">
            <p>item 4</p>
          </div>
          <div class="item">
            <p>item 5</p>
          </div>
          <div class="item">
            <p>item 6</p>
          </div>
          <div class="item">
            <p>item 7</p>
          </div>
          <div class="item">
            <p>item 8</p>
          </div>
          <div class="item">
            <p>item 9</p>
          </div>
          <div class="item">
            <p>item 10</p>
          </div>
          <div class="item">
            <p>item 11</p>
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