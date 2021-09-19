<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="./css/check.css">
</head>

<body>
  <h1>お問い合わせフォーム</h1>
  <form action="./thanks.php" method="POST">
    <div class="name">
      <br> 名前（必須）<br>
      <input type="text" name="name" class="name1">
    </div>
    <br>
    <div class="tel">
      電話番号（必須）<br>
      <input type="text" name="tel" class="tel1">
    </div>
    <br>
    <div class="mail">
      メールアドレス<br>
      <input type="text" name="mail" class="mail1">
    </div>
    <br>
    <div class="place">中部の行きたいエリア・場所 <br>
      <input type="text" name="place" class="place1">
    </div>

    <br>
    <div class="subject">お問い合わせ件名<br>
      <input type="text" name="subject" class="subject1">
    </div>
    <br>
    <div class="content">
      お問い合わせ内容<br>
      <textarea name="content" cols="50" rows="5" class="content1"></textarea>
    </div>
    <br>
    <input type="submit" value="送信" class="submit">

  </form>
  <br>

  <a href="./index.php">トップページ</a>

</body>

</html>