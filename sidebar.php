<div class="categoryList">
	<h2>カテゴリ一覧</h2>
	<ul class="side_category">
		<?php wp_list_categories('orderby=count&order=desc&show_count=1&title_li='); ?>
	</ul>
</div>

<div class="monthlyArchive">
	<h2>過去の投稿</h2>
	<?php
	$year_prev = null;
	$postType = get_post_type( );
	$months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,YEAR( post_date ) AS year,COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( )
	and post_type = '$postType' GROUP BY month , year ORDER BY post_date DESC");
	foreach($months as $month):
		$year_current = $month->year;
		if ($year_current != $year_prev) { ?>
		<?php if($year_prev != null): ?>
	</ul>
	<?php endif; ?>

	<h3><a href="" class="yearLinkToggle"><?php echo $month->year; ?>年</a></h3>
	<ul>
		<?php } ?>
		<li>
			<a href="<?php echo esc_url(home_url()); ?>/date/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
				<?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月(<?php echo $month->post_count; ?>)
			</a>
		</li>
		<?php $year_prev = $year_current; ?>
		<?php endforeach; ?>
	</ul>
</div>
<div class="banner">
	<ul>
		<li><a href="https://mkrpso.thebase.in/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/common/banner/banner01.png" alt=""></a></li>
		<li><a href="https://itunes.apple.com/jp/artist/mo-ka/1385153272" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/common/banner/banner02.png" alt=""></a></li>
		<li><a href="https://frekul.com/artists/profile/mkrpso" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/common/banner/banner03.png" alt=""></a></li>
	</ul>
</div>
