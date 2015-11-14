<?php
/*
/*
/* Template Name: Project
/*
*/
get_header();
?>
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slider.css" />
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
				<?php
					$parentCate = get_category_by_slug( 'du-an' );
					$args = array(
						'type'                     => 'post',
						'child_of'                 => $parentCate->term_id,
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => FALSE,
						'hierarchical'             => 1,
						'taxonomy'                 => 'category',
					); 
					$childCates = get_categories($args );
					// var_dump($childCates);
				?>
					<div class="container">
						<ul>
							<?php foreach ($childCates as $key => $item) :?>
								<li class="ui_tabs <?php echo ($item->slug == 'biet-thu') ? 'active': ''?>"><span class="tab<?php echo $key ?>"><?php echo $item->name?></span></li>
							<?php endforeach;?>
						</ul>
					</div>
				</div>
			</div>
			<div class="post_content">
				<div class="projectContent">
					<?php
						foreach ($childCates as $key => $cate) :
							$args = array(
								'category_name' => $cate->slug,
								'orderby'       => 'date',
								'order'         => 'ASC',
								'post_type'     => 'post',
								);
							$posts = get_posts( $args );
					?>
								<div id="tab<?php echo $key ?>" class="content_tab" style="display:none;">
									<div class="wrap-slide">
										<?php 
											foreach ($posts as $key => $item) :
										        $img_featured = wp_get_attachment_image_src( get_post_thumbnail_id( $item->ID ), 'single-post-thumbnail' );

										?>
												<div class="<?php echo ($key % 2 == 0) ? 'pic_left' : 'pic_right'?>">
													<div class="over-pic">
														<a class="fancybox" rel="gallery1" href="<?php echo $img_featured[0]; ?>">
															<img src="<?php echo $img_featured[0]; ?>">
														</a>
													</div>									
													<div class="text-des">										
														<h5><?php echo $item->post_title ?></h5>
														<span> 84 căn. Diện tích sử dụng là 6x12 chiếm 80% số lượng</span>
													</div>
													<ul style="display:none"> 
														<li>
														<a class="fancybox" rel="gallery1" href="images/Hinh_du_an/BThugoc/BT4_V1.RGB_color.jpg" title="">
															<img src="images/Hinh_du_an/BThugoc/BT4_V1.RGB_color.jpg" alt="" />
														</a></li>
														<li><a class="fancybox" rel="gallery1" href="images/Hinh_du_an/BThugoc/BT4_V2.RGB_color.jpg" title="">
															<img src="images/Hinh_du_an/BThugoc/BT4_V2.RGB_color.jpg" alt="" />
														</a></li>
														<li><a class="fancybox" rel="gallery1" href="images/Hinh_du_an/BThugoc/BT3A.jpg" title="">
															<img src="images/Hinh_du_an/BThugoc/BT3A.jpg" alt="" />
													</a></li>
													</ul>
												</div>	
										<?php
												//echo apply_filters('the_content',$item->post_content); 
												//var_dump($item);
											endforeach;		
										?>
									</div>
								</div>					
					<?php
						endforeach;
					?>
				</div>

				<div class="projectContent">
					<div id="Tab1" class="content_tab">
						<div class="wrap-slide">
							<h2>Biệt thự vườn</h2>
								<div class="pic_left">
									<div class="over-pic">
										<a class="fancybox" rel="gallery1" href="images/Hinh_du_an/BThugoc/BT3_V1__.RGB_color.jpg">
											<img src="images/Hinh_du_an/BThugoc/BT3_V1__.RGB_color.jpg" alt="" />
										</a>
									</div>									
									<div class="text-des">										
										<h5>Biệt thự góc</h5>
										<span> 84 căn. Diện tích sử dụng là 6x12 chiếm 80% số lượng</span>
									</div>
									<ul style="display:none"> 
										<li>
										<a class="fancybox" rel="gallery1" href="images/Hinh_du_an/BThugoc/BT4_V1.RGB_color.jpg" title="">
											<img src="images/Hinh_du_an/BThugoc/BT4_V1.RGB_color.jpg" alt="" />
										</a></li>
										<li><a class="fancybox" rel="gallery1" href="images/Hinh_du_an/BThugoc/BT4_V2.RGB_color.jpg" title="">
											<img src="images/Hinh_du_an/BThugoc/BT4_V2.RGB_color.jpg" alt="" />
										</a></li>
										<li><a class="fancybox" rel="gallery1" href="images/Hinh_du_an/BThugoc/BT3A.jpg" title="">
											<img src="images/Hinh_du_an/BThugoc/BT3A.jpg" alt="" />
									</a></li>
									</ul>
								</div>
								<div class="pic_right">
									<div class="over-pic">
										<a class="fancybox" rel="gallery1" href="images/Hinh_du_an/BThuvuon/BT1.RGB_color.jpg">
											<img src="images/Hinh_du_an/BThuvuon/BT1.RGB_color.jpg" alt="" />
										</a>
									</div>									
									<div class="text-des">
										<h5>Biệt thự vườn</h5>
										<span> 8 căn. Diện tích sử dụng là 5x12 (Biệt thự góc)</span>
									</div>
									<ul style="display:none"> 
										<li>
										<a class="fancybox" rel="gallery1" href="images/Hinh_du_an/BThuvuon/BT1A.jpg">
											<img src="images/Hinh_du_an/BThuvuon/BT1A.jpg" alt="" />
										</a></li>
										<li><a class="fancybox" rel="gallery1" href="images/Hinh_du_an/BThuvuon/BT1_V1.RGB_color.jpg">
											<img src="images/Hinh_du_an/BThuvuon/BT1_V1.RGB_color.jpg" alt="" />
										</a></li>
										<li><a class="fancybox" rel="gallery1" href="images/Hinh_du_an/BThuvuon/BT1_V1.RGB_color.jpg">
											<img src="images/Hinh_du_an/BThuvuon/BT1_V1.RGB_color.jpg" alt="" />
										</a></li>
									</ul>
								</div>
						</div>

						
					</div>

					

				</div>
			</div>
<?php get_footer(); ?>
