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
	</ul>
</div>
<div class="wrapper">
	<div class="container container postWrapper">
		<div class="postContent clearfix singleContent">
		<?php if(have_posts()): the_post(); ?>
			<article <?php post_class( 'kiji' ); ?>>
				<!--タイトル-->
				<h1><?php the_title(); ?></h1>
				<div class="kiji-info">
					<!--投稿日を取得-->
					<span class="kiji-date">
						<i class="fas fa-pencil-alt"></i>
						<time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
						<?php echo get_the_date(); ?>
						</time>
					</span>
					<!--カテゴリ取得-->
					<?php if(has_category() ): ?>
					<span class="cat-data">
						<?php echo get_the_category_list( ' ' ); ?>
					</span>
					<?php endif; ?>
				</div>
				<!--アイキャッチ取得-->
				<?php if( has_post_thumbnail() ): ?>
				<div class="kiji-img">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>
				<?php endif; ?>
				<!--本文取得-->
				<div class="singleContentText">
					<?php the_content(); ?>
				</div>
				<div class="paging">
					<p class="prev">
						<?php previous_post_link(); ?>
					</p>
					<p class="next">
						<?php next_post_link(); ?>
					</p>
				</div>
			</article>
		<?php endif; ?>
		</div>
		<div class="postSidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>