<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$place = $_POST['place'];
$subject = $_POST['subject'];
$content = $_POST['content'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ詳細</title>
    <link rel="stylesheet" href="./thanks2.css">
</head>

<body>
    <br>
        <a href="./index.php">トップページ</a>
    <h1>お問い合わせ完了</h1>
    <div class="watta">
    <img src="./img/onna.jpeg" alt="恩納村" class=>
    <br>
    <br>
    <br>
    <img src="./img/kingtacos.jpeg" alt="キンタコ" >
    <br>
    <br>
    <br>
    <img src="./img/eguti.jpeg" alt="栄口青年会" >
    </div>
    <br>
    <h2>お問い合わせありがとうございます</h2>
    <span>このたびは、お問合せいただき、誠にありがとうございました。<br>
        お送りいただきました内容を確認の上、折り返しご連絡させていただきます。
        <br> お急ぎの場合はお電話にてご連絡くださいませ。<br>

        TEL:090-****-**** <br>

        また、ご記入いただきましたメールアドレスへ、自動返信の確認メールを送付しています。
        自動返信メールが届かない場合、入力いただいたメールアドレスに誤りがあった可能性がございます。
        <br> メールアドレスをご確認の上、もう一度フォームよりお問合せ頂きますようお願い申し上げます。
    </span>
    <h3>お問い合わせ詳細</h3>
    <p><?php echo $name; ?> </p>
    <p><?php echo $tel; ?></p>
    <p><?php echo $mail; ?></p>
    <p><?php echo $place; ?></p>
    <p><?php echo $subject; ?></p>
    <p><?php echo $content; ?></p>
    <br>
    <br>
</body>

</html>