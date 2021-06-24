<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/contact.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!--font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
    <title>daigeblue contact</title>

</head>
<body>
    <section class="contact_form">
    <h1>お問い合わせ情報入力</h1>
    <form action="/check.php" method="POST">
        <div>
            ニックネーム<br>
            <input type="text" name="nickname" style="width:100px">
        </div>
        <div>
            メールアドレス<br>
            <input type="text" name="email" style="width:200px">
        </div>
        <div>
            お問い合わせ内容<br>
            <textarea name="content" cols="40" rows="5"></textarea>
        </div>
        <input type="submit" value="送信">
    </form>
    </section>
</body>
</html>