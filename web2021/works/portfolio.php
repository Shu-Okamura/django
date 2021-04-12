<?php
//クリックジャギング対策
header("X-FRAME-OPTIONS: SAMEORIGIN");
?>
<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="ポートフォリオサイト" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="msapplication-TileImage" content="../img/icon/portfolio_icon.png" />
  <meta name="msapplication-TileColor" content="#ffffff"/>
  <link rel="icon" href="../img/icon/portfolio_icon.png" sizes="16x16 32x32 48x48 62x62" type="image/png" />
  <link rel="apple-touch-icon-precomposed" href="../img/icon/portfolio_icon.png" />
  <link rel="stylesheet" href="../status/css/slick/slick.css">
  <link rel="stylesheet" href="../status/css/slick/slick-theme.css">
  <link rel="stylesheet" href="../status/css/style.css">
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../status/js/slick.js"></script>
  <title>Portfolio / Portfilio</title>
</head>

<body id="w-page">
  <div class="loading">
    <div class="ld-wrapper"><div class="ld-textbox"><span>Now Loading</span></div><i class="fas fa-cog"></i></i></div>
  </div>

  <header id="header">
    <div class="h-container">
      <a href="../index.php"><h1 id="h1">Portfolio&emsp;<span class="h1-small">web Enginner</span></h1></a>
      <div class="nav">
        <button class="n-btn">
          <i class="fas fa-bars"></i>
          <i class="fas fa-times"></i>
        </button>
        <div class="n-totop">
          <a class="scroll" href="#main"><i class="fas fa-angle-double-up"></i></a>
        </div>
      </div>
      <div class="n-container" id="nav">
        <nav>
          <p class="n-title">Menu</p>
          <ul>
            <li><a class="n-item" href="../index.php#top"><p>Top</p></a></li>
            <li><a class="n-item" href="../index.php#profile"><p>Profile</p></a></li>
            <li><a class="n-item" href="../index.php#works"><p>Works</p></a></li>
            <li><a class="n-item" href="../index.php#contact"><p>Contact</p></a></li>
          </ul>
        </nav>
      </div>
      <div class="n-bg"></div>
    </div>
  </header>

  <main id="main">
    <article>
      <section class="section" id="w-page">
        <div class="breadcrumb">
          <ul class="bc-list">
            <li><a href="../index.php">Top</a></li>
            <li><a href="../index.php#works">Works</a></li>
            <li>Portfolio</li>
          </ul>
        </div>
        <h3>ポートフォリオサイト</h3>
        <div class="w-p-container">
          <div class="w-p-slide">
            <div class="slick-w-wrapper">
              <div class="w-p-imgbox">
                <img src="../img/works/portfolio/01.png" alt="">
                <p class="w-p-i-sentense">テスト01</p>
              </div>
              <div class="w-p-imgbox">
                <img src="../img/works/portfolio/02.png" alt="">
                <p class="w-p-i-sentense">テスト02</p>
              </div>
              <div class="w-p-imgbox">
                <img src="../img/works/portfolio/03.png" alt="">
                <p class="w-p-i-sentense">テスト03</p>
              </div>
            </div>
          </div>
          <div class="w-p-text">
            <div class="w-p-item">
              <p class="w-p-theme">概要</p>
              <p class="w-p-sentense">Webコーディングのポートフォリオサイト。</p>
              <p class="w-p-sentense onmark">デザイン＆コーディング...岡村周</p>
              <p class="w-p-sentense onmark">制作期間...7日程度</p>
            </div>
            <div class="w-p-item">
              <p class="w-p-theme">使用技術</p>
              <p class="w-p-sentense onmark">言語...HTML, CSS(Sass), Javascript, PHP</p>
              <p class="w-p-sentense onmark">プラグイン...Slick, Jquery</p>
            </div>
            <div class="w-p-item">
              <p class="w-p-theme">工夫点</p>
              <p class="w-p-sentense onmark">内容を簡潔にし、訪問した方に情報が伝わりすいようにした。</p>
              <p class="w-p-sentense onmark">ダークトーン＋蛍光色で、メリハリがあり読みやすい色調を心がけた。</p>
          </div>
          <div class="w-p-item">
            <p class="w-p-theme">応用してできること</p>
            <p class="w-p-sentense onmark">基本的なレイアウト（リキッド）デザイン</p>
            <p class="w-p-sentense onmark">js(jquery)による動的なサイト作成</p>
            <p class="w-p-sentense onmark">メールフォーム作成＋基本的なセキュリティ（対クリックジャギング、CSRFなど）</p>
          </div>
          <div class="w-p-item">
            <p class="w-p-theme">コード</p>
            <p class="w-p-sentense"><a href="" target="_blank">aaa</a></p>
          </div>
        </div>
      </section>
    </article>
  </main>

  <footer id="footer">
    <ul>
      <li class="f-icon"><a href="../index.php" target="_blank"><img src="../img/icon/portfolio_icon.png" alt="このサイト"></a></li>
      <li class="f-icon"><a href="https://github.com/Shu-Okamura" target="_blank" alt="github"><i class="fab fa-github"></i></a></li>
    </ul>
    <p class="f-sentence">&copy;Shu Okamura 2021</p>
  </footer>
  <div class="hidearea"></div>
  <script type="text/javascript" src="../status/js/main.js"></script>
</body>

</html>
