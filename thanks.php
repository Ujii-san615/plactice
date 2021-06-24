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
    <link rel="stylesheet" href="./assets/css/common.css">
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
    <div id="wrap">
        <header>
            <!-- header -->
            <div class="header-left">
                <h1>Daige Blue</h1>
            </div>
            <div class="header-right">
                <nav>
                    <ul class="global-nav">
                        <li><a href="#about">About</a></li>
                        <li><a href="/room.html">Room</a></li>
                        <li><a href="/room.html">Service</a></li>
                        <li><a href="/daigeblue/contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header><!-- header -->
        <main>
            <section class="contact_form">
                <div class="container_form">
                    <h1>お問い合わせありがとうございました！</h1>
                    <div>
                        <p>お問い合わせのご返信にはお時間がかかる場合がございます。</br>
                            急ぎのご連絡を必要とする場合は、お電話にてご連絡ください。</p>
                    </div>
                    <input type="submit" class="buttom" whidth="100%" value="ホームへ戻る">
                </div>
            </section>
        </main>


    </div>
    <!--page footer -->
    <section class="footer">
        <div class="inner">
            <p class="copyright"><small>&copy; 2021 Daige Blue</small>
            </p>
        </div>
    </section>
    </div>
    </main>
    <!--nav footer -->
    <footer>
        <ul class="nav-icoList">
            <li class="home-ico"><a href="#"><i class="fas fa-home fa-2x my-icoColor"></i></a></li>
            <li class="resave-ico"><a
                    href="https://travel.yahoo.co.jp/dhotel/shisetsu/HT10078406/IKYU/11079424/10196820/"
                    target="_blank"><i class="far fa-calendar-check fa-2x my-icoColor"></i></a></li>
            <li class="tel-ico"><a href="tel:000-1234-5678"><i class="fas fa-mobile-alt fa-2x my-icoColor"></i></a></li>
            <li class="mail-ico"><a href="./contact.php"><i class="far fa-envelope fa-2x my-icoColor"></i></a></li>
        </ul>
    </footer>
    <!--loding after -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK"
        crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</body>

</html>