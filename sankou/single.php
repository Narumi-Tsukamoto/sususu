<?php
get_header();
?>
<div id="loco_wrap" data-scroll-container>
<main>
<section class="page-hv">
    <div class="in fv_cont flex">
        <h1 class="u_p_ttl halo"><span>お知らせ</span>NEWS</h1>
		<p class="copy din">COPYRIGHT 2023 WAVE INC. ALL RIGHT RESERVED.</p>
    </div>
</section>
<div class="bg_w">
	<div class="breadcrumb">
		<div class="in">
			<a href="<?php echo home_url(); ?>" class="halo">TOP</a>
			<span class="halo"><a href="<?php echo home_url(); ?>/news/" class="halo">NEWS</a></span>
			<span>
				<?php
					if(mb_strlen($post->post_title, 'UTF-8')>10){
						$title= mb_substr($post->post_title, 0, 10, 'UTF-8');
						echo $title.'…';
					}else{
						echo $post->post_title;
					}
				?>
			</span>
		</div>
	</div>
	<section class="single_cont">
		<div class="in">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php
				$category = get_the_category();
				$cat = $category[0];
				
				$cat_name = $cat->name;
				$cat_id = $cat->cat_ID;
				$cat_slug = $cat->slug;
			?>
			<div class="flex">
				<p class="a_date din"><?php the_date('Y/m/d'); ?></p>
				<p class="a_cat halo"><a href="<?php echo esc_url(get_category_link($cat_id)); ?>"><?php echo $cat_name; ?></a></p>
			</div>
			<h1 class="a_ttl"><?php the_title(); ?></h1>

			<?php if(has_post_thumbnail()): ?>
			<div class="a_thumbnail">
				<img src="<?php the_post_thumbnail_url('large'); ?>">
			</div>
			<?php else: ?>
			<div class="a_thumbnail">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/x1/none_t.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/common/x2/none_t.jpg 2x" alt="">
			</div>
			<?php endif; ?>

			<div class="a_cont">
				<?php echo the_content(); ?>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</section>
</div>
	</main>

<?php
get_footer();
