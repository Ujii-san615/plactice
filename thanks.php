<?php
$nickname =htmlspecialchars($_POST['nickname']); 
$email = htmlspecialchars($_POST['email']);
$content = htmlspecialchars($_POST['content']);

//データベースに接続する //コピペでOK
$dsn = 'mysql:dbname=phpkiso;host=localhost';//データベースネーム
$user = 'root';
$password = 'root';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

//SQL文を実行する(INSERT文を実行)
// $sql =  'INSERT INTO `survey`(`nickname`, `email`, `content`) VALUES ("'.$nickname.'","'.$email.'","'.$content.'")';
$sql =  'INSERT INTO `survey`(`nickname`, `email`, `content`) VALUES (?,?,?)';
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
    <title>送信完了</title>
</head>
<body>
    <h1>お問い合わせありがとうございました</h1>
        <div>
            <h3>お問い合わせ詳細内容</h3>
            <p>ニックネーム：<?=$nickname?></p>
            <p>メールアドレス：<?=$email?></p>
            <p>お問い合わせ内容：<?=$content?></p>
        </div>
</body>
</html>