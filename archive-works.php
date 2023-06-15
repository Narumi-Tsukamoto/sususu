<?php
	get_header();
?>
<main id="main">
    <section class="fv-up">
        <div class="in">
			<div class="title-up">
				<h1 class="en-b">WORKS</h1>
				<span>施工事例・実績</span>
			</div>
			<div class="breadcrumb">
				<ul class="flex">
					<li><a href="<?php echo home_url(); ?>" class="en-r">TOP</a></li>
					<li class="current"><span class="en-r">WORKS</span></li>
				</ul>
			</div>
		</div>
    </section>
	<section class="categories">
		<div class="in">
			<?php
				$terms = get_terms('work_type');
			?>
			<ul class="flex">
				<li class="current halo"><span class="cat_tab en-r">ALL</span></li>
			<?php foreach( $terms as $term ) : ?>
				<li class="halo">
					<a class="cat_tab en-r" href="<?php echo get_term_link( $term->term_id ); ?>"><?php echo $term->name; ?></a>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
	</section>
	<section class="projects">
		<div class="in">
			<ul class="prj_cont flex">
				<?php
					$args = array(
						'post_type' => 'works',
						'posts_per_page'   => -1,
					);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ):
						while ( $the_query->have_posts() ):
						$the_query->the_post();
				?>		
				<li class="prj_item">
					<a href="<?php the_permalink(); ?>">
						<?php if (has_post_thumbnail()): ?>
						<div class="imagearea">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php else: ?>
						<div class="imagearea">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/u_p/x1/none.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/u_p/x2/none.png 2x" alt="">
						</div>
						<?php endif; ?>
						<div class="textarea">
							<div class="metaflex flex">
								<div class="date"><?php the_time('Y.m.d'); ?></div>
								<?php
									$terms = get_the_terms($post->ID, 'project_cat');
									if ($terms) :
										foreach ($terms as $term) {
											echo '<div class="cat"><span class="en-r">' . $term->name . '</span></div>';
										}
									endif;
								?>
							</div>
							<h2 class="item_ttl"><?php the_title(); ?></h2>
						</div>
					</a>
				</li>
				<?php
					endwhile; 
					endif;
					wp_reset_postdata();
				?>
			</ul>
		</div>
	</section>
	
</main>

<?php
get_footer();