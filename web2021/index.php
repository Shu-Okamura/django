<?php
session_start();
//クリックジャギング対策
header("X-FRAME-OPTIONS: SAMEORIGIN");
// CSRF
if(!isset($_SESSION["token"])){
  $_SESSION["token"] = crypt(random_bytes(30));
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
  <link rel="apple-touch-icon-precomposed" href="./img/icon/portfolio_icon.png" />
  <link rel="stylesheet" href="./status/css/slick/slick.css">
  <link rel="stylesheet" href="./status/css/slick/slick-theme.css">
  <link rel="stylesheet" href="./status/css/style.css">
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./status/js/slick.js"></script>
  <title>Top / Portfilio</title>
</head>

<body id="index">
  <div class="loading">
    <div class="ld-wrapper"><div class="ld-textbox"><span>Now Loading</span></div><i class="fas fa-cog"></i></i></div>
  </div>

  <header id="header">
    <div class="h-container">
      <a href="./index.php"><h1 id="h1" class="h1-down">Portfolio&emsp;<span class="h1-small">cording / artwork</span></h1></a>
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
            <li><a class="scroll n-item" href="#top"><p>Top</p></a></li>
            <li><a class="scroll n-item" href="#profile"><p>Profile</p></a></li>
            <li><a class="scroll n-item" href="#works"><p>Works</p></a></li>
            <li><a class="scroll n-item" href="#contact"><p>Contact</p></a></li>
          </ul>
        </nav>
      </div>
      <div class="n-bg"></div>
    </div>
  </header>

  <main id="main">
    <article>
      <div class="bg">
        <div class="slick-wrapper">
          <div class="slick-img"><img src="./img/slide/001.png" alt="01"></div>
          <div class="slick-img"><img src="./img/slide/002.png" alt="01"></div>
          <div class="slick-img"><img src="./img/slide/003.png" alt="01"></div>
          <div class="slick-img"><img src="./img/slide/004.png" alt="01"></div>
        </div>
      </div>
      <section class="section" id="top">
        <div class="t-content">
          <div class="t-sentense">
           <p>Welcome to<br>my Portforio!</p>
           <span class="t-s-small">cording / artwork</span>
          </div>
          <div class="t-nav">
            <a class="scroll t-btn" href="#profile"><p>About me</p></a>
            <a class="scroll t-btn" href="#works"><p>My works</p></a>
            <a class="scroll t-btn" href="#contact"><p>Contact</p></a>
          </div>
        </div>
      </section>

      <section class="section"  id="profile">
        <h2>自己紹介<br><span class="h2-small">Profile</span></h2>
        <div class="p-container">
          <div class="p-face">
            <div class="p-img"><img src="./img/icon/shu.png" alt="Shu Okamura"></div>
            <div class="p-c-name">岡村周 / Shu Okamura</div>
          </div>
          <div class="p-skill">
            <div class="p-s-item">
              <div class="p-s-title">経歴・人物<button class="p-s-btn" type="button"><i class="fas fa-angle-down"></i><i class="fas fa-angle-up"></i></button></i></div>
              <div class="p-s-wrapper">
                <div class="p-s-box">
                  <div class="p-s-content">長崎県出身、東京藝術大学美術学部卒業。</div>
                  <div class="p-s-content">美術研究会のウェブ更新を手伝ううちにプログラミングに興味を持つようになり、友人のサイト設計に参加したりしている。</div>
                  <div class="p-s-content">趣味は読書、ゲームなどインドア系。絵を描いたり調べごとをするのも好き。</div>
                  <div class="p-s-content">2021年3月現在、キャリアリンク株式会社で働きながら、Web関連の勉強中。</div>
                </div>
              </div>
            </div>
            <div class="p-s-item">
              <div class="p-s-title">使用言語<button class="p-s-btn" type="button"><i class="fas fa-angle-down"></i><i class="fas fa-angle-up"></i></button></i></div>
              <div class="p-s-wrapper">
                <div class="p-s-box">
                  <div class="p-s-tag">HTML</div>
                  <div class="p-s-tag">CSS (Sass)</div>
                  <div class="p-s-tag">Javascript (jQuery)</div>
                  <div class="p-s-tag">PHP</div>
                  <div class="p-s-tag">Python (Django)</div>
                  <div class="p-s-tag">UNIX (Terminal)</div>
                </div>
              </div>
            </div>
            <div class="p-s-item">
              <div class="p-s-title">使用アプリ<button class="p-s-btn" type="button"><i class="fas fa-angle-down"></i><i class="fas fa-angle-up"></i></button></div>
              <div class="p-s-wrapper">
                <div class="p-s-box">
                  <div class="p-s-tag">Atom</div>
                  <div class="p-s-tag">PyCharm CE</div>
                  <div class="p-s-tag">Anaconda</div>
                  <div class="p-s-tag">Photoshop</div>
                  <div class="p-s-tag">Excel</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section"  id="works">
        <h2>制作物<br><span class="h2-small">Works</span></h2>
        <div class="w-container">
          <div class="w-sentense"><p>今まで制作したコンテンツを載せています。</p></div>
          <div class="w-item">
            <a class="w-wrapper" href="./works/portfolio.php">
              <p>フロントエンド</p>
              <img src="./img/works/portfolio/01.png" alt="">
            </a>
          </div>
          <div class="w-item">
            <a class="w-wrapper a-inviled" href="">
              <p>Django<br>（現在準備中）</p>
              <img src="./img/slide/001.png" alt="">
            </a>
          </div>
          <div class="w-item">
            <a class="w-wrapper a-inviled" href="">
              <p>アートワーク<br>（現在準備中）</p>
              <img src="./img/slide/001.png" alt="">
            </a>
          </div>
        </div>
      </section>

      <section class="section"  id="contact">
        <h2>お問い合わせ<br><span class="h2-small">Contact</span></h2>
        <div class="c-container">
          <p class="c-sentense">お問い合わせ、ご依頼は以下のフォームにご記入の上、ご送信ください。<br>2営業日以内に担当者よりご連絡差し上げます。</p>
          <div class="c-form">
            <form action="./confirm.php" method="post" name="form" id="form" onSubmit="return validate()">
              <input type="hidden" name="token" value="<?=$_SESSION['token']?>">
              <div class="c-item">
                <span class="error"></span>
                <label for="name">氏名<small>（又は代表者名、空白不要）</small></label>
                <input class="c-inputarea" type="text" id="name" name="name" value="" placeholder="岡村周">
              </div>
              <div class="c-item">
                <span class="error"></span>
                <label for="kana">ふりがな<small>（又はフリガナ、全角）</small></label>
                <input class="c-inputarea" type="text" id="kana" name="kana" value="" placeholder="おかむらしゅう">
              </div>
              <div class="c-item">
                <span class="error"></span>
                <label for="tel">電話番号<small>（ハイフン不要）</small></label>
                <input class="c-inputarea" type="text" id="tel" name="tel" value="" placeholder="ハイフン無し">
              </div>
              <div class="c-item">
                <span class="error"></span>
                <label for="email">メールアドレス</label>
                <input class="c-inputarea" type="email" id="email" name="email" value="" placeholder="〇〇@△△.com, etc">
              </div>
              <div class="c-item c-i-long">
                <span class="error"></span>
                <label for="message">お問い合わせ内容</label>
                <textarea class="c-inputarea" name="message" id="message" rows="12" cols="80" placeholder="お気軽にご相談ください！"></textarea>
              </div>
              <div class="c-confirm">
                <div class="reset-modal">
                  <div class="reset-wrapper">
                    <div class="reset-container">
                      <p class="reset-sentense"><i class="fas fa-exclamation-circle"></i>お問い合わせの内容をリセットしますか？</p>
                      <button class="reset-btn" type="reset" name="reset">リセット</button>
                      <button class="reset-btn" type="button">戻る</button>
                    </div>
                  </div>
                </div>
                <div class="c-cf-sentense">
                  <p>* 個人情報の取り扱いについて</p>
                  <p>入力頂いたお客様の個人情報はご返答のために利用させて頂きます。この利用目的以外に正当な理由なく第三者に個人情報を開示することはありません。</p>
                </div>
                <div class="c-cf-wrapper">
                  <button class="c-btn c-reset" type="button">リセットする</button>
                  <input class="c-btn c-btn-confirm" type="submit" name="btn_confirm" value="確認する">
                  <span class="error"></span>
                </div>
              </div>
            </form>
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
