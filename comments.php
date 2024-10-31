<?php
/* 评论模板.*/
?>

			<div class="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.'); ?></p>
			</div><!-- #comments -->
<?php
		return;
	endif;
?>

<?php
	// 以下是可编辑区域
?>

<?php if ( have_comments() ) : ?>
			<h3 id="comments"><?php
			printf( _n( '1个朋友评论了 %2$s', '%1$s 个朋友评论了 %2$s', get_comments_number()),
			number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> 较早的评论') ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( '较新的评论 <span class="meta-nav">&rarr;</span>') ); ?></div>
			</div> <!-- .navigation -->
<?php endif; // check for comment navigation ?>

			<ol class="commentlist">
				<?php wp_list_comments(); ?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> 较早的评论') ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( '较新的评论 <span class="meta-nav">&rarr;</span>') ); ?></div>
			</div><!-- .navigation -->
<?php endif; ?>

<?php else :  

	if ( ! comments_open() ) :
?>
	
<?php endif; ?>

<?php endif;  ?>
<?php
	// This is stupid fields customization
	function zbench_comment_fields ($fields) {
		foreach ($fields as $name => $field) {
			$fields[$name] = preg_replace('/(<label(?:.*?)>(?:.*?)<\/label>)\s*(<span class="required">\*<\/span>)?\s*(<input(?:.*?)\/>)/','\3\1\2',$field);
		}
		return $fields;
	}
	add_filter('comment_form_default_fields', 'zbench_comment_fields');
?>

<?php comment_form(); ?>

</div><!-- #comments -->
