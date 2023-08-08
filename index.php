<!-- docker-compose up -d -->
<!-- 乱数の条件分岐 -->
<?php
$n = mt_rand(1,3);
if($n===1){
  $message='UI/UXデザイナー見習いです';
}elseif($n===2){
  $message='プログラミング勉強中です';
}else{
  $message='PHPちょっとわかります';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>太郎のポートフォリオサイト</title>
  <link rel="icon" href="https://raw.githubusercontent.com/takomono/phplearning.github.io/main/favicon.ico">
  <meta name="description" content="太郎のポートフォリオサイトです。">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <div class="container">
      <div class="icon">
        <img src="https://github.com/takomono/phplearning.github.io/blob/main/taro.png?raw=true" width="120" height="120" alt="太郎のアイコンです">
      </div>
      <div class="info">
        <h1>山田太郎</h1>
        <!-- 乱数の条件分岐の$message -->
        <p><?= $message; ?></p>
        <ul>
          <li>
            <a href="https://dotinstall.com" target="_blank">
              <img src="img/blog.png" width="20" height="20" alt="ブログサイトへのリンク画像です">
            </a>
          </li>
          <li>
            <a href="https://dotinstall.com" target="_blank">
              <img src="https://github.com/takomono/phplearning.github.io/blob/main/photos.png?raw=true" width="20" height="20" alt="写真サイトへのリンク画像です">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <section class="works">
    <h1>WORKS</h1>
    <section>
      <img src="https://github.com/takomono/phplearning.github.io/blob/main/work1.png?raw=true" width="400" height="260" alt="勇者ゲームの紹介画像">
      <h1>勇者ゲーム</h1>
      <p>楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。</p>
    </section>
  
    <section>
      <img src="https://github.com/takomono/phplearning.github.io/blob/main/work2.png?raw=true" width="400" height="260" alt="宝探しゲームの紹介画像">
      <h1>宝探しゲーム</h1>
      <p>楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。</p>
    </section>
  
    <section>
      <img src="img/work3.png" width="400" height="260" alt="神経衰弱の紹介画像">
      <h1>神経衰弱</h1>
      <p>楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。楽しいアプリです。</p>
    </section>

  </section>

  <footer>
    <p>(c) dotinstall.com</p>
  </footer>
</body>
</html>
  
