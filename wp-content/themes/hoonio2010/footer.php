<!-- begin footer -->

<?php if(is_page('Home')) : ?>
   <!--do nothing--> 
<?php elseif(is_page('Seunghoon')) : ?>
   <div id="footer">
	<ul>
	<?php wp_loginout(); ?>&nbsp<?php wp_meta(); ?>&nbsp;<?php wp_register(); ?>
 	</ul>
   </div>
<?php else : ?>
   <div id="footer">
	<ul>
	<?php wp_loginout(); ?>
 	</ul>
   </div>
<?php endif;?>


<div style="clear:both;"></div>
<div style="clear:both;"></div>

<div id="credits">
	<p>Copyright 
<?php global $wpdb;
	$post_datetimes = $wpdb->get_row($wpdb->prepare("SELECT YEAR(min(post_date_gmt)) AS firstyear, YEAR(max(post_date_gmt)) AS lastyear FROM $wpdb->posts WHERE post_date_gmt > 1970"));
	if ($post_datetimes) {
		$firstpost_year = $post_datetimes->firstyear;
		$lastpost_year = $post_datetimes->lastyear;
		$copyright = '&copy; ' . $firstpost_year;
		if($firstpost_year != $lastpost_year) {
			$copyright .= '-'. $lastpost_year;}
		$copyright .= ' ';
		echo $copyright;}?> 
Hoonio.com. All rights reserved.</p>

</div>

<?php do_action('wp_footer'); ?>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-3890189-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>