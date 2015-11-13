<?php
/*
/*
/* Template Name: Homepage
/*
*/

get_header(); /*?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
*/?>

			<div class="slider">
				<!-- Place somewhere in the <body> of your page -->
				<div class="flexslider">
					<ul class="slides">
						<li>
						  <img alt="Melosa" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/NoiThat/1a.jpg" style="width:100%;">
						</li>
						<li>
						  <img alt="Melosa" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/NoiThat/2.jpg" style="width:100%;">
						</li>
						<li>
						  <img alt="Melosa" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/NoiThat/3.jpg" style="width:100%;">
						</li>
						<li>
						  <img alt="Melosa" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/NoiThat/4.jpg" style="width:100%;">
						</li>
						<li>
						  <img alt="Melosa" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/NoiThat/5.jpg" style="width:100%;">
						</li>
					</ul>
				</div>
				<div class="caption"><img alt="Melosa" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tieuchuan5sao.png"></div>
				<a class="video_d_a fancybox fancybox.iframe" href="http://video-js.zencoder.com/oceans-clip.mp4"><span class="text">Xem video dự án</span> <span class="icon_video"></span></a>
				<div class="call_us">
					<div class="icon_call"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/phone.png"></div>
					<ul>
						<li>
							<div class="title_call">San GD SunLand SG</div>
							<span>0938 779 660</span>
						</li>
						<li>
							<div class="title_call">San GD SunLand SG</div>
							<span>0938 779 660</span>
						</li>
						<li>
							<div class="title_call">San GD SunLand SG</div>
							<span>0938 779 660</span>
						</li>
						<li>
							<div class="title_call">San GD SunLand SG</div>
							<span>0938 779 660</span>
						</li>
						<li>
							<div class="title_call">San GD SunLand SG</div>
							<span>0938 779 660</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="post_center">
				<ul>
					<?php dynamic_sidebar( 'sidebar-home' ); ?>
					<?php /*<li>
						<div class="row posr clearfix">
							<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_1.jpg">
							<div class="meta posa">
								<p class="dtb">
									<a class="dtbc posr" rel="service" href="news.html">
										<span>Mở bán chính thức dự án Melosa Garden</span>
										<span class="chitiet">Chi tiết</span>
									</a>
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="row posr clearfix">
							<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_2.jpg">
							<div class="meta posa">
								<p class="dtb">
									<a class="dtbc posr" rel="service" href="news.html">
										<span>Mega Residence Mở đầu trào lưu nhà phố cao cấp</span>
										<span class="chitiet">Chi tiết</span>
									</a>
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="row posr clearfix">
							<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_3.jpg">
							<div class="meta posa">
								<p class="dtb">
									<a class="dtbc posr" rel="service" href="news.html">
										<span>Xu hướng phát  triển của dự án BĐS</span>
										<span class="chitiet">Chi tiết</span>
									</a>
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="row posr clearfix">
							<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_4.jpg">
							<div class="meta posa">
								<p class="dtb">
									<a class="dtbc posr" rel="service" href="news.html">
										<span>Biệt thự Lucasta Villa trước giờ mở bản</span>
										<span class="chitiet">Chi tiết</span>
									</a>
								</p>
							</div>
						</div>
					</li>*/?>
					
				</ul>
			</div>
			<div> </div>
<?php get_footer(); ?>
