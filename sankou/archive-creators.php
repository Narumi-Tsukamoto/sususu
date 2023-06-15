<?php
get_header();
?>
<main>
<section class="page-hv">
    <div class="in fv_cont flex">
        <h1 class="u_p_ttl halo"><span>クリエイター紹介</span>CREATORS</h1>
		<p class="copy din">COPYRIGHT 2023 WAVE INC. ALL RIGHT RESERVED.</p>
    </div>
</section>
<div class="bg_w">
	<div class="breadcrumb">
		<div class="in">
			<a href="<?php echo home_url(); ?>" class="halo">TOP</a>
			<span class="halo">CREATORS</span>
		</div>
	</div>
	<div class="cats">
		<div class="in">
			<?php
				$terms = get_terms('cr_type');
			?>
			<ul class="flex">
				<li class="halo">category</li>
				<li class="current halo"><span class="cat_tab">ALL</span></li>
			<?php foreach( $terms as $term ) : ?>
				<li class="halo">
					<a class="cat_tab" href="<?php echo get_term_link( $term->term_id ); ?>"><?php echo $term->name; ?></a>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<section class="news_cont">
		<div class="in">
			<div class="creators flex">
				<?php
					$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
					$args = array(
						'post_type' => 'creators',
						'order' => 'ASC',
						'paged' => $paged,
						'posts_per_page'   => 12,
					);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ):
						$count=1;
						while ( $the_query->have_posts() ):
						$the_query->the_post();
				?>
					<div id="modal<?php echo $count; ?>" class="modal js-modal">
						<div class="modal__bg js-modal-close"></div>
						<div class="modal__content">
							<div class="profile flex">
								<div class="imagearea">
								<?php if( get_field('cr_img') ): ?>
									<img src="<?php the_field('cr_img'); ?>" alt="">
								<?php else: ?>	
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/x1/none.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/x2/none.jpg 2x" alt="">
								<?php endif; ?>
								</div>
								<div class="textarea">
									<h2 class="name"><?php the_title(); ?></h2>
									<div class="snslink flex">
									<?php if( get_field('cr_sns') ): ?>
										<?php if( get_field('cr_sns')['cr_sns_tw'] ): ?>
											<a href="<?php echo get_field('cr_sns')['cr_sns_tw']; ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x1/twitter.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x2/twitter.png 2x" alt=""></a>
										<?php endif; ?>
										<?php if( get_field('cr_sns')['cr_sns_tw2'] ): ?>
											<a href="<?php echo get_field('cr_sns')['cr_sns_tw2']; ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x1/twitter.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x2/twitter.png 2x" alt=""></a>
										<?php endif; ?>
										<?php if( get_field('cr_sns')['cr_sns_ig'] ): ?>
											<a href="<?php echo get_field('cr_sns')['cr_sns_ig']; ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x1/instagram.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x2/instagram.png 2x" alt=""></a>
										<?php endif; ?>
										<?php if( get_field('cr_sns')['cr_sns_ig2'] ): ?>
											<a href="<?php echo get_field('cr_sns')['cr_sns_ig2']; ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x1/instagram.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x2/instagram.png 2x" alt=""></a>
										<?php endif; ?>
										<?php if( get_field('cr_sns')['cr_sns_tt'] ): ?>
											<a href="<?php echo get_field('cr_sns')['cr_sns_tt']; ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x1/tiktok.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x2/tiktok.png 2x" alt=""></a>
										<?php endif; ?>
										<?php if( get_field('cr_sns')['cr_sns_tt2'] ): ?>
											<a href="<?php echo get_field('cr_sns')['cr_sns_tt2']; ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x1/tiktok.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x2/tiktok.png 2x" alt=""></a>
										<?php endif; ?>
										<?php if( get_field('cr_sns')['cr_sns_yt'] ): ?>
											<a href="<?php echo get_field('cr_sns')['cr_sns_yt']; ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x1/youtube.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x2/youtube.png 2x" alt=""></a>
										<?php endif; ?>
										<?php if( get_field('cr_sns')['cr_sns_yt2'] ): ?>
											<a href="<?php echo get_field('cr_sns')['cr_sns_yt2']; ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x1/youtube.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/u_p/x2/youtube.png 2x" alt=""></a>
										<?php endif; ?>
									<?php endif; ?>
									</div>
									<div class="detail">
									<?php if( get_field('cr_txt') ): ?>
										<?php if( get_field('cr_txt')['cr_txt_h'] ): ?>
											<h3 class="headline"><?php echo get_field('cr_txt')['cr_txt_h']; ?></h3>
										<?php endif; ?>
										<?php if( get_field('cr_txt')['cr_txt_p'] ): ?>
											<p class="text"><?php echo get_field('cr_txt')['cr_txt_p']; ?></p>
										<?php endif; ?>
									<?php endif; ?>
									</div>
									<div class="creator_type flex">
									<?php
									$terms = get_the_terms($post->ID, 'cr_type');
									if ($terms) :
										foreach ($terms as $term) {
											echo '<span class="halo">' . $term->name . '</span>';
										}
									endif;
									?>
									</div>
								</div>
							</div>
							<a class="js-modal-close" href=""></a>
						</div>
					</div>
					<a class="js-modal-open creator_btn" href="" data-target="modal<?php echo $count; ?>">
						<div class="imagearea">
						<?php if( get_field('cr_img') ): ?>
							<div class="hover-glitch col-gl" style="background-image: url(<?php the_field('cr_img'); ?>);">
								<div class="channel r"></div>
								<div class="channel g"></div>
								<div class="channel b"></div>
							</div>
						<?php else: ?>	
							<div class="hover-glitch col-gl" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/x2/none.jpg);">
								<div class="channel r"></div>
								<div class="channel g"></div>
								<div class="channel b"></div>
							</div>
						<?php endif; ?>
						</div>
						<div class="textarea">
							<h2 class="name"><?php the_title(); ?></h2>
						</div>
					</a>
				<?php
					$count++;
					endwhile; 
					endif;
					wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
</div>
</main>

<?php
get_footer();
