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
		<p class="topTitle">カテゴリ一覧</p>
	</div>
</div>

<div class="wrapper">
	<div class="container postWrapper">
		<div class="postContent clearfix">
			<h2 class="categoryName">
				「
				<?php $cat = get_the_category(); ?>
				<?php $cat = $cat[0]; ?>
				<?php echo get_cat_name($cat->term_id); ?>
				」一覧
			</h2>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="post">
				<span class="noticeDate"><?php echo get_the_date(); ?></span>
				<a href="<?php the_permalink(); ?>" class="postTitle">
					<h2 class="title"><?php the_title(); ?></h2>
				</a>
			</div>
			<?php endwhile;endif; ?>
			<div class="pagenation">
				<?php 
				the_posts_pagination( array (
					'posts_per_page' => 10,
					'prev_text' => '« 前へ',
					'next_text' => '次へ »',
					'mid_size'  => 2
				) );
				?>
			</div>
		</div>
		<div class="postSidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>