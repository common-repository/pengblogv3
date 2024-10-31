<?php
get_header(); ?>
	<div id="content" class="narrowcolumn">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div id="postbg">
				<div id="postheader" class="pngpic"></div>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('标签: ', ', ', '<br />'); ?> 发表于 <?php the_category(', ') ?> | <?php edit_post_link('编辑', '', ' | '); ?>  <?php comments_popup_link('无评论 &#187;', '1 条评论 &#187;', '% 条评论 &#187;'); ?></p>
			
				</div>
				<div id="postfooter"></div>
			</div>
		<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	<?php else : ?>
	<div id="postbg">
				<div id="postheader"></div>	
				<div id="searchpost">
		<h2>错误！</h2>
		<p>没要找到你需要的内容，建议搜索一下！</p>
		<?php get_search_form(); ?>
	 </div>
			<div id="postfooter"></div>
	</div>
	<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
