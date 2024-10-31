<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content" class="widecolumn">

			<div id="postbg">
				<div id="postheader"></div>
				

<?php get_search_form(); ?>

<h2>按月归档:</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h2>按主题归档:</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>

	</div>
	
</div>

<?php get_footer(); ?>
