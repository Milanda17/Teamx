<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rixo
 */

?>

	</div><!-- #content -->
	
	<?php if( is_front_page() ): ?>

		<?php 
				
				if( 'no' != get_theme_mod('rixo_show_quote') ): 
				
				$rixoQuoteText = '';
				$rixoQuoteName = '';
				
				if( '' != get_theme_mod('rixo_quote_post') && 'select' != get_theme_mod('rixo_quote_post') ){
					
					$rixoQuoteId = get_theme_mod('rixo_quote_post');
					
					if( ctype_alnum($rixoQuoteId) ){

						$rixoQuote = get_post( $rixoQuoteId );
					
						$rixoQuoteName = $rixoQuote->post_title;
						$rixoQuoteExcerpt = $rixoQuote->post_excerpt;
						$rixoQuoteContent = $rixoQuote->post_content;
						
					}
					
				}
				
				
				
		?>
		<div class="frontpage-quote">

			<h3>
				<?php 
					
					if( '' != $rixoQuoteExcerpt ){
						
						echo esc_html($rixoQuoteExcerpt);
						
					}else{
						
						echo esc_html($rixoQuoteContent);
						
					}
				
				?>
			</h3>
			<p><span><?php echo esc_html($rixoQuoteName); ?></span></p>
		
		</div><!-- .frontpage-quote -->
		<?php endif; ?>

		<?php if( 'no' != get_theme_mod('rixo_show_social') ): ?>
		<div class="frontpage-social">

			<?php if( '' != get_theme_mod('business_page_facebook') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_facebook')); ?>"><img src="<?php echo esc_html(get_template_directory_uri()) . '/assets/images/facebook.png'; ?>"></a>
			<?php endif; ?>
			
			<?php if( '' != get_theme_mod('business_page_flickr') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_flickr')); ?>"><img src="<?php echo esc_html(get_template_directory_uri()) . '/assets/images/flickr.png'; ?>"></a>
			<?php endif; ?>	

			<?php if( '' != get_theme_mod('business_page_gplus') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_gplus')); ?>"><img src="<?php echo esc_html(get_template_directory_uri()) . '/assets/images/gplus.png'; ?>"></a>
			<?php endif; ?>	

			<?php if( '' != get_theme_mod('business_page_linkedin') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_linkedin')); ?>"><img src="<?php echo esc_html(get_template_directory_uri()) . '/assets/images/linkedin.png'; ?>"></a>
			<?php endif; ?>	

			<?php if( '' != get_theme_mod('business_page_reddit') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_reddit')); ?>"><img src="<?php echo esc_html(get_template_directory_uri()) . '/assets/images/reddit.png'; ?>"></a>
			<?php endif; ?>	

			<?php if( '' != get_theme_mod('business_page_stumble') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_stumble')); ?>"><img src="<?php echo esc_html(get_template_directory_uri()) . '/assets/images/stumble.png'; ?>"></a>
			<?php endif; ?>		

			<?php if( '' != get_theme_mod('business_page_twitter') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_twitter')); ?>"><img src="<?php echo esc_html(get_template_directory_uri()) . '/assets/images/twitter.png'; ?>"></a>
			<?php endif; ?>				
					
		</div><!-- .frontpage-social -->	
		<?php endif; ?>
	
	<?php endif; ?>

	<footer id="colophon" class="site-footer">

		<div class="site-logo">
		
			<?php
			
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				if ( has_custom_logo() ) {
						echo '<a href="' . esc_url(get_site_url()) . '"><img src="'. esc_url( $logo[0] ) .'"></a>';
				} else {
						echo '<h1>'. esc_html(get_bloginfo( 'name' )) .'</h1>';
				}			
			
			?>
			<p><?php esc_html_e( 'All rights reserved.', 'rixo' ); ?></p>
		
		</div><!-- .site-logo -->
		
		<div class="footer-widgets">
		
			<div class="footerWidgetContainer">
			<?php if ( dynamic_sidebar('footer-left') ){ } else { ?>
			
				<section class="widget">
					
					<div class="widgetContainerInner">
					
						<h2 class="widget-title"><span><?php _e( 'Pages', 'rixo' ); ?></span></h2>
                        <ul>
                            <?php wp_list_pages('title_li='); ?>
                        </ul>						
					
					</div>
					
				</section>
			
			<?php } ?> 
			</div><!-- .footerWidgetContainer -->
			
			<div class="footerWidgetContainer">
			<?php if ( dynamic_sidebar('footer-middle') ){ } else { ?>
			
				<section class="widget">
					
					<div class="widgetContainerInner">
					
						<h2 class="widget-title"><span><?php _e( 'Meta', 'rixo' ); ?></span></h2>
                        <ul>
                            <?php wp_register(); ?>
                            <li><?php wp_loginout(); ?></li>
                            <?php wp_meta(); ?>
                        </ul>						
					
					</div>
					
				</section>		
			
			<?php } ?> 			
			</div><!-- .footerWidgetContainer -->
			
			<div class="footerWidgetContainer">
			<?php if ( dynamic_sidebar('footer-right') ){ } else { ?>
			
				<section class="widget">
					
					<div class="widgetContainerInner">
					
						<h2 class="widget-title"><span><?php _e( 'Archives', 'rixo' ); ?></span></h2>
                        <ul>
							 <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                        </ul>						
					
					</div>
					
				</section>			
			
			<?php } ?> 			
			</div><!-- .footerWidgetContainer -->			
		
		</div><!-- .footer-widgets -->
		
	
	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- .outerContainer -->
<?php wp_footer(); ?>

</body>
</html>
