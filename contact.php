<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
</head>
<body>
    <h1>お問い合わせ情報入力</h1>
    <form action="check.php" method="POST">
    <!--form:action 送信された時に、どこを送信先にするのか指定する-->
    <!--form:method データの受け渡し方法の指定
    post(個人情報、サーバデータの更新、大容量データに対応) or 
    get(url形式、送信可能なデータに制限あり)-->
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
</body>
</html>