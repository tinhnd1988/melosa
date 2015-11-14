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
										    	$desc = get_extended( $item->post_content )['main'];
 												$gallery = get_post_gallery( $item->ID, false );
 												$galleryImg_ids = explode( ",", $gallery['ids'] );
										    	//var_dump($gallery);
									    	
										?>
												<div class="<?php echo ($key % 2 == 0) ? 'pic_left' : 'pic_right'?>">
													<div class="over-pic">
														<a class="fancybox" rel="gallery<?php echo $item->ID ?>" href="<?php echo $img_featured[0]; ?>">
															<img src="<?php echo $img_featured[0]; ?>">
														</a>
													</div>									
													<div class="text-des">										
														<h5><?php echo $item->post_title ?></h5>
														<span><?php echo $desc ?></span>
													</div>
													<ul style="display:none">
														<?php
															foreach( $galleryImg_ids as $id ) :
															   $link   = wp_get_attachment_url( $id );
														?>
																<li>
																	<a class="fancybox" rel="gallery<?php echo $item->ID ?>" href="<?php echo $link ?>" title="">
																		<img src="<?php echo $link ?>" alt="" />
																	</a>
																</li>														
														<?php
															endforeach;
														?>
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
			</div>
<?php get_footer(); ?>
