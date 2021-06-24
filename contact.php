<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/common.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/contact.css">

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
        <h1>お問い合わせ情報入力</h1>
        <form action="./check.php" method="POST">

    <table class="form-table">
    <tbody>
    <tr>
        <th>氏名（カナ）</th>
        <td>
            <input class="box" type="text" name="nickname" style="width:100%"placeholder="例)ヤマダ タロウ">
        </td>
    </tr>
    <tr>
        <th>メールアドレス</th>
        <td>
            <input class="box" type="text" name="email" style="width:100%"placeholder="例)daige_blue@abcdefg.com">
        </td>
    </tr>
    <!-- <tr>
        <th>電話番号</th>
        <td>
            <input class="box" type="text" name="email" style="width:200px"placeholder="メールアドレス">
        </td>
    </tr> -->
    <tr>
        <th>お問い合わせ内容</th>
        <td>
            <textarea class="box" name="content" cols="40" rows="5" placeholder="お問い合わせ内容を入力してください"></textarea>
        </td>
    </tr>

    </tbody>

    </table>

    <input class="buttom" whidth="100%" type="submit" value="送信">

    </form>
    </div>
    </section>
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
    </div>
    <!--loding after -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK"
        crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>