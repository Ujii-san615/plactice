<?php
//値を変数に格納する。スーパーグローバル変数のまま表示するのはあんまり良くないかららしい
//入力された値を安全にする関数：htmlspecialchars()

$nickname =htmlspecialchars($_POST['nickname']); //スーパーグローバル変数、フォームタブ内の要素だけ
$email = htmlspecialchars($_POST['email']);
$content = htmlspecialchars($_POST['content']);

//ちゃんと文字が入力されているかチェック
//ニックネーム
if ($nickname =='') {
    $nickname_result ='ニックネームが入力されていません';
} else {
    $nickname_result ='ようこそ、'. $nickname .'様';
}
//メールアドレス
if ($email == '') {
    $email_result ='メールアドレスが入力されていません';
} else {
    $email_result = 'メールアドレス：'. $email;
}
//お問い合わせ内容
if ($content == '') {
    $content_result ='お問い合わせ内容が入力されていません';
} else {
    $content_result ='お問い合わせ内容：' .$content;
}



?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/wiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/contact.css">
    <!--plagin css-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!--font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
    
    <title>daigeblue check</title>
</head>

<body>
    <h1>入力内容確認</h1>
    <p><?php echo $nickname_result ?></p>
    <p><?php echo $email_result ?></p>
    <p><?php echo $content_result ?></p>

<!--次のページにデータを送る-->
    <form action="thanks.php" method="POST">
    
        <input type="hidden" name="nickname" value="<?=$nickname?>">
        <input type="hidden" name="email" value="<?=$email?>">
        <input type="hidden" name="content" value="<?=$content?>">
        <input type="button" value = "戻る" onclick="history.back()">

        <?php if($nickname != '' && $email != '' && $content != ''): ?>
        <input type="submit" value="OK">
        <?php endif; ?>
    
    </form>
</body>
</html>