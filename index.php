<?php get_header(); ?>
<div class="mv_pc is-pc-show">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/images/top/pic_slide01_pc.jpg" alt=""></div>
			<div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/images/top/pic_slide02_pc.jpg" alt=""></div>
			<div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/images/top/pic_slide03_pc.jpg" alt=""></div>
			<div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/images/top/pic_slide04_pc.jpg" alt=""></div>
		</div>
	</div>
</div>
<div class="mv_sp is-sp-show">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/images/top/pic_slide01_sp.jpg" alt=""></div>
			<div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/images/top/pic_slide02_sp.jpg" alt=""></div>
			<div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/images/top/pic_slide03_sp.jpg" alt=""></div>
			<div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/images/top/pic_slide04_sp.jpg" alt=""></div>
		</div>
	</div>
</div>
</div>
<!--mv-->
<div class="notice">
	<div class="s-container">
		<h2>BLOG</h2>
		<div class="noticeBox">

		


			<ul>
				<?php
				$wp_query = new WP_Query();
				$my_posts = array(
				'posts_per_page' => 3, // 表示する件数
				'post_type' => 'post',
				);
				$wp_query->query( $my_posts );
				if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
				?>
				<li>
					<span class="article_category" data-cat="<?php $postcat=get_the_category(); echo $postcat[0]->name;?>">
						<?php if( has_category() ): ?>
							<?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
						<?php endif; ?>
					</span>
					<span class="noticeDate"><?php echo get_the_date(); ?></span>
					<a href="<?php the_permalink(); ?>"><span class="noticeContent"><?php the_title(); ?></span></a>
				</li>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			</ul>




			
			<p class="moreNews"><a href="<?php echo home_url('/blog/'); ?>">MORE</a></p>
		</div>
	</div>
</div>
<!---notice-->
<div class="skill">
	<div class="m-container">
		<ul>
			<li>
				<a href="<?php echo home_url('/about/'); ?>">
					<h3>ABOUT</h3>
					<img src="<?php bloginfo('template_url'); ?>/images/top/skill01.jpg" alt="">
					<p>プロフィール、生い立ち、これまでとこれからを知ることができます。</p>
				</a>
			</li>
			<li>
				<a href="<?php echo home_url('/blog/'); ?>">
					<h3>BLOG</h3>
					<img src="<?php bloginfo('template_url'); ?>/images/top/skill04.jpg" alt="">
					<p>ブログ随時更新していますのぜひチェックしてください。</p>
				</a>
			</li>
			<li>
				<a href="<?php echo home_url('/live/'); ?>">
					<h3>LIVE</h3>
					<img src="<?php bloginfo('template_url'); ?>/images/top/skill02.jpg" alt="">
					<p>ライブの詳細はこちらから確認できます。</p>
				</a>
			</li>
			<li>
				<a href="<?php echo home_url('/cd/'); ?>">
					<h3>CD</h3>
					<img src="<?php bloginfo('template_url'); ?>/images/top/skill03.jpg" alt="">
					<p>CDの販売情報はこちらから確認できます。</p>
				</a>
			</li>
		</ul>
	</div>
</div>
<!--skills-->
<div class="sns">
	<div class="sns-container">
		<div class="twitter">
			<a class="twitter-timeline" data-width="320" data-height="700" href="https://twitter.com/MkRpso?ref_src=twsrc%5Etfw">Tweets by MkRpso</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
		<div class="instagram">
			<a href="https://instawidget.net/v/user/mkrpso" id="link-ccd72bca1fdb82628f3dc777aaf42daaafbc4db4d16a15de23fd47f2ddc80f28">@mkrpso</a>
			<script src="https://instawidget.net/js/instawidget.js?u=ccd72bca1fdb82628f3dc777aaf42daaafbc4db4d16a15de23fd47f2ddc80f28&width=320px"></script>
		</div>
	</div>
</div>
<!--sns-->
<?php get_footer(); ?>