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
  //サニタイズ（特殊文字をエスケープする）
  $clean_POST = array();
  foreach ($_POST as $key => $value){
    $clean_POST[$key] = htmlspecialchars($value, ENT_QUOTES,"UTF-8");
  }
  $name = $clean_POST["name"];
  $_SESSION["name"] = $name;
  $kana = $clean_POST["kana"];
  $_SESSION["kana"] = $kana;
  $tel = $clean_POST["tel"];
  $_SESSION["tel"] = $tel;
  $email = $clean_POST["email"];
  $_SESSION["email"] = $email;
  $message = $clean_POST["message"];
  $_SESSION["message"] = $message;
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
   <title>Confirm / Portfolio</title>
 </head>

 <body id="confirm">
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
       <section class="section" id="confirm">
         <div class="breadcrumb">
           <ul class="bc-list">
             <li><a href="../index.php">Top</a></li>
             <li><a href="../index.php#contact">Contact</a></li>
             <li>Confirm</li>
           </ul>
         </div>
         <div class="cf-container">
           <h2>内容のご確認</h2>
           <p class="cf-sentense">以下の内容で送信いたします。修正が必要な場合は、ページ下部の「修正する」ボタンを押してください。</p>
           <form action="./send.php" method="post" onSubmit="return check()">
             <input type="hidden" name="token" value="<?=$_SESSION['token']?>">
             <input type="hidden" name="name" value="<?php echo $name; ?>">
             <input type="hidden" name="kana" value="<?php echo $kana; ?>">
             <input type="hidden" name="tel" value="<?php echo $tel; ?>">
             <input type="hidden" name="email" value="<?php echo $email; ?>">
             <input type="hidden" name="message" value="<?php echo $message; ?>">
             <div class="cf-item">
               <label>お名前</label>
               <p class="cf-content"><?php echo $name; ?></p>
             </div>
             <div class="cf-item">
               <label>ふりがな</label>
               <p class="cf-content"><?php echo $kana; ?></p>
             </div>
             <div class="cf-item">
               <label>電話番号</label>
               <p class="cf-content"><?php echo $tel; ?></p>
             </div>
             <div class="cf-item">
               <label>メールアドレス</label>
               <p class="cf-content"><?php echo $email; ?></p>
             </div>
             <div class="cf-item">
               <label>お問い合わせ内容・ご依頼内容</label>
               <p class="cf-content"><?php echo $message; ?></p>
             </div>
             <div class="cf-btn-wrapper">
               <input type="button" class="cf-btn" value="修正する" onclick="history.back(-1)">
               <input type="submit" name="btn_submit" class="cf-btn" value="送信する">
             </div>
           </form>
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
