<?php
	get_header();
?>
<main id="main">
	<section class="fv-up">	
        <div class="in">
			<div class="title-up">
				<h1 class="en-b">CONTACT</h1>
				<span>お問い合わせ</span>
			</div>
			<div class="breadcrumb">
				<ul class="flex">
					<li><a href="<?php echo home_url(); ?>" class="en-r">TOP</a></li>
					<li class="current"><span class="en-r">CONTACT</span></li>
				</ul>
			</div>
		</div>
    </section>
	<section class="form_sec">
		<div id="formCheck" class="in">
			<?php echo do_shortcode('[contact-form-7 id="19" title="form_contact"]'); ?>
		</div>
	</section>
</main>
<?php
	get_footer();
?>