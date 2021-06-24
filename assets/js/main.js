$(function () {
/* header footer scroll hidden */
    let start_position = 0,//初期位置０
        window_position,
        $window = $(window),
        $header = $('header'),
        $footer = $('footer');

    // スクロールイベントを設定
    $window.on('scroll', function () {
        // スクロール量の取得
        window_position = $(this).scrollTop();

        // スクロール量が初期位置より小さければ，
        // 上にスクロールしているのでヘッダーフッターを出現させる
        if (window_position <= start_position) {
            $header.css('top', '0');
            $footer.css('bottom', '0');
        } else {
            $header.css('top', '-70px');
            $footer.css('bottom', '-70px');
        }
        // 現在の位置を更新する
        start_position = window_position;
    });
    // 中途半端なところでロードされても良いようにスクロールイベントを発生させる
    $window.trigger('scroll');

//loding_logoの表示
        var h = $(window).height(); //画面の高さを取得

        $('#contents').css('display', 'none');//コンテンツを非表示に
        $('#loader-bg ,#loader').height(h).css('display', 'block');//ローディング画像を表示

    $(window).load(function () { //読み込み完了したら実行する
        $('#loader-bg').delay(900).fadeOut(800);//ローディングを隠す
        $('#loader').delay(600).fadeOut(300);
        $('#contens').css('display', 'block');//コンテンツを表示する
    });
    
        setTimeout('stopload()', 10000);//いつまでもローディング状態にならないように10秒で強制表示させる

    function stopload() { //強制表示の関数
        $('#contens').css('display', 'block');
        $('#loader-bg').delay(900).fadeOut(800);
        $('#loader').delay(600).fadeOut(300);
    }


    //ページのコンテンツをスクロール可視範囲に入ったら表示させる
    $(function () {
        $(window).scroll(function () {
            $('.fadein').each(function () {
                var position = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > position - windowHeight + 100) {
                    $(this).addClass('active');
                }
            });
        });
    });
});