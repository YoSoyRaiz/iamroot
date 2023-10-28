<?php 
/*
 * Template Name: Blog List
 * Description: A Page Template with a Page Builder design.
 */
$weasley_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php if(isset($weasley_redux_demo['blog_bg_light']['url']) && $weasley_redux_demo['blog_bg_light']['url'] != ''){?>
<section class="section dark-bg bg-theme logo-bg-light" data-img-url="<?php echo esc_url($weasley_redux_demo['blog_bg_light']['url']); ?>">
<?php }else{?>
<section class="section dark-bg bg-theme logo-bg-light">
<?php }?>	
	<div class="container">
		<div class="pt-70 section-heading text-center">
			<?php if(isset($weasley_redux_demo['blog_title'])){?>
				<h2><?php echo esc_attr($weasley_redux_demo['blog_title']);?></h2>
			<?php }else{?>
				<h2><?php echo esc_html__( 'Blog', 'weasley' );?></h2>
			<?php } ?>
		</div>
	</div>
</section>
<?php if(isset($weasley_redux_demo['blog_bg_dark']['url']) && $weasley_redux_demo['blog_bg_dark']['url'] != ''){?>
<section class="section dark-bg bg-theme logo-bg-dark" data-img-url="<?php echo esc_url($weasley_redux_demo['blog_bg_dark']['url']); ?>">
<?php }else{?>
<section class="section dark-bg bg-theme logo-bg-dark">
<?php }?>
	<div class="container">
		<div class="pt-70 section-heading text-center">
			<?php if(isset($weasley_redux_demo['blog_title'])){?>
				<h2><?php echo esc_attr($weasley_redux_demo['blog_title']);?></h2>
			<?php }else{?>
				<h2><?php echo esc_html__( 'Blog', 'weasley' );?></h2>
			<?php } ?>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row pt-60">
			<?php if ( is_active_sidebar( 'sidebar-1' ) ){?>
				<div class="col-lg-8">
			<?php }else{?>
				<div class="col-lg-12">
			<?php } ?>
					<?php
					$wp_query = new \WP_Query(array('post_type' => 'post','paged' => $paged,  'orderby' => 'ID', 'order' => 'DESC'));
					while($wp_query->have_posts()): $wp_query->the_post(); 
						$blog_content = get_post_meta(get_the_ID(),'_cmb_content_excerpt_1', true);
					?>
						<div class="single-blog-box pb-60">
							<?php if (has_post_thumbnail()) { ?>
								<div class="single-blog-img">
									<img class="lazy" src="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
								</div>
							<?php } ?>
							<div class="single-blog-content">
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<ul class="metadata">
									<li class="metadata_item">
										<?php echo get_the_author_posts_link(); ?>
									</li>
									<li class="metadata_item">
										<?php the_time(get_option( 'date_format' ));?>
									</li>
									<li class="metadata_item">
										<?php comments_number( esc_html__('0 Comments', 'weasley'), esc_html__('1 Comment', 'weasley'), esc_html__('% Comments', 'weasley') ); ?>
									</li>
								</ul>
								<?php if ( '' !== wp_specialchars_decode($blog_content)): ?>
									<?php print wp_specialchars_decode($blog_content); ?>
								<?php else:?>
									<?php if(isset($weasley_redux_demo['blog_excerpt'])){?>
									<?php echo esc_attr(weasley_excerpt_1($weasley_redux_demo['blog_excerpt'])); ?>
									<?php }else{?>
									<?php echo esc_attr(weasley_excerpt_1(40)); 
									}?>
								<?php endif ?>
							</div>
							<a href="<?php the_permalink(); ?>" class="col-md-12">
								<button class="button-1 mt-20 px-btn">
									<span>
										<?php if(isset($weasley_redux_demo['blog_btn_text'])){?>
											<?php echo esc_attr($weasley_redux_demo['blog_btn_text']);?>
										<?php }else{?>
											<?php echo esc_html__( 'Read more', 'weasley' );?>
										<?php } ?>
									</span>
								</button>
							</a>
						</div>
					<?php endwhile; ?>
					<div class="col-md-12">
						<?php weasley_pagination(); ?>
					</div>
				</div>
			<?php if ( is_active_sidebar( 'sidebar-1' ) ){?>
				<div class="col-lg-4 hv-sidebar">
					<?php get_sidebar(); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>