<div class="breadcrumb">
  <?php if (is_tag() ) { ?>
  <ul>Currently viewing: <a href="#" rel="bookmark" title="Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;">Posts Tagged &#8216;
    <?php single_tag_title(); ?>
    &#8217;</a> &nbsp; Also check out: <?php wp_list_categories('show_count=0&title_li=&exclude=0'); ?></ul>
  <?php } ?>
  <?php if (is_category()) { ?>
  <ul>Currently viewing: <a href="#" title="<?php single_cat_title(); ?>">
    <?php single_cat_title(); ?>
    </a> &nbsp; Also check out: <?php wp_list_categories('show_count=0&title_li=&exclude=0'); ?></ul>
  <?php } ?>
  <?php if (is_page()) { ?>
  <p> <?php
	global $wp_query;
	if (empty($wp_query->post->post_parent) ) {
		$parent = $wp_query->post->ID;
		echo '';
	} else if (is_page('Home')) {
		$parent = $wp_query->post->post_parent;
		echo 'Welcome back to Hoonio.com';
	} else {
		$parent = $wp_query->post->post_parent;
		echo '<a href="'.get_permalink($parent).'">'.get_the_title($parent).'</a> &raquo;';
	}
?>
    <a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
    <?php the_title(); ?>
    </a></p>
  <?php } ?>
  <?php if (is_single()) { ?>
  <ul>Currently viewing: <?php the_category(', ') ?> &raquo; <a href="<?php echo get_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
    <?php the_title(); ?>
    </a> &nbsp; Also check out: <?php wp_list_categories('show_count=0&title_li=&exclude=0'); ?></ul>	
  <?php } ?>
  <?php if (is_search()) { ?>
  <p> <a href="<?php bloginfo('siteurl'); ?>" title="home"><span>home</span></a></p>
  <?php } ?>
  <?php if (is_404()) { ?>
  <p> <a href="#" title="404 Error page">404 Error</a></p>
  <?php } ?>
  <?php if (is_year()) { ?>
  <p> <a href="<?php bloginfo('siteurl'); ?>/blog" title="archives"><span>archives</span></a> &raquo; <a href="#" title="Year">
    <?php the_time('Y'); ?>
    </a></p>
  <?php } ?>
  <?php if (is_month()) { ?>
  <p> <a href="<?php bloginfo('siteurl'); ?>/blog" title="archives"><span>archives</span></a> &raquo; <a href="#" title="Month">
    <?php the_time('F, Y'); ?>
    </a></p>
  <?php } ?>
  <?php if (is_day()) { ?>
  <p> <a href="<?php bloginfo('siteurl'); ?>/blog" title="archives"><span>archives</span></a> &raquo; <a href="#" title="Month">
    <?php the_time('F jS, Y'); ?>
    </a></p>
  <?php } ?>
</div>