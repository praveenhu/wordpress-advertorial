<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
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

<!-- Content area of website -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php // twentysixteen_post_thumbnail(); ?>
	<div class="entry-content">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-12 pad_column">
					<div class="row_as_table">
						<div class="col_as_cell column_width_height image_step1">
							&nbsp;
						</div>
						<div class="col_as_cell col_aligm_middle">
							<p class="steps_number">
								Step 1
							</p>
							<p class="steps_heading">
								break up with
								<br>
								your razor!
							</p>
							<p class="steps_description">
								Yeah, that's how you start growing a beard. It's gonna take time and you would be tempted to shave it off, so the first thing you do is get rid of anything that could be harmful for your beard.
							</p>
							<span class="arrow_down">
								<i class="fa fa-chevron-down"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="col-sm-12 pad_column colored_row_section">
					<div class="row_as_table">
						<div class="col_as_cell column_width_height image_step2">
							&nbsp;
						</div>
						<div class="col_as_cell col_aligm_middle">
							<p class="steps_number">
								Step 2
							</p>
							<p class="steps_heading">
								Now give it some
								<br>
								time, mate!
							</p>
							<p class="steps_description">
								Growing a beard is like dating a girl, you gotta be patient. It will take time to get ready, but in the end, the wait will be worthwhile.
							</p>
							<span class="arrow_down">
								<i class="fa fa-chevron-down"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="col-sm-12 pad_column">
					<div class="row_as_table">
						<div class="col_as_cell column_width_height image_step3">
							&nbsp;
						</div>
						<div class="col_as_cell col_aligm_middle">
							<p class="steps_number">
								Step 3
							</p>
							<p class="steps_heading">
								Is it coming out
								<br>
								patchy?
							</p>
							<p class="steps_description">
								Chill out! It's not a biggie. You can use products that make your beard look thicker. That way, you can hide the patches. Or have as much proteins as you can. You can also consult a doctor, some may recommend intake of B1, B6 and B12 vitamins as they are especially useful in helping hair grow quickly.
							</p>
							<span class="arrow_down">
								<i class="fa fa-chevron-down"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="col-sm-12 pad_column colored_row_section">
					<div class="row_as_table">
						<div class="col_as_cell column_width_height image_step4">
							&nbsp;
						</div>
						<div class="col_as_cell col_aligm_middle">
							<p class="steps_number">
								Step 4
							</p>
							<p class="steps_heading">
								The itch will pass
								<br>
								away.
							</p>
							<p class="steps_description">
								The itch is inevitable, but it will pass. Just try to keep the beard clean and moisturised. We recommend using Mooch & Beard Tonic by Ustraa specially made to keep your beard healthy.
							</p>
							<span class="arrow_down">
								<i class="fa fa-chevron-down"></i>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="row seperator">
				&nbsp;
			</div>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-2">
							&nbsp;
						</div>
						<div class="col-sm-8 content_center view_on_desktop">
							<p class="long_text">
								So you are now a proud owner of a glorious beard and it becomes your responsibility to take care of it. Glorious beard needs glorious products. So, we present to you, Ustraa. Ustraa is a range of high quality ooming products for men. From Mooch & Beard Tonic to Beard Wash, we provide you everything that your beard needs. 
							</p>
						</div>
						<div class="col-sm-8 content_center view_on_mobile">
							<p class="long_text">
								So you are now a proud owner of a glorious beard and it becomes your responsibility to take care of it. Glorious beard needs glorious products.
							</p>
							<p class="long_text">
								So, we present to you, Ustraa. Ustraa is a range of high quality ooming products for men. From Mooch & Beard Tonic to Beard Wash, we provide you everything that your beard needs. 
							</p>
						</div>
						<div class="col-sm-2">
							&nbsp;
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-2">
							&nbsp;
						</div>
						<div class="col-sm-8">
							<div class="row product_row_responsive products_table_phone">
								<div class="col-sm-4 product_col_responsive products_cell_phone">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/moochwax.jpg" alt="moochwax" class="img-responsive product_image_corners">
									<span class="arrow_NE">
										<i class="fa fa-arrow-right fa-rotate-45"></i>
									</span>
									<p class="product_description">
										Mooch Wax
									</p>
								</div>
								<div class="col-sm-4 product_col_responsive products_cell_phone pad_phone">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/beardwash.jpg" alt="beardwash" class="img-responsive product_image_corners">
									<span class="arrow_NE">
										<i class="fa fa-arrow-right fa-rotate-45"></i>
									</span>
									<p class="product_description">
										Beard lover's pack
									</p>
								</div>
								<div class="col-sm-4 product_col_responsive products_cell_phone_hidden">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/moochNbeardtonic.jpg" alt="moochNbeardtonic" class="img-responsive product_image_corners">
									<span class="arrow_NE">
										<i class="fa fa-arrow-right fa-rotate-45"></i>
									</span>
									<p class="product_description">
										mooch and beard tonic
									</p>
								</div>
								<span class="arrow_right"><i class="fa fa-chevron-right"></i></span>
							</div>
						</div>
						<div class="col-sm-2">
							&nbsp;
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-4">
							&nbsp;
						</div>
						<div class="col-sm-4 col-xs-12 view_on_desktop">
							<p class="ustraa_button">
								view ustraa products <span class="button_arrow_top"><i class="fa fa-arrow-right fa-rotate-45"></i></span>
							</p>
						</div>
						<div class="col-sm-4 col-xs-12 view_on_mobile">
							<p class="ustraa_button">
								checkout ustraa products <span class="button_arrow_top"><i class="fa fa-arrow-right fa-rotate-45"></i></span>
							</p>
						</div>
						<div class="col-sm-4">
							&nbsp;
						</div>
					</div>
				</div>
			</div>
			<div class="row insta_feed_background">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-2">
							&nbsp;
						</div>
						<div class="col-sm-8 content_center view_on_desktop mooch_Background">
							<p class="long_text_bottom">
								Our Bros have spoken. Have a look at their Ustraa stories on Instagram. Click a photo of your magnificent beard and post it on Instagram with the hashtag "#ustraa" and you might just get featured on Ustraa. Spread the brotherhood.
							</p>
						</div>
						<div class="col-sm-8 content_center view_on_mobile">
							<p class="long_text_bottom mooch_Background">
								Our Bros have spoken. Have a look at their Ustraa stories on Instagram.
							</p>
							<p class="long_text_bottom">
								Click a photo of your magnificent beard and post it on Instagram with the hashtag "#ustraa" and you might just get featured on Ustraa. Spread the brotherhood.
							</p>
						</div>
						<div class="col-sm-2">
							&nbsp;
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="col-sm-2">
								&nbsp;
							</div>
							<div class="col-sm-8">
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-6 pad_bottom_phone">
												<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="6" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BAJ1X41uydT/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Our Shaving Cream, Facewash, and Bodywash come in 5 kickass flavors. Go ahead and make your day brothers.  Go get them all at www.happilyunmarried.com/ustraa</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A photo posted by USTRAA (@theustraa) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-01-05T10:15:48+00:00">Jan 5, 2016 at 2:15am PST</time></p></div></blockquote>
												<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
											</div>
											<div class="col-sm-6">
												<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="6" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BAKICOiuyY2/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#Repost @kumar.raunak09 ・・・ Thanks for taking care of my #mooch and #beard 😊 #ustraa #mandatoriesformen</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A photo posted by USTRAA (@theustraa) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-01-05T12:58:52+00:00">Jan 5, 2016 at 4:58am PST</time></p></div></blockquote>
												<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
											</div>
										</div>
										<div class="row mar_insta_second_row products_cell_phone_hidden">
											<div class="col-sm-6 pad_bottom_phone">
												<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="6" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BAPMVZauyYE/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Mandatories for Men. Real Good and Real Sexy!  Hit on www.ustraa.com to check us out!</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A photo posted by USTRAA (@theustraa) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-01-07T12:12:38+00:00">Jan 7, 2016 at 4:12am PST</time></p></div></blockquote>
												<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
											</div>
											<div class="col-sm-6">
												<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="6" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BAZOi6puyeQ/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Dear ladies, here&#39;s all your man wants.  Go checkout our awesome subscription plans on www.ustraa.com</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A photo posted by USTRAA (@theustraa) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-01-11T09:44:22+00:00">Jan 11, 2016 at 1:44am PST</time></p></div></blockquote>
												<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-2">
								&nbsp;
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-4">
									&nbsp;
								</div>
								<div class="col-sm-4">
									<p class="ustraa_button_bottom">
										see what are people saying <span class="button_arrow"><i class="fa fa-arrow-right fa-rotate-45"></i></span>
									</p>
								</div>
								<div class="col-sm-4">
									&nbsp;
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="col-sm-12">
			<div class="row">
				<table class="table table-striped table-responsive">
					<tr>
						<td>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/Point-1.jpg" alt="mooch" class="img-responsive">
						</td>
						<td class="col_aligm_middle">
							<div>
								<p class="steps_number">
									Step 1
								</p>
								<p class="steps_heading">
									break up with
									<br>
									your razor!
								</p>
								<p class="steps_description">
									Yeah, that's how you start growing a beard. It's gonna take time and you would be tempted to shave it off, so the first thing you do is get rid of anything that could be harmful for your beard.
								</p>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/Point-2.jpg" alt="mooch" class="img-responsive">
						</td>
						<td class="col_aligm_middle">
							<div>
								<p class="steps_number">
									Step 2
								</p>
								<p class="steps_heading">
									Now give it some
									<br>
									time, mate!
								</p>
								<p class="steps_description">
									Growing a beard is like dating a girl, you gotta be patient. It will take time to get ready, but in the end, the wait will be worthwhile.
								</p>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/Point-3.jpg" alt="mooch" class="img-responsive">
						</td>
						<td class="col_aligm_middle">
							<div>
								<div>
								<p class="steps_number">
									Step 3
								</p>
								<p class="steps_heading">
									Is it coming out
									<br>
									patchy?
								</p>
								<p class="steps_description">
									Chill out! It's not a biggie. You can use products that make your beard look thicker. That way, you can hide the patches. Or have as much proteins as you can. You can also consult a doctor, some may recommend intake of B1, B6 and B12 vitamins as they are especially useful in helping hair grow quickly.
								</p>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/Point-4.jpg" alt="mooch" class="img-responsive">
						</td>
						<td class="col_aligm_middle">
							<div>
								<p class="steps_number">
									Step 4
								</p>
								<p class="steps_heading">
									The itch will pass
									<br>
									away.
								</p>
								<p class="steps_description">
									The itch is inevitable, but it will pass. Just try to keep the beard clean and moisturised. We recommend using Mooch & Beard Tonic by Ustraa specially made to keep your beard healthy.
								</p>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div> -->

		<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>

</article><!-- #post-## -->
