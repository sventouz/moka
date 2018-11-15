<?php get_header(); ?>
<div class="firstEffect">
	<p class="mvSp">
		<svg height="70" viewBox="0 0 200 68" width="200" xmlns="https://www.w3.org/2000/svg" class="allDev"><text class="st1" fill="#ffbd99" font-family="SignPainter-HouseScript, SignPainter" font-size="95" x="2.665" y="66.422">mo.ka</text></svg>
		<span class="winDev"><img src="<?php bloginfo('template_url'); ?>/images/top/txt_mv.png" alt=""></span>
	</p>
</div>
<div class="topPage">
	<div class="mv">
		<div class="box is-pc-show">
			<video class="fitImg" src="<?php bloginfo('template_url'); ?>/images/top/top.mp4" autoplay preload="auto" autoplay muted loop></video>
			<div class="box__centered">
				<div class="box__contents">
				</div>
			</div>                 
		</div>
		<p class="is-sp-show mvLoad"><img src="<?php bloginfo('template_url'); ?>/images/top/txt_mv.png" alt=""></p>
	</div>
	<!--mv-->
	<div class="notice">
		<div class="s-container">
			<h2>BLOG</h2>
			<div class="noticeBox">
				<ul>
					<?php query_posts('&posts_per_page=3'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li>
								<span class="article_category" data-cat="<?php $postcat=get_the_category(); echo $postcat[0]->name;?>">
									<?php if (!is_category()): ?>
										<?php if( has_category() ): ?>
											<?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
										<?php endif; ?>
									<?php endif; ?>
								</span>
								<span class="noticeDate"><?php echo get_the_date(); ?></span><a href="<?php the_permalink(); ?>"><span class="noticeContent"><?php the_title(); ?></span></a>
							</li>
						<?php endwhile; else: ?>
					<?php endif; ?>
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
</div>
<?php get_footer(); ?>