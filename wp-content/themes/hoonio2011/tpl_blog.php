<?php
/*
Template Name: Frontpage
*/
?>
<?php get_header(); ?>
<div id="wrapper">
	<div id="slide-wrapper">
      <ul id="slideshow">

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/slider.js"></script>
	<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
	if (get_option('feat_cat')) {
	$category = get_option('feat_cat');
	} else {
	$category = 0;
	}
	query_posts("cat=$category&paged=$page&showposts=10");
	while ( have_posts() ) : the_post() ?>

	
	 		<li>
			<h3><a href="<?php the_permalink();?>" title="<?php _e("Permanent Link to"); ?>"><?php the_title();?></a></h3>
			<span><?php $values = get_post_custom_values("Featured"); if(isset($values)) { ?><?php echo $values[0]; ?><?php } else { ?><?php bloginfo('template_directory'); ?>/images/add-feat.jpg<?php }?></span>
                  <p><span class="date">Published <?php the_time('j. F Y'); ?> at  <?php the_time( $d ); ?>  - <?php comments_number('No Comments','One Comment','% Comments'); ?></span><br/><br/>
			<?php $chars = get_option('front-chars');?>
			<?php the_slider_limit(300); ?></p>
			
                  <?php 
			$values = get_post_custom_values("Featured");
			$pathtemp = get_theme_root()."/hoonio2011";
			if(is_writeable($pathtemp)) {
			if(isset($values)) {
			?>
			<a href="<?php the_permalink();?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $values[0]; ?>&h=75&w=100&zc=1" alt=""> </a>		
			<?php
			} else {
			?>
			<a href="<?php the_permalink();?>"><img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php bloginfo('template_directory'); ?>/images/add-feat.jpg&h=75&w=100&zc=1" alt=""> </a>		
                  <?php
			} 
			} elseif (isset($values)) {
			?>
			<a href="<?php the_permalink();?>"><img src="<?php echo $values[0]; ?>" width="100" height="75" alt=""> </a>		
			<?php
			} else {
			?>
			<a href="<?php the_permalink();?>"><img src="<?php bloginfo('template_directory'); ?>/images/add-feat.jpg" width="100" height="75" alt=""> </a>		
                  <?php
			}
			?>
			
			</li> 	                    	 
                  	  	
      
   <?php endwhile;?>         	 
                  	  	                  	   
               </ul>
      <div id="image-wrapper">
            <div id="full-image">
                  <div id="imgprev" class="imgnav"></div>
                  <div id="imglink"></div>

                  <div id="imgnext" class="imgnav"></div>
                  <div id="image"></div>
                  <div id="text">
                        <h3></h3>
                        <p></p>
                  </div>
            </div>
            <div id="thumbs">
                  <div id="arrowleft"></div>

                  <div id="frontarea">
                        <div id="fronter"></div>
                  </div>
                  <div id="arrowright"></div>
            </div>
      </div>
      <script type="text/javascript">
	$('slideshow').style.display='none';
	$('image-wrapper').style.display='block';
	var slideshow=new SLIDE.slideshow("slideshow");
	window.onload=function(){
		slideshow.auto=true;
		slideshow.speed=6;
		slideshow.link="linkhover";
		slideshow.info="text";
		slideshow.thumbs="fronter";
		slideshow.left="arrowleft";
		slideshow.right="arrowright";
		slideshow.scrollSpeed=2;
		slideshow.spacing=20;
		slideshow.active="#fff";
		slideshow.init("slideshow","image","imgprev","imgnext","imglink");
	}
</script>
</div> </div>
<div id="big-column">
<div id="column-top">
</div>
<div id="column-content">

<div class="latest-tweets">
<h2>Tweets</h2>
<span class="desc"><h3>Latest announcements from Hoonio.com</h3></span>
<p><?php include("/home/content/h/o/o/hoonio/html/blog/wp-content/themes/hoonio2011/tweet.php"); ?></p>
</div>

<div class="latest-posts">
<h2>Follow</h2>
<span class="desc"><h3>Stay up to date with H00NIO</h3></span>
<div id="front-icon"><a href="http://www.facebook.com/H00NIO?ref=profile"><img class="alignnone size-thumbnail wp-image-1084" title="Connect on Facebook" src="http://www.hoonio.com/blog/uploads/facebook-logo-150x150.png" alt="" width="70" height="70" /></a></div><div id="front-icon"><a href="http://twitter.com/H00NIO"><img class="alignnone size-thumbnail wp-image-1086" title="Follow on Twitter" src="http://www.hoonio.com/blog/uploads/twitter_logo-150x150.png" alt="" width="70" height="70" /></a></div><div id="front-icon"><a href="http://www.hoonio.com/feed"><img src="http://www.hoonio.com/blog/uploads/rss-syndicate_interlaced-150x150.png" alt="" title="Subscribe to RSS" width="70" height="70" class="alignnone size-thumbnail wp-image-2170" /></a>
</div>

<h2>Categories</h2>
<span class="desc"><h3>Blog category sections</h3></span>
<ul class="latest-posts">
	<li><a href="http://www.hoonio.com/blog/topics/iannounce/" title="View all posts filed under iAnnounce">iAnnounce</a><span class="date">Announcements from me & on behalf of the site</span></li>
	<li><a href="http://www.hoonio.com/blog/topics/iconstruct/" title="View all posts filed under iConstruct">iConstruct</a><span class="date">All my productions including designs and programming</span></li>
	<li><a href="http://www.hoonio.com/blog/topics/ifoto/" title="View all posts filed under iFoto">iFoto</a><span class="date">Photographies from facebook</span></li>
	<li><a href="http://www.hoonio.com/blog/topics/ilearn/" title="View all posts filed under iLearn">iLearn</a><span class="date">Own learning curve and How-to's on everything else</span></li>
	<li><a href="http://www.hoonio.com/blog/topics/istream/" title="View all posts filed under iStream">iStream</a><span class="date">Music streaming on demand</span></li>
	<li><a href="http://www.hoonio.com/blog/topics/ireflect/" title="View all posts filed under iThink">iReflect</a><span class="date">Personal reflections and thoughts on current affair</span></li>
	<li><a href="http://www.hoonio.com/blog/topics/itravel/" title="View all posts filed under iTravel">iTravel</a><span class="date">Travel logs and media records</span></li>
</ul>

</div>

</div>

<?php get_footer(); ?>
