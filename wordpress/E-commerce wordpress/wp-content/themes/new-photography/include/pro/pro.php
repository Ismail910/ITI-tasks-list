<?php if( ! defined( 'ABSPATH' ) ) exit;
	
	function new_photography_how_to_scripts() {
		wp_enqueue_style( 'how-to-use', get_template_directory_uri() . '/include/pro/pro.css' );
	}
	
	add_action( 'admin_enqueue_scripts', 'new_photography_how_to_scripts' );	
	
	// create custom plugin settings menu
	add_action('admin_menu', 'new_photography__create_menu');
	
	function new_photography__create_menu() {
		
		//create new top-level menu
		global $new_photography__settings_page;
		
		$new_photography__settings_page = add_theme_page('New Photography Theme', 'New Photography Theme', 'edit_theme_options',  'style-unique-identifier', 'new_photography__settings_page',1);
		
		//call register settings function
		add_action( 'admin_init', 'register_mysettings' );
	}
	
	function register_mysettings() {
		//register our settings
		register_setting( 'seos-settings-group', 'adsense' );
	}
	
	function new_photography__settings_page() {	
	$path_img = get_template_directory_uri()."/include/pro/"; ?>
	<div id="cont-pro">
		<h1><?php esc_html_e('New Photography WordPress Theme', 'new-photography'); ?></h1>	
		<div class="pro-links">	
		<p><?php esc_html_e('We create free themes and have helped thousands of users to build their sites. You can also support us using the New Photography Pro theme with many new features and extensions.', 'new-photography'); ?></p>
			<a class="button button-primary" target="_blank" href="https://seosthemes.info/new-photography-wordpress-theme/"><?php esc_html_e('Theme Demo', 'new-photography'); ?></a>
			<a style="background: #A83625;" class="reds button button-primary" target="_blank" href="https://seosthemes.com/new-photography-wordpress-theme/"><?php esc_html_e('Upgrade to PRO', 'new-photography'); ?></a>
		</div>	
		<table id="table-colors" class="free-wp-theme">
			<tbody>
				<tr>
					<th><?php esc_html_e('New Photography WordPress Theme', 'new-photography'); ?></th>
					<th><?php esc_html_e('Free WP Theme','new-photography'); ?></th>
					<th><?php esc_html_e('Premium WP Theme','new-photography'); ?></th>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Popular Posts', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Import Demo Content', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>					
				<tr class="s-white">
					<td><strong><?php esc_html_e('Counter', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>								
				<tr>
					<td><strong><?php esc_html_e('Blog Page', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Image Slider', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Abot US', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Header Top Contacts', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Title Position', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>						
				<tr class="s-white">
					<td><strong><?php esc_html_e('Post Options', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>				
				<tr>
					<td><strong><?php esc_html_e('Site Title Animation', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>					
				<tr class="s-white">
					<td><strong><?php esc_html_e('Multiple Gallery', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Animations of all elements.', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Header Options', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Recent Post Slider - Header', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Hide Single Page Title', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>					
				<tr>
					<td><strong><?php esc_html_e('WooCommerce My Account', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>

				<tr class="s-white">
					<td><strong><?php esc_html_e('WooCommerce Product Zoom', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('WooCommerce Cart Options', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>					
				<tr class="s-white">
					<td><strong><?php esc_html_e('WooCommerce Pagination', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Breadcrumb', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Sticky Posts', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Back to top button', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('All Google Fonts', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Shortcode', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Color Scheme', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Full Width Page', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Activate Featured Image like Header Image', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Sidebar Position', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				
				
				<tr class="s-white">
					<td><strong><?php esc_html_e('Social Media Icons Footer', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Custom Footer Copyright', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Microdata', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Translation Ready', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Footer Widgets', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>				
				<tr>
					<td><strong><?php esc_html_e('Header Logo', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>				
				<tr class="s-white">
					<td><strong><?php esc_html_e('Mobile Menu', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>NO.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('Header Image', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('Background Image', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><strong><?php esc_html_e('404 Page Template', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr class="s-white">
					<td><strong><?php esc_html_e('WooCommerce Plugin Support - Declared compatibility for WooCommerce. It allows you to create a shop.', 'new-photography'); ?></strong></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
					<td><img src="<?php echo esc_url($path_img); ?>YES.ico" alt="free-wp-theme" /></td>
				</tr>
				<tr>
					<td><a class="button button-primary" target="_blank" href="https://seosthemes.info/new-photography-wordpress-theme/"><?php esc_html_e('Theme Demo', 'new-photography'); ?></a></td>
					<td> </td>
					<td style=" text-align:center;"><a style="background: #A83625;" class="reds button button-primary" target="_blank" href="https://seosthemes.com/new-photography-wordpress-theme/"><?php esc_html_e('Upgrade to PRO', 'new-photography'); ?></a></td>
				</tr>					
				</tbody>
			</table>
		</div>
		<?php	
		}
