<?php if ( !is_page('contact') ) : ?>
	<section class="contact">
        <a href="<?php echo home_url(); ?>/contact/" class="contact-btn">
            <ul class="contact-slider flex" dir="rtl">
                <li class="contact-btn_cont"><span class="en-r">CONTACT</span></li>
                <li class="contact-btn_cont"><span class="en-r">CONTACT</span></li>
                <li class="contact-btn_cont"><span class="en-r">CONTACT</span></li>
                <li class="contact-btn_cont"><span class="en-r">CONTACT</span></li>
                <li class="contact-btn_cont"><span class="en-r">CONTACT</span></li>
                <li class="contact-btn_cont"><span class="en-r">CONTACT</span></li>
            </ul>
        </a>
    </section>
<?php endif; ?>
	<footer id="colophon" class="site-footer">
		<div class="in">
			<div class="nav-ft">
				<ul class="flex">
					<li><a href="<?php echo home_url(); ?>/about/" class="en-r">ABOUT</a></li>
					<li><a href="<?php echo home_url(); ?>/works/" class="en-r">WORKS</a></li>
					<li><a href="<?php echo home_url(); ?>/contact/" class="en-r">CONTACT</a></li>
				</ul>
			</div>
			<p class="copyright">© 2023. sususu All Rights Reserved.</p>
		</div>
	</footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
