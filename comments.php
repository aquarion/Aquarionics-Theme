<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to twentyten_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

			<div class="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?></p>
			</div><!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php
	// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
			</div> <!-- .navigation -->
<?php endif; // check for comment navigation ?>

			<ol class="commentlist">
<?php 

foreach ($comments as $comment) : ?>
<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
<cite>
<?php echo get_avatar(get_comment_author_email(), 64) ?>
<span class="author"><?php comment_author_link() ?></span><br /><span class="time"><?php comment_time() ?></span> on <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?></a> <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?>
</cite>
<div class="commenttext"><?php comment_text() ?></div>
<?php if ($comment->comment_approved == '0') : ?>
<em>Your comment is awaiting moderation.</em>
<?php endif; ?>
</li>
<?php
/* Changes every other comment to a different class */
$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
?>
<?php endforeach; /* end for each comment */ ?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
			</div><!-- .navigation -->
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	if ( ! comments_open() ) :
?>
	
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

<?php 

if (!is_home()) { 
    ?><div class="roundedbox"><?PHP
    comment_form();
    ?></div><?PHP     
} ?>

</div><!-- #comments -->
