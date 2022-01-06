<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="x-ua-compatible" content="IE=edge">
<meta name=”robots” content=”noindex”>
<title><?= $title ?></title>
<meta name="description" content="懐かしい過去動画">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/x-icon" href="../favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="192x192" href="../android-touch-icon.png">
<meta property="og:title" content="TacosTube">
<meta property="og:type" content="website">
<meta property="og:description" content="TacosTube動画">
<meta property="og:url" content="https://tacos-2022.site">
<meta property="og:site_name" content="TacosTube">
<meta property="og:image" content="https://tacos-2022.site/images/teru.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="TacosTube">
<link rel="apple-touch-icon" href="../apple-touch-icon.png">
<link rel="manifest" href="../manifest.json">
<script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('sw.js')
      .then((reg) => {
        console.log('Service worker registered.', reg);
      });
  }
</script>