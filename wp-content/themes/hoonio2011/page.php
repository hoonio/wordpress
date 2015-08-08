<?php get_header(); ?>

<div id="sub-column">

<div id="sub-top">
<?php include(TEMPLATEPATH."/scripts/breadcrumb.php");?>
</div>
<div id="sub-content">
<div class="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="page">
<!-- h1><?php the_title();?></h1-->
	<?php the_content(__('Read more'));?>
</div>
<?php endwhile; endif;?>


</div></div>

<?php get_footer(); ?>