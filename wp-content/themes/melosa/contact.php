<?php
/*
/*
/* Template Name: Contact
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
				
			</div>
			<div class="post_content container">
				<p class="description">
					Mọi sự hợp tác đền có khởi đầu vô cùng đơn giản - từ một cuộc trò chuyện. <br>
					Bạn có rất nhiều sự lựa chọn để trò chuyện cùng chúng tôi qua điện thoại, email, form online hay theo dõi trên mạng xã hội. <br>
					Chúng tôi luôn sẵn sàng lắng nghe mọi lúc mọi nơi.
				</p>
				<div class="contactContent">
					<ul class="phones">
						<li>
							<div class="title_call">Sàn GD SUNLAND SG</div>
							<span>0938 779 660</span>
						</li>
						<li>
							<div class="title_call">CENGROUP</div>
							<span>0933 68 1551</span>
						</li>
						<li>
							<div class="title_call">CTY CPTV TCF</div>
							<span>0908 49 6446</span>
						</li>
						<li>
							<div class="title_call">CTY CPBĐS LA BÀN</div>
							<span>0916 193 223</span>
						</li>
						<li>
							<div class="title_call">CTY TNHH HƯNG THỊNH PHÚ</div>
							<span>0934 839 868</span>
						</li>
					</ul>
					
					<div class="formContact">
						<?php 
							$id=33; 
							$post = get_post($id); 
							$content = apply_filters('the_content', $post->post_content); 
							echo $content;  
						?>
						<?php /*<form action="#">
							<legend>Các thông tin * là bắt buộc</legend>
							<div class="input">
								<input type="text" name="name" placeholder="Họ tên *">
							</div>
							<div class="input">
								<input type="text" name="email" placeholder="Email *">
							</div>
							<div class="input">
								<input type="text" name="phone" placeholder="Điện thoại *">
							</div>
							<div class="input">
								<input type="text" name="title" placeholder="Tiêu đề *">
							</div>
							<div class="input">
								<textarea name="" id="" cols="30" rows="5" placeholder="Nội dung *"></textarea>
							</div>
						</form> */ ?>
					</div>
					<div class="formSubscribe">
						<form action="#">
							<legend>Đăng ký nhận thông tin chương trình bán hàng</legend>
							<span>
								<p>Nếu bạn muốn đăng ký nhận thông tin chương trình bán hàng</p>
								<p>Vui lòng điền vào Form thông tin dưới đây và gửi cho chúng tôi</p>
							</span>
							<div class="input">
								<input type="text" name="name" placeholder="Địa chỉ email">
							</div>
							<div class="submit_dk"><button>Đăng ký</button></div>
						</form>						
					</div>
				</div>
			</div>

<?php get_footer(); ?>
