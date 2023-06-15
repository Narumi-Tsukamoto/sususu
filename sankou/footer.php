<?php if ( !is_page('inf15') && !is_page('sended') && !is_page('lplp') && !is_page('wave-maker') ) : ?>
<footer>
	<div class="in">
		<div class="upper_contaner flex">
			<div class="leftarea">
				<h2 class="halo">MENU</h2>
				<p class="copyright din">COPYRIGHT 2023 WAVE INC. ALL RIGHT RESERVED.</p>
			</div>
			<nav class="flex">
				<ul class="menu-en">
					<li><a href="<?php echo home_url(); ?>/company/" data-index="1" class="halo" >COMPANY</a></li>
					<li><a href="<?php echo home_url(); ?>/service/" data-index="2" class="halo">SERVICE</a></li>
					<li><a href="<?php echo home_url(); ?>/creators/" data-index="3" class="halo">CREATORS</a></li>
					<li><a href="<?php echo home_url(); ?>/recruit/" data-index="4" class="halo">RECRUIT</a></li>
					<li><a href="<?php echo home_url(); ?>/news/" data-index="5" class="halo">NEWS</a></li>
					<li><a href="<?php echo home_url(); ?>//rep_column//" data-index="6" class="halo">COLUMN</a></li>
					<li><a href="<?php echo home_url(); ?>/contact/" data-index="7" class="halo">CONTACT</a></li>
					<li><a href="<?php echo home_url(); ?>/privacy-policy/" data-index="8" class="halo">PRIVACY POLICY</a></li>
					<li><a href="<?php echo home_url(); ?>/terms/" data-index="9" class="halo">TERMS</a></li>
				</ul>
				<ul class="menu-jp">
					<li><a href="<?php echo home_url(); ?>/company/" data-index="1">会社概要</a></li>
					<li><a href="<?php echo home_url(); ?>/service/" data-index="2">事業内容</a></li>
					<li><a href="<?php echo home_url(); ?>/creators/" data-index="3">クリエイター</a></li>
					<li><a href="<?php echo home_url(); ?>/recruit/" data-index="4">採用情報</a></li>
					<li><a href="<?php echo home_url(); ?>/news/" data-index="5">お知らせ</a></li>
					<li><a href="<?php echo home_url(); ?>/rep_column/" data-index="6">代表コラム</a></li>
					<li><a href="<?php echo home_url(); ?>/contact/" data-index="7">お問い合わせ</a></li>
					<li><a href="<?php echo home_url(); ?>/privacy-policy/" data-index="8">プライバシーポリシー</a></li>
					<li><a href="<?php echo home_url(); ?>/terms/" data-index="9">利用規約</a></li>
				</ul>
			</nav>
		</div>
	</div>
</footer>
</div><!-- #luxy -->
<?php endif; ?>
<?php if ( !is_page('recruit') && !is_404() && !is_page('inf15') && !is_page('sended') && !is_page('lplp') && !is_page('wave-maker') ) : ?>
<div class="fixed_bg">
    <div class="glitch" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/top/x2/fixed_bg.jpg);">
        <div class="channel r"></div>
        <div class="channel g"></div>
        <div class="channel b"></div>
    </div>
</div>
<?php elseif ( is_page('recruit') || is_404() ) : ?>
<div class="fixed_bg">
    <div class="glitch" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x2/under_construction.jpg);">
        <div class="channel r"></div>
        <div class="channel g"></div>
        <div class="channel b"></div>
    </div>
</div>
<?php endif; ?>
</div><!-- #wrapper -->
	<?php wp_footer(); ?>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<?php if ( !is_page('recruit') && !is_404() && !is_page('inf15') && !is_page('sended') && !is_page('lplp') && !is_page('wave-maker') ) : ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/locomotive-scroll.min.js"></script>
	<?php endif; ?>
	<?php if ( !is_page('inf15') || !is_page('sended') || !is_page('wave-maker') ) : ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/common.js"></script>
	<?php endif; ?>
	<?php if ( is_front_page() ||  is_home() ) : ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/top.js"></script>
	<?php elseif ( is_page('company') ) : ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/company.js"></script>
	<?php elseif ( is_page('contact') ) : ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.validationEngine.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/languages/jquery.validationEngine-ja.js" charset="UTF-8"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/contact.js"></script>
	<?php elseif ( is_page('inf15') || is_page('sended') ) : ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/inf.js"></script>
	<?php elseif ( is_page('lplp') ) : ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lplp.js"></script>
	<?php elseif ( is_page('wave-maker') ) : ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.inview.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wm.js"></script>
	<?php elseif ( is_tax() || is_archive('creators') ) : ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modal.js"></script>
	<?php endif; ?>
</body>
</html>