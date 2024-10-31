<?php
get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">

	<?php if (have_posts()) : ?>

		<div id="postbg">
				<div id="postheader"></div>
				<div id="searchpost">
		<h2 class="pagetitle">搜索结果</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; 上一页') ?></div>
			<div class="alignright"><?php previous_posts_link('下一页 &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div id="test">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>的永久链接"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, F jS, Y') ?></small>

				<p class="postmetadata"><?php the_tags('标签: ', ', ', '<br />'); ?> 发表于 <?php the_category(', ') ?> | <?php edit_post_link('编辑', '', ' | '); ?>  <?php comments_popup_link('无评论 &#187;', '1 条评论 &#187;', '% 条评论 &#187;'); ?></p>
			</div>
			
			
			

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; 上一页') ?></div>
			<div class="alignright"><?php previous_posts_link('下一页 &raquo;') ?></div>
		</div>

	<?php else : ?>
	
		<div id="postbg">
				<div id="postheader"></div>
				<div id="searchpost">

		<h2>没有搜索到，建议更换关键词重新搜索！</h2>
		<?php get_search_form(); ?>
		
		

	<?php endif; ?>

	
	
		 </div>
		 
				<div id="searchfooter"></div>
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
