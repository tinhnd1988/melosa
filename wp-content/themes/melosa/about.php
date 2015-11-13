<?php
/*
/*
/* Template Name: About
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
				<?php
					$args = array(
						'category_name' => 'gioi-thieu',
						'orderby'       => 'date',
						'order'         => 'ASC',
						);
					$posts = get_posts( $args );
				?>
					<div class="container">
						<ul>
							<?php foreach ($posts as $key => $item) :?>
								<li class="ui_tabs <?php echo ($item->post_name == 'chu-dau-tu') ? 'active': ''?>"><span class="tab<?php echo $key ?>"><?php echo $item->post_title?></span></li>
							<?php endforeach;?>
						</ul>
					</div>
				</div>
			</div>
			<div class="post_content">
				<?php foreach ($posts as $key => $item) :?>
					<div id="tab<?php echo $key ?>" class="content_tab" style="display:none;">
						<div class="container">
							<?php echo $item->post_content; ?>
						</div>
					</div>
				<?php endforeach;?>	
			</div>
<?php get_footer(); ?>
