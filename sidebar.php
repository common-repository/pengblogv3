<div id="sidebar">
	<div id="sidebarhead"></div>
		<div id="sidebarinner">
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
				<li>
					<?php get_search_form(); ?>
				</li>
				<li>
					<h2>博主</h2>
					<a href="http://bestwphost.com">
						<img src="<?php bloginfo('template_url'); ?>/images/willper.png" width="178" border="0" alt="Willper" />
					</a>
					<p>嘿，你好，我是Willper.</p>
				</li>
				<li>

				</li>
				<?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) {	?> 
				<li>

				<?php if (is_404()) { ?>
				<?php } elseif (is_category()) { ?>
				<p><?php single_cat_title(''); ?></p>

				<?php } elseif (is_day()) { ?>
				<p><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> <?php the_time('l, F jS, Y'); ?>.</p>

				<?php } elseif (is_month()) { ?>
				<p><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a><?php the_time('F, Y'); ?>.</p>

				<?php } elseif (is_year()) { ?>
				<p><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a><?php the_time('Y'); ?>.</p>

				<?php } elseif (is_search()) { ?>
				<p><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a><strong>'<?php the_search_query(); ?>'</strong></p>

				<?php  } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<p><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> </p>

				<?php } ?>

				</li>
			<?php }?>
			</ul>
			<ul>
				<li>
					<h2>页面</h2>
					<?php wp_nav_menu(); ?>
				</li>
				<li>
					<h2>归档</h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</li>
				
				<li>
					<h2>登陆</h2>
					<ul>

							<?php wp_login_form(); ?> 

					</ul>
				</li>
				

				<?php wp_list_categories('show_count=1&title_li=<h2>分类</h2>'); ?>
			</ul>
			<ul>
				<?php if ( is_home() || is_page() ) { ?>
					<?php wp_list_bookmarks(); ?>

					<li><h2>管理</h2>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
						<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
						<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
						<?php wp_meta(); ?>
					</ul>
					</li>
				<?php } ?>

				<?php endif; ?>
			</ul>
			
		</div>
		<div id="sidebarfooter"></div>
</div>