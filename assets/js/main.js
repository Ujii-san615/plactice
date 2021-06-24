$(function () {
    /* youtube player */

    // $("#bgndVideo").YTPlayer();
    // $(document).ready(function () {
    //     $("#bgVideo").YTPlayer();

    /* header scroll hidden */
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
    $(function () {
        var h = $(window).height(); //画面の高さを取得

        $('#contents').css('display', 'none');//コンテンツを非表示に
        $('#loader-bg ,#loader').height(h).css('display', 'block');//ローディング画像を表示
    });

    $(window).load(function () { //読み込み完了したら実行する
        $('#loader-bg').delay(900).fadeOut(800);//ローディングを隠す
        $('#loader').delay(600).fadeOut(300);
        $('#contens').css('display', 'block');//コンテンツを表示する
    });
    $(function () {
        setTimeout('stopload()', 10000);　//いつまでもローディング状態にならないように10秒で強制表示させる

    });
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




    let mySwiper = new Swiper('.swiper-container', {
        navigation: {  //ナビゲーションのオプション（矢印ボタンの要素を指定）
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
    });
    mySwiper.on('slideChange', function () {
        console.log('現在のスライド番号： ' + (mySwiper.realIndex + 1));
      });
      
    var mySwiper = new Swiper ('.swiper-container', {
        // オプションパラメータ(一部のみ抜粋)
        loop: true, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
        speed: 600, // スライドが切り替わるトランジション時間(ミリ秒)。
        slidesPerView: 4, // 何枚のスライドを表示するか
        spaceBetween: 10, // スライド間の余白サイズ(ピクセル)
        direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
        effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
     
        // スライダーの自動再生
        // autoplay: true 　のみなら既定値での自動再生
        autoplay: {
          delay: 3000, // スライドが切り替わるまでの表示時間(ミリ秒)
          stopOnLast: false, // 最後のスライドまで表示されたら自動再生を中止するか
          disableOnInteraction: true // ユーザーのスワイプ操作を検出したら自動再生を中止するか
        },
     
        // レスポンシブ化条件
        breakpoints: {
          // 980ピクセル幅以下になったら
          980: {
            slidesPerView: 3,
            spaceBetween: 30
          },
          // 640ピクセル幅以下になったら
          640: {
            slidesPerView: 2,
            spaceBetween: 20
          }
        },
     
        // ページネーションを表示する場合
        pagination: {
          el: '.swiper-pagination',　 // ページネーションを表示するセレクタ
        },
     
        // 前後スライドへのナビゲーションを表示する場合
        navigation: {
          nextEl: '.swiper-button-next', // 次のスライドボタンのセレクタ
          prevEl: '.swiper-button-prev', // 前のスライドボタンのセレクタ
        },
     
        // スクロールバーを表示する場合
        scrollbar: {
          el: '.swiper-scrollbar', // スクロールバーを表示するセレクタ
        }
      });
});