<?php
//クリックジャギング対策
header("X-FRAME-OPTIONS: SAMEORIGIN");
//セッション
session_start();

if($_SERVER ["REQUEST_METHOD"] === "POST"){
  // CSRF
  $token = $_POST['token'];
  if(!(hash_equals($token, $_SESSION['token']) && !empty($token))) {
    echo "不正アクセスの可能性があります";
    exit();
  }
  $name = $_POST["name"];
  $kana = $_POST["kana"];
  $tel = $_POST["tel"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  if(isset($_POST["btn_submit"])){
    $fromEmail = "info@okamuraweb.work";
    $fromName = "岡村周";
    $date = date("Y/m/d H:i:s");
    $header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $subject = "[自動送信] お問い合わせを受け付けました。";
    $body = "{$name} 様\nお問い合わせありがとうございます。以下の内容を、メールにて確認させていただきました。\n\n============================================================\n\n[お名前]\n{$name} 様\n\n[ふりがな]\n{$kana}様\n\n[電話番号]\n{$tel}\n\n[メールアドレス]\n{$email}\n\n[お問い合わせ内容]\n{$message}\n\n============================================================\n\n内容を確認の上、２営業日以内に回答させていただきます。\nしばらくお待ちください。\n\n{$fromName}";
    mb_send_mail($email, $subject, $body, $header);

    $ownSubject = "Portforioサイトからの連絡";
    $ownBody = "WebSiteのメールフォームから連絡がありました。\n\n[お名前]\n{$name} 様\n\n[ふりがな]\n{$kana}様\n\n[電話番号]\n{$tel}\n\n[メールアドレス]\n{$email}\n\n[お問い合わせ内容]\n{$message}\n\n[時刻]\n{$date}\n\n{$token}";
    mb_send_mail($fromEmail, $ownSubject, $ownBody, $header);
  }
}else{
  header('Location: https://okamuraweb.work');
}

?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="description" content="ポートフォリオサイト" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="msapplication-TileImage" content="./img/icon/portfolio_icon.png" />
  <meta name="msapplication-TileColor" content="#ffffff"/>
  <link rel="icon" href="./img/icon/portfolio_icon.png" sizes="16x16 32x32 48x48 62x62" type="image/png" />
  <link rel="apple-touch-icon-precomposed" href="../img/icon/portfolio_icon.png" />
  <link rel="stylesheet" href="./status/css/slick/slick.css">
  <link rel="stylesheet" href="./status/css/slick/slick-theme.css">
  <link rel="stylesheet" href="./status/css/style.css">
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./status/js/slick.js"></script>
  <meta http-equiv="refresh" content="5;URL=https://okamuraweb.work">
  <title>Form was sent / Portfolio</title>
</head>

<body>
  <div class="loading">
    <div class="ld-wrapper"><div class="ld-textbox"><span>Now Loading</span></div><i class="fas fa-cog"></i></i></div>
  </div>

  <header id="header">
    <div class="h-container">
      <a href="./index.php"><h1 id="h1">Portfolio&emsp;<span class="h1-small">web Enginner</span></h1></a>
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
            <li><a class="n-item" href="./index.php#top"><p>Top</p></a></li>
            <li><a class="n-item" href="./index.php#profile"><p>Profile</p></a></li>
            <li><a class="n-item" href="./index.php#works"><p>Works</p></a></li>
            <li><a class="n-item" href="./index.php#contact"><p>Contact</p></a></li>
          </ul>
        </nav>
      </div>
      <div class="n-bg"></div>
    </div>
  </header>

  <main id="main">
    <article>
      <section class="section" id="send">
        <div class="breadcrumb">
          <ul class="bc-list">
            <li><a href="../index.php">Top</a></li>
            <li><a href="../index.php#contact">Contact</a></li>
            <li>Thank you</li>
          </ul>
        </div>
        <div class="s-wrapper">
          <h2>受付完了</h2>
          <div class="s-container">
            <p>お問い合わせありがとうございます。<br>ご登録のアドレスに確認のメールを送りましたので、ご確認ください。<br>5秒後にTOPページへ戻ります。</p>
            <a href="./index.php">TOPへ戻る</a>
          </div>
        </div>
      </section>
    </article>
  </main>

  <footer id="footer">
    <ul>
      <li class="f-icon"><a href="./index.php" target="_blank"><img src="./img/icon/portfolio_icon.png" alt="このサイト"></a></li>
      <li class="f-icon"><a href="https://github.com/Shu-Okamura" target="_blank"><i class="fab fa-github"></i></a></li>
    </ul>
    <p class="f-sentence">&copy;Shu Okamura 2021</p>
  </footer>
  <div class="hidearea"></div>
  <script type="text/javascript" src="./status/js/main.js"></script>
</body>
</html>
