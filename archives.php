<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content" class="widecolumn">

			<div class="postbg">
				<div id="postheader"></div>
				
<div style="width: 49%; float: right; position: relative; top: -10px; right: -5px; " class="roundedbox">
	<h2>Archives by Month</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
</div>


<div style="padding-top: 5px; padding-left: 1em;">
<h2>Archives by Category</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>

	<br  style="clear: both;" />

	</div>
	
</div>
</div>


<?php get_footer(); ?>
