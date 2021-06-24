<?php
$nickname =htmlspecialchars($_POST['nickname']); 
$email = htmlspecialchars($_POST['email']);
$content = htmlspecialchars($_POST['content']);

//データベースに接続する //コピペでOK
$dsn = 'mysql:dbname=daigeblue;host=localhost';//データベースネーム
$user = 'root';
$password = 'root';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

//SQL文を実行する(INSERT文を実行)
// $sql =  'INSERT INTO `contact`(`nickname`, `email`, `content`) VALUES ("'.$nickname.'","'.$email.'","'.$content.'")';
$sql =  'INSERT INTO `contact`(`nickname`, `email`, `content`) VALUES (?,?,?)';
$data = array($nickname,$email,$content);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);//実行
// var_dump($stmt->errorInfo());

//データベースを切断する
$dbh = null; //dbh：データベースハンドル

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
    
    <title>transmit　complete</title>
</head>
<body>
    <h1>お問い合わせありがとうございました！</h1>
        <div>
            <h3>お問い合わせ詳細内容</h3>
            <p>ニックネーム：<?=$nickname?></p>
            <p>メールアドレス：<?=$email?></p>
            <p>お問い合わせ内容：<?=$content?></p>
        </div>
</body>
</html>