
</div>
<div id="footer" role="contentinfo">

<div id="basebar1" class="basebar">
    <?PHP dynamic_sidebar(2);?>
</div>
<div id="basebar2" class="basebar">
    <?PHP dynamic_sidebar(3);?>
</div>
<div id="basebar3" class="basebar">
    <?PHP dynamic_sidebar(4);?>
</div>
<div id="basebar4" class="basebar">
    <?PHP dynamic_sidebar(5);?>
</div>
    
	<p style='clear: both'>
		 <?php 
		/**
		 * This is where the credit for the theme is placed. 
		 * Credits are showed only at the first page. 
		 * Please keep the link back to the author's website.
		 * Seriously, developing this awesome theme took a lot
		 * of effort and time, weeks and weeks of voluntary unpaid work. I only ask 
		 * that you retain this link here, and you can use and/or modify the theme
		 * however you like to.
		*/
		?>
		<?php bloginfo('name'); ?><?php if(is_home() and !is_paged()) { ?> Design started with <a href="http://www.gutscheingiraffe.com/" title="Gutscheincode - Gutscheingiraffe">Gutscheincode <?php echo date('Y'); ?></a><?php } ?>, but has been utterly broken and reformed since then.<br/>
		<p>All content not otherwise attributed &copy; Nicholas Avenell 1999 to <?PHP echo date('Y') ?></p>
		<p>Background image from Morguefile.com</p>
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
		<?php wp_footer(); ?>
</div>
</body>
</html>
