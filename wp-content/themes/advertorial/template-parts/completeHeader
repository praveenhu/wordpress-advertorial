<section class="index" role="page">
				<div class="col-sm-12  header_title_container"> <!-- Contains the header and page title -->
					<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

					<header id="masthead" class="site-header" role="banner">
						<div class="site-header-main">
							<div class="site-branding col-sm-12 content_center">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="test" class="logo_on_phone">
								<?php if ( is_front_page() && is_home() ) : ?>
									<!-- <h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
								<?php else : ?>
									<!-- <p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
								<?php endif;

								// $description = get_bloginfo( 'description', 'display' );
								// if ( $description || is_customize_preview() ) : ?>
									<!-- <p class="site-description"><?php //echo $description; ?></p> -->
								<?php //endif; ?>
							</div><!-- .site-branding -->

							<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
								<button id="menu-toggle" class="menu-toggle"><?php _e( 'View Beard Supplies', 'twentysixteen' ); ?></button>

								<div id="site-header-menu" class="site-header-menu header_beard_menu">
									<?php if ( has_nav_menu( 'primary' ) ) : ?>
										<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
											<?php
												wp_nav_menu( array(
													'theme_location' => 'primary',
													'menu_class'     => 'primary-menu',
												 ) );
											?>
										</nav><!-- .main-navigation -->
									<?php endif; ?>

									<?php if ( has_nav_menu( 'social' ) ) : ?>
										<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
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
								</div><!-- .site-header-menu -->
							<?php endif; ?>
						</div><!-- .site-header-main -->

						<?php if ( get_header_image() ) : ?>
							<?php
								/**
								 * Filter the default twentysixteen custom header sizes attribute.
								 *
								 * @since Twenty Sixteen 1.0
								 *
								 * @param string $custom_header_sizes sizes attribute
								 * for Custom Header. Default '(max-width: 709px) 85vw,
								 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
								 */
								$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
							?>
							<div class="header-image">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
								</a>
							</div><!-- .header-image -->
						<?php endif; // End header image check. ?>
					</header><!-- .site-header -->
					<?php
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
			?>
		<style>
			.header_title_container {
				background: url(<?php echo $src[0]; ?> ) !important;
			}
		</style>
		<div class="entry-header col-sm-12 content_center">
			<div class="mooch_mar_top">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/MoochCenter.png" alt="mooch" class="">
			</div>
			<div class="mooch_text">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
			<div class="hidden_on_phone">
				<div class="mooch_mar_top">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/mouse.png" alt="mouse" class="">
				</div>
				<div class="mar_scroll_text">
					<span class="scroll_down">Scroll Down</span>
				</div>
			</div>
			<div class="scroll_on_phone">
				<span class="scroll_down_brown"><i class="fa fa-chevron-down"></i></span>
				<div class="mar_scroll_text">
					<span class="scroll_down">Scroll Down</span>
				</div>
			</div>
		</div><!-- .entry-header -->
	</div> <!-- .header_title_container ends here -->
</section>