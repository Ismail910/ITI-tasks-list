<?php
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}
	
function new_photography__header () {
?>
<header class="site-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<?php if( !get_theme_mod( 'hide_menu' ) ) { ?>
	<div id="grid-top" class="grid-top">
		<!-- Site Navigation  -->
			<div class="header-right" itemprop="logo" itemscope="itemscope" itemtype="http://schema.org/Brand">
					<?php the_custom_logo(); ?>
			</div>	
		<button id="s-button-menu" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img alt="mobile" src="<?php echo esc_url(get_template_directory_uri() ) . '/images/mobile.jpg'; ?>"/></button>
		<div class="mobile-cont">
			<div class="mobile-logo" itemprop="logo" itemscope="itemscope" itemtype="http://schema.org/Brand">
					<?php the_custom_logo(); ?>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation">

			<button class="menu-toggle"><?php esc_html_e( 'Menu', 'new-photography' ); ?></button>
			<?php wp_nav_menu( array( 
			'theme_location' => 'primary',
			'menu_id' => 'primary-menu'	
			) ); ?>
		</nav><!-- #site-navigation -->
		
	</div>
	<?php } ?>
	<!-- Header Image  -->
	<div class="all-header">
	    <div class="s-shadow"></div>
	    <div class="dotted"></div>
	    <div class="s-hidden">
			<?php if (get_theme_mod( 'header_image_position' ) == 'default' ) { ?>
			<img id="masthead" class="header-image" src='<?php echo esc_url(get_template_directory_uri() ) . '/images/header.webp'; ?>' alt="<?php esc_attr_e( 'header image','new-photography' ); ?>"/>	
			<?php } ?>
			<?php if (get_theme_mod( 'header_image_position' ) == 'real' ) { ?>
			<img id="masthead" class="header-image" src='<?php if ( !is_home() and has_post_thumbnail() and get_post_meta( get_the_ID(), 'new_photography__value_header_image', true ) ) { the_post_thumbnail_url(); } else { header_image(); } ?>' alt="<?php esc_attr_e( 'header image','new-photography' ); ?>"/>	
			<?php } else { ?>
			<div id="masthead" class="header-image" style="background-image: url( '<?php if (  !is_home() and has_post_thumbnail() and get_post_meta( get_the_ID(), 'new_photography__value_header_image', true ) ) { the_post_thumbnail_url(); } else { header_image(); } ?>' );"></div>
			<?php } ?>
		</div>
		<div class="site-branding">
		<?php if ( display_header_text() == true ) { ?>
			<?php
			
			
			if ( is_front_page() && is_home() ) :
				?>
					<h1 id="site-title" <?php echo wp_kses_post(new_photography__animation( "animation_site_title" )); ?> class="site-title" itemscope itemtype="http://schema.org/Brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="ml2"><?php bloginfo( 'name' ); ?></span></a></h1>
					<?php
				else :
					?>
					<p id="site-title" <?php echo wp_kses_post(new_photography__animation( "animation_site_title" )); ?> class="site-title" itemscope itemtype="http://schema.org/Brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="ml2"><?php bloginfo( 'name' ); ?></span></a></p>
					<?php
				endif;
				$new_photography__description = esc_html(get_bloginfo( 'description', 'display' ) );
				if ( $new_photography__description || is_customize_preview() ) :
					?>    
					<p class="site-description" itemprop="headline">
						<span class="word"><?php echo esc_html($new_photography__description); ?></span>
					</p>
				<?php endif; ?>	
		<?php }  
		do_action('new_photography_buttons_header'); 
		?>	
		</div>
		<!-- .site-branding -->
	</div>
	<!-- Recent Posts Slider  -->
	<?php if (( is_front_page() or is_home()) and  get_theme_mod('new_photography_activate_conveyor_ticker_home')) { 
	 echo esc_html(new_photography_slider_sticky ()); 
	 } ?>
	 <?php if (( !is_front_page() or !is_home()) and  get_theme_mod('new_photography_activate_conveyor_ticker_all')) { 
	 echo esc_html(new_photography_slider_sticky ()); 
	 } ?>	
</header>
<?php }