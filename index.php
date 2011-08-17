<?php
get_header(); ?>
	<div id="content" class="narrowcolumn">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div id="postbg">
				<div id="postheader"></div>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry roundedbox">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata roundedbox"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			
				</div>
				<div id="postfooter"></div>
				
				<?PHP
				  $nonewcomments = 1;
				  $withcomments = "1";
                 comments_template();
				?>
				
			</div>
		<?php endwhile; ?>
		<div class="navigation roundedbox">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
		
		
	<?php else : ?>
	<div id="postbg">
				<div id="postheader"></div>	
				<div id="searchpost">
		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>
	 </div>
			<div id="postfooter"></div>
	</div>
	<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
