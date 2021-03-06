<?php
/*
/*
/* Template Name: news
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
							<li class="ui_tabs active"><span class="Tab1">Tin tức thị trường</span></li>
							<li class="ui_tabs"><span class="Tab2">Sự kiện - khuyến mãi</span></li>
							<li class="ui_tabs"><span class="Tab3">Phim giới thiệu</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="post_content">
				<div id="Tab1" class="content_tab">
					<div class="wrap-slide">
						<div class="pic-content">
							<div class="item-news">
								<div class="thumbnail">
									<img class="lazyload" data-src="images/news_01.jpg"  alt="">
								</div>
								<div class="content">
									<h4>Thiết kế sân vườn hợp phong thủy mang an lành cho gia chủ</h4>
									<p>
										Vượng khí của ngôi nhà có được không đơn thuần là cách sắp xếp nội thất bên trong hợp
									</p>
								</div>
								<a href="#slider_tab1"></a>
								<div class="clearfix"></div>									
							</div>
							<div class="item-news">
								<div class="thumbnail">
									<img class="lazyload" data-src="images/news_02.jpg"  alt="">
								</div>
								<div class="content">
									<h4>Dự án imperia garden: hấp dẫn nhờ gnaf tàu điện trên cao</h4>
									<p>
										Các tuyến tàu điện trên cao và tàu điện ngầm sẽ làm thay đổi diện mạo của thị trường bất
									</p>
								</div>
								<a href="#slider_tab2"></a>
								<div class="clearfix"></div>									
							</div>
							<div class="item-news">
								<div class="thumbnail">
									<img class="lazyload" data-src="images/news_03.jpg"  alt="">
								</div>
								<div class="content">
									<h4>Ý tưởng thiết kế tầng hầm đẹp hút hồn</h4>
									<p>
										Nếu bạn đang có ý định tu sửa tầng hầm nhà mình, chắc chắn bạn sẽ quan tâm đến
									</p>
								</div>
								<a href="#slider_tab3"></a>
								<div class="clearfix"></div>									
							</div>	
							<div class="item-news">
								<div class="thumbnail">
									<img class="lazyload" data-src="images/news_01.jpg"  alt="">
								</div>
								<div class="content">
									<h4>Thiết kế sân vườn hợp phong thủy mang an lành cho gia chủ</h4>
									<p>
										Vượng khí của ngôi nhà có được không đơn thuần là cách sắp xếp nội thất bên trong hợp
									</p>
								</div>
								<a href="#slider_tab4"></a>
								<div class="clearfix"></div>									
							</div>
							<div class="item-news">
								<div class="thumbnail">
									<img class="lazyload" data-src="images/news_02.jpg"  alt="">
								</div>
								<div class="content">
									<h4>Dự án imperia garden: hấp dẫn nhờ gnaf tàu điện trên cao</h4>
									<p>
										Các tuyến tàu điện trên cao và tàu điện ngầm sẽ làm thay đổi diện mạo của thị trường bất
									</p>
								</div>
								<a href="#slider_tab5"></a>
								<div class="clearfix"></div>									
							</div>
							<div class="item-news">
								<div class="thumbnail">
									<img class="lazyload" data-src="images/news_03.jpg"  alt="">
								</div>
								<div class="content">
									<h4>Ý tưởng thiết kế tầng hầm đẹp hút hồn</h4>
									<p>
										Nếu bạn đang có ý định tu sửa tầng hầm nhà mình, chắc chắn bạn sẽ quan tâm đến
									</p>
								</div>
								<a href="#slider_tab6"></a>
								<div class="clearfix"></div>									
							</div>																							
						</div>
					</div>
					<div class="content-details">
						<div id="slider_tab1" class="content_slider">
							<h1>Thiết kế sân vườn hợp phong thủy mang an lành cho gia chủ</h1>
							<p><b>Vượng khí của ngôi nhà có được khoog đơn thuần là cách sắp xếp nội thất bên trong hợp phong thủy mà cảnh quan ngoại thất bên ngoài cũng giữ một vai trò vô cùng quan trọng, là nơi giúp điều hòa, cân bằng khí âm dương cho không gian sống nhà bạn.</b></p>
							<p>
								<center><img src="images/news_postimg.jpg"></center>
							</p>
							<p>
								Ngày nay việc bố trí sân vườn ra sao cho hợp phong thủy đang được rất nhiều người quan tâm. Bởi theo duy tâm thì chính điều này sẽ giúp gia đình gặp nhiều bình an, làm ăn thuận lợi. Vậy khi thiết kế sân vườn gia chủ nên chú ý một số vấn đề sau để sở hữu một không gian vừa đẹp về thẩm mỹ lại hợp về phong thủy
							</p>
							<h4>Hướng sân vườn tốt nhất là hướng Nam</h4>
							<p>
								Hướng vườn được xác định là hướng chính mà chủ nhân thường xuyên đi vào vườn. Mỗi hướng vườn lại thu hút năng lượng khác nhau. Đối với sân vườn mà nói hướng tốt nhất theo phong thủy phương Đông là hướng Nam. Hướng Nam được xem là hướng cát khí mang lại nhiều năng lượng dương sẽ mang đến may mắn cho gia chủ. Trường hợp, vườn trước nhà bạn khoog thể đặt theo hướng Nam vì ảnh hưởng đến mỹ quan thì nên đặt tượng hoặc hình chim phượng hoàng để thu hút năng lượng dương này
							</p>
							<p>
								Nếu không thể bố trí vườn theo hướng Nam thì hướng Đông cũng là một lựa chọn lý tưởng, đây cũng là hướng thu hút khí lành. Với hướng mặt trời mọc này gia chủ nên chọn trồng những loại cây mọc theo khóm như tre trúc, để thu hút nặng lượng tốt, giúp gắn kết, nâng đỡ các mối quan hệ trong gia đình
							</p>
						</div>
						<div id="slider_tab2" class="content_slider" style="display:none;">
							<h1>Dự án imperia garden: hấp dẫn nhờ gnaf tàu điện trên cao</h1>
							<p><b>Vượng khí của ngôi nhà có được khoog đơn thuần là cách sắp xếp nội thất bên trong hợp phong thủy mà cảnh quan ngoại thất bên ngoài cũng giữ một vai trò vô cùng quan trọng, là nơi giúp điều hòa, cân bằng khí âm dương cho không gian sống nhà bạn.</b></p>
							<p>
								<center><img src="images/news_postimg.jpg"></center>
							</p>
							<p>
								Ngày nay việc bố trí sân vườn ra sao cho hợp phong thủy đang được rất nhiều người quan tâm. Bởi theo duy tâm thì chính điều này sẽ giúp gia đình gặp nhiều bình an, làm ăn thuận lợi. Vậy khi thiết kế sân vườn gia chủ nên chú ý một số vấn đề sau để sở hữu một không gian vừa đẹp về thẩm mỹ lại hợp về phong thủy
							</p>
							<h4>Hướng sân vườn tốt nhất là hướng Nam</h4>
							<p>
								Hướng vườn được xác định là hướng chính mà chủ nhân thường xuyên đi vào vườn. Mỗi hướng vườn lại thu hút năng lượng khác nhau. Đối với sân vườn mà nói hướng tốt nhất theo phong thủy phương Đông là hướng Nam. Hướng Nam được xem là hướng cát khí mang lại nhiều năng lượng dương sẽ mang đến may mắn cho gia chủ. Trường hợp, vườn trước nhà bạn khoog thể đặt theo hướng Nam vì ảnh hưởng đến mỹ quan thì nên đặt tượng hoặc hình chim phượng hoàng để thu hút năng lượng dương này
							</p>
							<p>
								Nếu không thể bố trí vườn theo hướng Nam thì hướng Đông cũng là một lựa chọn lý tưởng, đây cũng là hướng thu hút khí lành. Với hướng mặt trời mọc này gia chủ nên chọn trồng những loại cây mọc theo khóm như tre trúc, để thu hút nặng lượng tốt, giúp gắn kết, nâng đỡ các mối quan hệ trong gia đình
							</p>
						</div><!-- end slider_tab2 -->
						<div id="slider_tab3" class="content_slider" style="display:none;">
							<h1>Ý tưởng thiết kế tầng hầm đẹp hút hồn</h1>
							<p><b>Vượng khí của ngôi nhà có được khoog đơn thuần là cách sắp xếp nội thất bên trong hợp phong thủy mà cảnh quan ngoại thất bên ngoài cũng giữ một vai trò vô cùng quan trọng, là nơi giúp điều hòa, cân bằng khí âm dương cho không gian sống nhà bạn.</b></p>
							<p>
								<center><img src="images/news_postimg.jpg"></center>
							</p>
							<p>
								Ngày nay việc bố trí sân vườn ra sao cho hợp phong thủy đang được rất nhiều người quan tâm. Bởi theo duy tâm thì chính điều này sẽ giúp gia đình gặp nhiều bình an, làm ăn thuận lợi. Vậy khi thiết kế sân vườn gia chủ nên chú ý một số vấn đề sau để sở hữu một không gian vừa đẹp về thẩm mỹ lại hợp về phong thủy
							</p>
							<h4>Hướng sân vườn tốt nhất là hướng Nam</h4>
							<p>
								Hướng vườn được xác định là hướng chính mà chủ nhân thường xuyên đi vào vườn. Mỗi hướng vườn lại thu hút năng lượng khác nhau. Đối với sân vườn mà nói hướng tốt nhất theo phong thủy phương Đông là hướng Nam. Hướng Nam được xem là hướng cát khí mang lại nhiều năng lượng dương sẽ mang đến may mắn cho gia chủ. Trường hợp, vườn trước nhà bạn khoog thể đặt theo hướng Nam vì ảnh hưởng đến mỹ quan thì nên đặt tượng hoặc hình chim phượng hoàng để thu hút năng lượng dương này
							</p>
							<p>
								Nếu không thể bố trí vườn theo hướng Nam thì hướng Đông cũng là một lựa chọn lý tưởng, đây cũng là hướng thu hút khí lành. Với hướng mặt trời mọc này gia chủ nên chọn trồng những loại cây mọc theo khóm như tre trúc, để thu hút nặng lượng tốt, giúp gắn kết, nâng đỡ các mối quan hệ trong gia đình
							</p>
						</div><!-- end slider_tab3 -->
						<div id="slider_tab4" class="content_slider" style="display:none;">
							<h1>Dự án imperia garden: hấp dẫn nhờ gnaf tàu điện trên cao</h1>
							<p><b>Vượng khí của ngôi nhà có được khoog đơn thuần là cách sắp xếp nội thất bên trong hợp phong thủy mà cảnh quan ngoại thất bên ngoài cũng giữ một vai trò vô cùng quan trọng, là nơi giúp điều hòa, cân bằng khí âm dương cho không gian sống nhà bạn.</b></p>
							<p>
								<center><img src="images/news_postimg.jpg"></center>
							</p>
							<p>
								Ngày nay việc bố trí sân vườn ra sao cho hợp phong thủy đang được rất nhiều người quan tâm. Bởi theo duy tâm thì chính điều này sẽ giúp gia đình gặp nhiều bình an, làm ăn thuận lợi. Vậy khi thiết kế sân vườn gia chủ nên chú ý một số vấn đề sau để sở hữu một không gian vừa đẹp về thẩm mỹ lại hợp về phong thủy
							</p>
							<h4>Hướng sân vườn tốt nhất là hướng Nam</h4>
							<p>
								Hướng vườn được xác định là hướng chính mà chủ nhân thường xuyên đi vào vườn. Mỗi hướng vườn lại thu hút năng lượng khác nhau. Đối với sân vườn mà nói hướng tốt nhất theo phong thủy phương Đông là hướng Nam. Hướng Nam được xem là hướng cát khí mang lại nhiều năng lượng dương sẽ mang đến may mắn cho gia chủ. Trường hợp, vườn trước nhà bạn khoog thể đặt theo hướng Nam vì ảnh hưởng đến mỹ quan thì nên đặt tượng hoặc hình chim phượng hoàng để thu hút năng lượng dương này
							</p>
							<p>
								Nếu không thể bố trí vườn theo hướng Nam thì hướng Đông cũng là một lựa chọn lý tưởng, đây cũng là hướng thu hút khí lành. Với hướng mặt trời mọc này gia chủ nên chọn trồng những loại cây mọc theo khóm như tre trúc, để thu hút nặng lượng tốt, giúp gắn kết, nâng đỡ các mối quan hệ trong gia đình
							</p>
						</div><!-- end slider_tab4 -->
						<div id="slider_tab5" class="content_slider" style="display:none;">
							<h1>Ý tưởng thiết kế tầng hầm đẹp hút hồn</h1>
							<p><b>Vượng khí của ngôi nhà có được khoog đơn thuần là cách sắp xếp nội thất bên trong hợp phong thủy mà cảnh quan ngoại thất bên ngoài cũng giữ một vai trò vô cùng quan trọng, là nơi giúp điều hòa, cân bằng khí âm dương cho không gian sống nhà bạn.</b></p>
							<p>
								<center><img src="images/news_postimg.jpg"></center>
							</p>
							<p>
								Ngày nay việc bố trí sân vườn ra sao cho hợp phong thủy đang được rất nhiều người quan tâm. Bởi theo duy tâm thì chính điều này sẽ giúp gia đình gặp nhiều bình an, làm ăn thuận lợi. Vậy khi thiết kế sân vườn gia chủ nên chú ý một số vấn đề sau để sở hữu một không gian vừa đẹp về thẩm mỹ lại hợp về phong thủy
							</p>
							<h4>Hướng sân vườn tốt nhất là hướng Nam</h4>
							<p>
								Hướng vườn được xác định là hướng chính mà chủ nhân thường xuyên đi vào vườn. Mỗi hướng vườn lại thu hút năng lượng khác nhau. Đối với sân vườn mà nói hướng tốt nhất theo phong thủy phương Đông là hướng Nam. Hướng Nam được xem là hướng cát khí mang lại nhiều năng lượng dương sẽ mang đến may mắn cho gia chủ. Trường hợp, vườn trước nhà bạn khoog thể đặt theo hướng Nam vì ảnh hưởng đến mỹ quan thì nên đặt tượng hoặc hình chim phượng hoàng để thu hút năng lượng dương này
							</p>
							<p>
								Nếu không thể bố trí vườn theo hướng Nam thì hướng Đông cũng là một lựa chọn lý tưởng, đây cũng là hướng thu hút khí lành. Với hướng mặt trời mọc này gia chủ nên chọn trồng những loại cây mọc theo khóm như tre trúc, để thu hút nặng lượng tốt, giúp gắn kết, nâng đỡ các mối quan hệ trong gia đình
							</p>
						</div><!-- end slider_tab5 -->
						<div id="slider_tab6" class="content_slider" style="display:none;">
							<h1>Ý tưởng thiết kế tầng hầm đẹp hút hồn</h1>
							<p><b>Vượng khí của ngôi nhà có được khoog đơn thuần là cách sắp xếp nội thất bên trong hợp phong thủy mà cảnh quan ngoại thất bên ngoài cũng giữ một vai trò vô cùng quan trọng, là nơi giúp điều hòa, cân bằng khí âm dương cho không gian sống nhà bạn.</b></p>
							<p>
								<center><img src="images/news_postimg.jpg"></center>
							</p>
							<p>
								Ngày nay việc bố trí sân vườn ra sao cho hợp phong thủy đang được rất nhiều người quan tâm. Bởi theo duy tâm thì chính điều này sẽ giúp gia đình gặp nhiều bình an, làm ăn thuận lợi. Vậy khi thiết kế sân vườn gia chủ nên chú ý một số vấn đề sau để sở hữu một không gian vừa đẹp về thẩm mỹ lại hợp về phong thủy
							</p>
							<h4>Hướng sân vườn tốt nhất là hướng Nam</h4>
							<p>
								Hướng vườn được xác định là hướng chính mà chủ nhân thường xuyên đi vào vườn. Mỗi hướng vườn lại thu hút năng lượng khác nhau. Đối với sân vườn mà nói hướng tốt nhất theo phong thủy phương Đông là hướng Nam. Hướng Nam được xem là hướng cát khí mang lại nhiều năng lượng dương sẽ mang đến may mắn cho gia chủ. Trường hợp, vườn trước nhà bạn khoog thể đặt theo hướng Nam vì ảnh hưởng đến mỹ quan thì nên đặt tượng hoặc hình chim phượng hoàng để thu hút năng lượng dương này
							</p>
							<p>
								Nếu không thể bố trí vườn theo hướng Nam thì hướng Đông cũng là một lựa chọn lý tưởng, đây cũng là hướng thu hút khí lành. Với hướng mặt trời mọc này gia chủ nên chọn trồng những loại cây mọc theo khóm như tre trúc, để thu hút nặng lượng tốt, giúp gắn kết, nâng đỡ các mối quan hệ trong gia đình
							</p>
						</div><!-- end slider_tab6 -->
					</div>
				</div>
				<div id="Tab2" class="content_tab container" style="display:none;">					
					<img src="images/Tienich/hocanhquang.jpg" style="width:100%;">					
				</div><!-- end tab2 -->
				<div id="Tab3" class="content_tab container" style="display:none;">
					<img src="images/Tienich/Ho_Tran.jpg" style="width:100%;">
				</div><!-- end tab3 -->
			</div><?php get_footer(); ?>
