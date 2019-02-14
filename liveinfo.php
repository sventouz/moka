<?php
/**
 * Template Name: ライブ情報テンプレート */
?>

<?php get_header(); ?>
<div class="secTitle">
	<h2><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/top/txt_mv.png" alt=""></a></h2>
	<p class="top">mo.ka オフィシャルウェブサイト</p>
	<ul class="headerMenu">
		<li class="textUnderLine"><a href="<?php echo home_url(); ?>">TOP</a></li>
		<li class="textUnderLine"><a href="<?php echo home_url('/about/'); ?>">ABOUT</a></li>
		<li class="textUnderLine"><a href="<?php echo home_url('/blog/'); ?>">BLOG</a></li>
		<li class="textUnderLine"><a href="<?php echo home_url('/live/'); ?>">LIVE</a></li>
		<li class="textUnderLine"><a href="<?php echo home_url('/cd/'); ?>">CD</a></li>
		<li class="textUnderLine"><a href="<?php echo home_url('/contact/'); ?>">CONTACT</a></li>
		<li class="textUnderLine"><a href="https://line.me/R/ti/p/%40vts1083c" target="_blank">LINE</a></li>
	</ul>
</div>

<div class="title">
	<div class="container">
		<p class="topTitle">LIVE</p>
	</div>
</div>

<div class="wrapper">
	<div class="s-container">
		<div class="liveInfo">
			<ul>
				<li class="liveInfo_ex">
					<span class="live-date">日時</span>
					<span class="live-place">場所</span>
					<span class="live-name">ライブ名</span>
				</li>
				<?php
				$wp_query = new WP_Query();
				$my_posts = array(
				// 'posts_per_page' => 10,
				'post_type' => 'post',
				'category_name' => 'ライブの日程'
				);
				$wp_query->query( $my_posts );
				if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
				?>
				<li>
					<span class="live-date"><?php echo get_post_meta($post->ID, 'webinfo_date', true); ?></span>
					<span class="live-place"><?php echo get_post_meta($post->ID, 'webinfo_place', true); ?></span>
					<span class="live-name"><?php echo get_post_meta($post->ID, 'webinfo_name', true); ?></span>
				</li>
				<?php endwhile;endif; ?>
			</ul>
		</div>
	</div>
</div>

<?php get_footer(); ?>

<?php wp_reset_postdata(); ?>