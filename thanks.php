<?php
$name = htmlentities ($_POST['name']);
$tel = htmlentities($_POST['tel']);
$mail = htmlentities($_POST['mail']);
$place = htmlentities($_POST['place']);
$subject = htmlentities($_POST['subject']);
$content = htmlentities($_POST['content']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力確認画面</title>
    <link rel="stylesheet" href="./css/thanks.css">
</head>

<body>
    <h1>入力確認画面</h1>
    <h2>以下の内容でお間違えなければ次へ進むを押して下さい</h2>
    <p><?php echo $name; ?> </p>
    <p><?php echo $tel; ?></p>
    <p><?php echo $mail; ?></p>
    <p><?php echo $place; ?></p>
    <p><?php echo $subject; ?></p>
    <p><?php echo $content; ?></p>

    <form action="./thanks2.php" method="POST">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="tel" value="<?php echo $tel; ?>">
        <input type="hidden" name="mail" value="<?php echo $mail; ?>">
        <input type="hidden" name="place" value="<?php echo $place ?>">
        <input type="hidden" name="subject" value="<?php echo $subject; ?>">
        <input type="hidden" name="content" value="<?php echo $content; ?>">
        <input type="submit" value="次へ進む" class="submit">
    </form>
    <br>
    <form action="./check.php" method="POST">
        <input type="submit" value="戻る" class="back">
    </form>


</body>

</html>