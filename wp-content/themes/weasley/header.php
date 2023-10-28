<?php $weasley_redux_demo = get_option('redux_demo'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="white-theme">
<head>
	<meta charset="utf-8">
	<meta name="author" content="themepaa">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="Weasley - Portfolio Template">
	<meta name="description" content="Weasley - Portfolio Template">
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {?>
	<link rel="icon" href="<?php if(isset($weasley_redux_demo['favicon']['url'])){?><?php echo esc_url($weasley_redux_demo['favicon']['url']); ?><?php }?>">
	<?php }?> 
	<?php wp_head(); ?>
</head>
<body <?php body_class(' dark-bg '); ?>>
	<div id="loading">
		<div class="load-circle"><span class="one"></span></div>
	</div>
	<header class="main-header">
		<nav class="navbar header-nav header-white header-transparent navbar-expand-lg one-page-nav">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
					<?php if (isset($weasley_redux_demo['logo_light']['url']) && $weasley_redux_demo['logo_light']['url'] != '') {?>
						<img class="logo-light" src="<?php echo esc_url($weasley_redux_demo['logo_light']['url']); ?>" title="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
					<?php } else{ ?>
						<img class="logo-light" src="<?php echo get_template_directory_uri();?>/assets/img/logo-light.png" title="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
					<?php } ?>
					<?php if (isset($weasley_redux_demo['logo_dark']['url']) && $weasley_redux_demo['logo_dark']['url'] != '') {?>
						<img class="logo-dark" src="<?php echo esc_url($weasley_redux_demo['logo_dark']['url']); ?>" title="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
					<?php } else{ ?>
						<img class="logo-dark" src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" title="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
					<?php } ?>
				</a>
				<div class="collapse navbar-collapse justify-content-end main-menu" id="navbar-collapse-toggle">
					<?php 
						wp_nav_menu( 
						array( 
							'theme_location'  => 'primary',
							'container'       => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'menu'            => '',
							'container_class' => '',
							'container_id'    => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
							'walker'          => new weasley_wp_bootstrap_navwalker(),
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul  class="navbar-nav ml-auto %2$s">%3$s</ul>',
							'depth'           => 0,
						)
					); ?>
				</div>
				<div class="theme-color d-flex">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle" aria-controls="navbar-collapse-toggle" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
			</div>
		</nav>
	</header>