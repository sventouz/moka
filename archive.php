<?php
/**
 * Template Name: 一覧テンプレート */
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
	</ul>
</div>

<div class="title">
	<div class="container">
		<p class="topTitle">BLOG</p>
	</div>
</div>

<div class="wrapper">
	<div class="container postWrapper">
		<div class="postContent clearfix">
		<?php
		$paged = (int) get_query_var('paged');
		$args = array(
			'posts_per_page' => 10,
			'paged' => $paged,
			'orderby' => 'post_date',
			'order' => 'DESC',
			'post_type' => 'post',
			'post_status' => 'publish'
		);
		$the_query = new WP_Query($args);
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		<div class="post">
			<!--カテゴリ取得-->
			<?php if(has_category() ): ?>
				<span class="article_category" data-cat="<?php $postcat=get_the_category(); echo $postcat[0]->name;?>">
					<?php echo get_the_category_list( ' ' ); ?>
				</span>
				<span class="noticeDate"><?php echo get_the_date(); ?></span>
			<?php endif; ?>
			<a href="<?php the_permalink(); ?>" class="postTitle">
				<h2 class="title"><?php the_title(); ?></h2>
			</a>
		</div>
		<?php endwhile; endif; ?>
		<!--ページネーション-->
	<div class="pagenation">
		<?php
		if ($the_query->max_num_pages > 1) {
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%/',
				'current' => max(1, $paged),
				'total' => $the_query->max_num_pages
			));
		}
		?>
	</div>
	</div>
	<div class="postSidebar">
		<?php get_sidebar(); ?>
	</div>
	</div>
</div>

<?php get_footer(); ?>

<?php wp_reset_postdata(); ?>