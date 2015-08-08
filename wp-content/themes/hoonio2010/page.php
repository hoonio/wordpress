<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if(is_page('Home')||is_page('Info')||is_page('Foto')||is_page('Apps')) : ?>
   <!-- do nothing: no title header needed-->
<?php else : ?>
   <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<?php endif;?>
	<?php the_content(__('Read more'));?>

	<!--
	<?php trackback_rdf(); ?>
	-->
	
	<?php endwhile; else: ?><?php endif; ?>
	<p><?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?></p>
	
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>