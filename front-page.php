<?php
	get_header();
?>
<main id="main">
    <section class="fv">
        <div id="canvas-container"></div>
    </section>
    <section class="about">
        <div class="in">
            <div class="layout flex">
                <div class="ttl_area">
                    <div class="about-txt"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/svg/about_ttl.svg" alt="ABOUT"></div>
                </div>
                <div class="cont">
                    <p class="main_txt_en en-r">Design <br class="sp">Philosophysd</p>
                    <p class="main_txt_jp">ゼロから創るデザイン</p>
                    <p class="sub_txt">この考えを軸にこの世にまだ無い新しいカタチを提供します。<br>設計・建築デザインは勿論、ロゴデザインやグラフィックデザイン、動画編集などあらゆる分野で対応可能です。<br>予算や時間を最大限に考慮し、依頼主様の納得が得られるまでがsu su su designの全体図であると考えます。</p>
                    <div class="more_container">
                        <a href="<?php echo home_url(); ?>/about/"><span>VIEW ALL</span><span class="arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/svg/btn_arrow.svg" alt=""></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="works">
        <div class="ttl_area">
            <ul class="works-ttl flex">
                <li class="works-ttl_cont"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/svg/works_ttl.svg" alt="works"></li>
                <li class="works-ttl_cont"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/svg/works_ttl_b.svg" alt="works"></li>
                <li class="works-ttl_cont"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/svg/works_ttl.svg" alt="works"></li>
                <li class="works-ttl_cont"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/svg/works_ttl_b.svg" alt="works"></li>
                <li class="works-ttl_cont"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/svg/works_ttl.svg" alt="works"></li>
                <li class="works-ttl_cont"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/svg/works_ttl_b.svg" alt="works"></li>
            </ul>
        </div>
        <div class="slide_area flex">
            <div id="works-sub-slider01" class="follow work-slide">
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/05.jpeg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/01.jpeg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/02.jpeg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/03.jpeg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/04.jpeg" alt=""></a>
            </div>
            <div id="works-main-slider" class="work-slide">
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/01.jpeg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/02.jpeg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/03.jpeg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/04.jpeg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/05.jpeg" alt=""></a>
            </div>
            <div id="works-sub-slider02" class="follow work-slide">
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/02.jpeg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/03.jpeg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/04.jpeg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/05.jpeg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/slider/01.jpeg" alt=""></a>
            </div>
            <div id="works-txt-slider" class="follow work-slide-text">
                <a href=""><div class="category">BUILDING</div><div class="title">タイトルタイトルタイトルタイトルタイトルタイトル</div><div class="date">2023.05.01</div></a>
                <a href=""><div class="category">BUILDING2</div><div class="title">タイトルタイトルタイトルタイトルタイトルタイトル</div><div class="date">2023.05.01</div></a>
                <a href=""><div class="category">BUILDING3</div><div class="title">タイトルタイトルタイトルタイトルタイトルタイトル</div><div class="date">2023.05.01</div></a>
                <a href=""><div class="category">BUILDING4</div><div class="title">タイトルタイトルタイトルタイトルタイトルタイトル</div><div class="date">2023.05.01</div></a>
                <a href=""><div class="category">BUILDING5</div><div class="title">タイトルタイトルタイトルタイトルタイトルタイトル</div><div class="date">2023.05.01</div></a>
            </div>
        </div>
        <div class="more_container">
            <a href="<?php echo home_url(); ?>/works/"><span>VIEW ALL</span><span class="arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/svg/btn_arrow_w.svg" alt=""></span></a>
        </div>
    </section>
</main>

<?php
get_footer();