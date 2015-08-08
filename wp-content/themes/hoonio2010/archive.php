<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="blog"><h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1><p></p>
	<?php the_content(__('Read more'));?>
 	
	<div id="meta">
	<p>Posted on <?php the_time('F j, Y'); ?> | Filed Under <?php the_category(', ') ?> | <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?> | <?php edit_post_link('Edit','<span class="edit">','</span>'); ?></p></div></div>   

	<!--
	<?php trackback_rdf(); ?>
	-->
	
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	<p><center><?php posts_nav_link(' &#8212; ', __('&laquo; Later Posts'), __('Earlier Posts &raquo;')); ?></center></p>
	
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>