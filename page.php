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
	<!--記事本文-->
	<?php if(have_posts()): the_post(); ?>
		<!--本文取得-->
		<?php the_content(); ?>
	<?php endif; ?>
<?php get_footer(); ?>