<?php
get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">

		<div id="postbg">
				<div id="postheader"></div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">继续阅读 &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				<?php edit_post_link('编辑', '<p>', '</p>'); ?>
			</div>
					
			
			</div>
			<div id="postfooter"></div>
		</div>
		<?php endwhile; endif; ?>
	
	
	<?php comments_template(); ?>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
