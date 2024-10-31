<?php
get_header();
?>

	<div id="content" class="narrowcolumn" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<div id="postbg">
				<div id="postheader"></div>
				

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

				<p class="postmetadata alt">
					<small>
						<?php the_time('Y F j') ?><?php the_time() ?>
						发表在 <?php the_category(', ') ?>.
						<?php post_comments_feed_link('RSS 2.0'); ?>.

						<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							<a href="#respond">评论</a>, <a href="<?php trackback_url(); ?>" rel="trackback">引用</a>

						<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.

						<?php } edit_post_link('编辑','','.'); ?>

					</small>
				</p>

			</div>
			
			
			</div>
					<div id="postfooter"></div>
		</div>

	<?php comments_template(); ?>
	</div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	
<?php get_sidebar(); ?>

<?php get_footer(); ?>