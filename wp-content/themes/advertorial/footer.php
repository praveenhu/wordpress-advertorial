<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		<!-- </div> --><!-- .site-content -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-12 pad_social">
						<div class="row">
							<div class="col-sm-5">
								&nbsp;
							</div>
							<div class="col-sm-2">
								<div class="row social_table">
									<div class="col-sm-4 social_cell">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/fb.png" alt="facebook" class="image-responsive">
									</div>
									<div class="col-sm-4 social_cell">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" alt="twitter" class="image-responsive">
									</div>
									<div class="col-sm-4 social_cell">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/images/insta.png" alt="instagram" class="image-responsive">
									</div>
								</div>
							</div>
							<div class="col-sm-5">
								&nbsp;
							</div>
						</div>
					</div>
				</div>
				<div class="row pad_bottom_footer">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4">
								&nbsp;
							</div>
							<div class="col-sm-4">
								<p class="tollfree_number">
									In case of any* emergency call us at: 1800 3000 5887 or write to us at: <span class="customer_care">customer.care@happilyunmarried.com</span>
								</p>
								<p class="except_text">
									* Except drink and dial.
								</p>
							</div>
							<div class="col-sm-4">
								&nbsp;
							</div>
						</div>
					</div>
				</div>
				<div class="row pad_bottom_footer">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-1">
								&nbsp;
							</div>
							<div class="col-sm-10">
								<p class="footer_text">
									Happily Unmarried is India's coolest youth lifestyle brand. We are irreverent, desi, fun and forever young. This is the underlying philosophy when we create content, products and services.
								</p>
								<p class="footer_text">
									<span><img src="<?php bloginfo('stylesheet_directory'); ?>/images/UstraaLogo.png" alt="UstraaLogo"></span> is a range of grooming products for men. After taking care of his home, bar, supply of tees and gifts, we at Happily Unmarried are now helping our bros look and smell better.
								</p>
								<p class="footer_text">
									Copyright(c) 2016 HappilyUnmarried.com. All Rights Reserved.
								</p>
							</div>
							<div class="col-sm-1">
								&nbsp;
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<!-- <div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php //printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a>
			</div> --><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

<?php wp_footer(); ?>
</body>
</html>
