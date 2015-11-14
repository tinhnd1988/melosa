<?php
/*
/*
/* Template Name: utilities
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
							<li class="ui_tabs active"><span class="Tab1">Gym</span></li>
							<li class="ui_tabs"><span class="Tab2">Hồ điều tiết</span></li>
							<li class="ui_tabs"><span class="Tab3">Hồ bơi & hồ tràn</span></li>
							<li class="ui_tabs"><span class="Tab4">Công viên cây xanh</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="post_content">
				<div id="Tab1" class="content_tab">
					<div class="wrap-slide">
						<div class="pic-content">
							<div class="item-pic">
								<div class="over-pic">
									<img class="lazyload" data-src="images/utilities.jpg"  alt="">
								</div>									
							</div>
							<div class="item-pic">
								<div class="over-pic">
									<img class="lazyload" data-src="images/utilities.jpg"  alt="">
								</div>									
							</div>
							<div class="item-pic">
								<div class="over-pic">
									<img class="lazyload" data-src="images/utilities.jpg"  alt="">
								</div>									
							</div>						
						</div>
					</div>
					<div class="content-desc">
						<h2>PHÒNG GYM VÀ SÂN TENNIS CHUẨN QUỐC TẾ VỚI TRANG THIẾT BỊ HIỆN ĐẠI</h2>
						<p>
							Máy móc và dụng cụ hiện đại được trang bị đầy đủ sẽ hỗ trợ đắc lực cho quá trình tập luyện của bạn.
						</p>
						<p>
							Hơn nữa đây còn là cơ hội tốt để gia đình bạn giao lưu cùng những người hàng xóm của mình góp phần hòa nhịp tốt hơn vào cuộc sống tại khu dân cư
						</p>
					</div>
				</div><!-- end tab1 -->
				<div id="Tab2" class="content_tab container" style="display:none;">					
					<img src="images/Tienich/hocanhquang.jpg" style="width:100%;">					
				</div><!-- end tab2 -->
				<div id="Tab3" class="content_tab container" style="display:none;">
					<img src="images/Tienich/Ho_Tran.jpg" style="width:100%;">
				</div><!-- end tab3 -->
				<div id="Tab4" class="content_tab container" style="display:none;">
					<img src="images/Tienich/San_tennis.jpg" style="width:100%;">
				</div><!-- end tab4 -->		
			</div>
<?php get_footer(); ?>
