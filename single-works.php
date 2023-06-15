<?php
	get_header();
    $term = get_the_terms($post->ID,'work_type');
    //echo $term[0]->name;
    if ( function_exists( 'get_field' ) ) {
        function get_group_field( string $group, string $field, $post_id = 0 ) {
            $group_data = get_field( $group, $post_id );
            if ( is_array( $group_data ) && array_key_exists( $field, $group_data ) ) {
            return $group_data[ $field ];
            }
            return null;
        }
    }
?>
<main id="main">
    <section class="fv-up">
        <div class="in">
			<div class="title-up">
				<h1 class="en-b"><?php the_title(); ?></h1>
			</div>
			<div class="breadcrumb">
				<ul class="flex">
					<li><a href="<?php echo home_url(); ?>" class="en-r">TOP</a></li>
					<li class="current"><a class="en-r" href="<?php echo home_url(); ?>/works/">WORKS</a></li>
					<li class="current"><span class="en-r"><?php the_title(); ?></span></li>
				</ul>
			</div>
		</div>
    </section>
    <section class="type-project">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (has_post_thumbnail()): ?>
            <div class="thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <?php else: ?>
            <div class="thumbnail">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/u_p/x1/none.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/u_p/x2/none.png 2x" alt="">
            </div>
            <?php endif; ?>
            <div class="exp_sec flex">
                <?php if( get_field('project_group') ): ?>
                <div class="textarea">
                    <div class="project_name">
                        <h3>PROJECT</h3>
                        <p><?php the_title(); ?></p>
                    </div>
                    <?php if( get_field('project_group')['project_place'] ): ?>
                    <div class="project_place">
                        <h3>PLACE</h3>
                        <p><?php echo get_field('project_group')['project_place']; ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if( get_field('project_group')['project_date'] ): ?>
                    <div class="project_date">
                        <h3>DATE</h3>
                        <p><?php echo get_field('project_group')['project_date']; ?></p>
                    </div>
                    <?php endif; ?><?php echo get_group_field( '親グループフィールド名', '子グループフィールド名')['子グループの中のフィールド名']; ?>
                    <?php if( get_field('project_group')['project_overview'] ): ?>
                    <div class="project_overview">
                        <h3>OVERVIEW</h3>
                        <p><?php echo get_field('project_group')['project_overview']; ?></p>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <?php if( get_field('standard_layout') ): ?>
                <?php if( get_field('standard_layout')['img01'] ): ?>
                <div class="image01">
                    <img src="<?php echo get_field('standard_layout')['img01']; ?>" alt="">
                </div>
                <?php endif; ?>
            </div>

            <?php if( get_field('standard_layout')['img02'] ): ?>
            <div class="image image02">
                <img src="<?php echo get_field('standard_layout')['img02']; ?>" alt="">
            </div>
            <?php endif; ?>
            <?php if( get_field('standard_layout')['img03'] ): ?>
            <div class="image image03">
                <img src="<?php echo get_field('standard_layout')['img03']; ?>" alt="">
            </div>
            <?php endif; ?>
            <?php if( get_field('standard_layout')['left-img01'] ): ?>
            <div class="flex-imgs flex">
                <div class="left-img">
                    <img src="<?php echo get_field('standard_layout')['left-img01']; ?>" alt="">
                </div>
                <div class="right-img">
                    <img src="<?php echo get_field('standard_layout')['right-img01']; ?>" alt="">
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('standard_layout')['img04'] ): ?>
            <div class="image image04">
                <img src="<?php echo get_field('standard_layout')['img04']; ?>" alt="">
            </div>
            <?php endif; ?>
            <?php if( get_field('standard_layout')['img05'] ): ?>
            <div class="image image05">
                <img src="<?php echo get_field('standard_layout')['img05']; ?>" alt="">
            </div>
            <?php endif; ?>
            <?php if( get_field('standard_layout')['img06'] ): ?>
            <div class="image image06">
                <img src="<?php echo get_field('standard_layout')['img06']; ?>" alt="">
            </div>
            <?php endif; ?>
            <?php if( get_field('standard_layout')['left-img02'] ): ?>
            <div class="flex-imgs flex">
                <div class="left-img">
                    <img src="<?php echo get_field('standard_layout')['left-img02']; ?>" alt="">
                </div>
                <div class="right-img">
                    <img src="<?php echo get_field('standard_layout')['right-img02']; ?>" alt="">
                </div>
            </div>
            <?php endif; ?>

            <?php endif; ?>
            <?php endwhile; endif; ?>
    </section>
</main>

<?php
get_footer();