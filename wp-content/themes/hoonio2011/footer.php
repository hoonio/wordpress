<div id="footer">

	<?php wp_loginout(); ?>

<span class="footer-right">Copyright 
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
Hoonio Ltd. All rights reserved.
</span>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
