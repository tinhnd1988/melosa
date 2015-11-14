<?php
/*
/*
/* Template Name: view360
/*
*/
get_header();
?>
<div class="pageHeader">
				<div class="call_us">
					<div class="icon_call"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/phone.png"></div>
					<?php
						$args = array(
						  'name'        => 'call-us',
						  'post_type'   => 'post',
						  'post_status' => 'publish',
						  'numberposts' => 1
						);
						$callus = get_posts($args);
						echo $callus[0]->post_content;
					?>
				</div>				
				<div class="titleBar">
					<div class="container">
						<ul>
							<li class="ui_tabs active"><span class="Tab1">View 360&deg; cảnh quan</span></li>
							<li class="ui_tabs"><span class="Tab2">View 360&deg; nội thất</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="post_content">
				<div id="Tab1" class="content_tab">
					<iframe frameborder="0" style="width: 100%; height: 535px;" src="http://www.lucasta.com.vn/Data/View360/360Lucasta_quality9.html"></iframe>
				</div><!-- end tab1 -->
				<div id="Tab2" class="content_tab" style="display:none;">
					<iframe frameborder="0" style="width: 100%; height: 535px;" src="http://www.lucasta.com.vn/Data/View360/360Lucasta_quality9.html"></iframe>
				</div><!-- end tab1 -->				
			</div>
<?php get_footer(); ?>
