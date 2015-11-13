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
					<ul>
						<li>
							<div class="title_call">CEN Group</div>
							<span>0903.85.99.11</span>
						</li>
						<li>
							<div class="title_call">CTY CPBĐS La Bàn</div>
							<span>0912 961 727</span>
						</li>
						<li>
							<div class="title_call">Sàn GD SunLand SG</div>
							<span>0938 779 660</span>
						</li>
						<li>
							<div class="title_call">CTY CPTV TCF Việt Nam</div>
							<span>0908 49 6446</span>
						</li>
						<li>
							<div class="title_call">CTY TNHH Hưng Thịnh Phú</div>
							<span>0934 839 868</span>
						</li>
						<li>
							<div class="title_call">CTY CPBĐS TECHCOMREAL</div>
							<span>0908 06 06 79</span>
						</li>
						<li>
							<div class="title_call">CTY CPTV Đông Nam Á</div>
							<span>0909 333 447</span>
						</li>
						<li>
							<div class="title_call">CTY CPMG BĐS VÂN HÀ</div>
							<span>0906 684 499</span>
						</li>
					</ul>
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
					<h1>Giới thiệu</h1>
					<ul>
						<?php foreach ($posts as $key => $item) :?>
							<li class="ui_tabs <?php echo ($item->post_name == 'chu-dau-tu') ? 'active': ''?>"><span class="tab<?php echo $key ?>"><?php echo $item->post_title?></span></li>
						<?php endforeach;?>
					</ul>
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
