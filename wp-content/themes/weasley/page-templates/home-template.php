<?php 
/*
 * Template Name: Home Templates
 * Description: A Page Template with a Page Builder design.
 */
$weasley_redux_demo = get_option('redux_demo');
get_header('home'); ?>
	<main class="wrapper">
		<?php if (have_posts()){ ?>
			<?php while (have_posts()) : the_post()?>
				<?php the_content(); ?>
				<?php endwhile; ?>
			<?php }else {
			echo esc_html__( 'Weasley Home Templates', 'weasley' );
		}?>
		<div class="right-effects"></div>
		<div class="left-effects"></div>
	</main>
<?php get_footer(); ?>