<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php if(is_page('Home')) : ?>
   <title>Hoonio.com</title> 
<?php else :?>
	<title>Hoonio.com <?php if(wp_title('', false)) { echo ' -'; } ?> <?php wp_title(''); ?></title>
<?php endif;?>

<?php if(is_page('Home')||is_page('Search Results')) : ?>
   	<meta name="omni_page" content="Hoonio - Index" /> 
   	<meta name="Description" content="Hoonio.com is an ubiquitous personal web space by Seunghoon Kim, dedicated to reminiscence of the past, carpe diem and future prominence. このサイト(フニオ)はかおるくん(金昇薫-きむ,しょうクン)の個人ウェブスペイスです。よろしくお願いいたします〜" />
	<meta name="Keywords" content="Hoonio, Vicihooni, Seunghoon Kim, 김승훈, 金昇薫, かおる, フニオ, Justino, Power deregulation, CFA, LSAT, 日本語, JLPT, Trading, Violinist, Web development, Python, iPhone, Internet" /> 
<?php elseif(is_page('Info')) : ?>
   	<meta name="Description" content="About Seunghoon Kim and Hoonio.com site" /> 
	<meta name="Keywords" content="Hoonio, Vicihooni, Seunghoon Kim, 김승훈, 金昇薫, フニオ" /> 
<?php elseif(is_page('Blog')) : ?>
   	<meta name="Description" content="BLOGBLOGBLOGBLOGBLOGBLOGBLOGBLOG" /> 
	<meta name="Keywords" content="yeah~ caught in conditional" /> 
<?php elseif(is_page('Foto')||in_category(array('iFoto','iTravel'))) : ?>
   	<meta name="Description" content="Reminiscence and Voyage. Photos of Seunghoon Kim from the past." /> 
	<meta name="Keywords" content="Hoonio, Seunghoon Kim, 김승훈, 金昇薫, フニオ, Voyage, Seoul, ソウル, 서울, 東京, Tokyo, London, Chicago" /> 
<?php elseif(is_page('Work')) : ?>
   	<meta name="Description" content="List of services available for hire by Hoonio.com and Seung hoon Kim" /> 
	<meta name="Keywords" content="web programming, web design, mobile application development, violin performance, event planning, pedagogy, tutoring, financial analysis, html, php, css, python, objective-c" /> 
<?php else :?>
   	<meta name="Description" content="Hoonio.com blog. Capturing days of our lives." /> 
	<meta name="Keywords" content="chronicle, reflection, announcement, development release note, engineering report, learning outcome, academic planning, music streaming" /> 
<?php endif;?>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />


<?php $style = get_option('highlight_color');?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.php?style=<?php echo $style;?>" type="text/css" media="screen" />
<!--link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /-->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<!--[if IE]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie.css" type="text/css" media="screen" />
<![endif]-->
<?php if(is_page('Foto')||is_page('Home')||is_page('Info')||is_category(array('iFoto','iTravel'))) : ?>
	</head>
	<body>		
<?php else : ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/keynote.js"></script>
	</head>
	<body onload='WindowLoaded(event);'>		
<?php endif;?>
	<!--HOONIO global menu START-->

	<?php if(is_page('Home')||is_page('Search Results')) : ?>
	   <div id="globalheader" class="home"> 
	<?php elseif(is_page('Info')||is_page('Calendar')||is_page('Vitae')) : ?>
	   <div id="globalheader" class="info"> 
	<?php elseif(is_page('Blog')) : ?>
	   <div id="globalheader" class="blog"> 
	<?php elseif(is_page('Foto')||is_category(array('iFoto','iTravel'))) : ?>
	   <div id="globalheader" class="foto"> 
	<?php elseif(is_page('Work')) : ?>
	   <div id="globalheader" class="work"> 
	<?php elseif(is_page('Wall')) : ?>
	   <div id="globalheader" class="wall"> 
	<!-- ?php elseif(in_category(array('iFoto','iTravel'))) : ?>
	   <div id="globalheader" class="foto"--> 
	<?php else : ?>
	   <div id="globalheader" class="blog"> 
	<?php endif;?>

	<!--googleoff: all--> 
	<ul id="globalnav" class="menu"> 
		<li id="gn-hoonio"><a href="http://www.hoonio.com" title="Hoonio.com Home">Hoonio</a></li> 
		<li id="gn-info"><a href="http://www.hoonio.com/info" title="About Me & the Site">INFO</a></li> 
		<li id="gn-blog"><a href="http://www.hoonio.com/blog" title="Chronicles & Reflections">BLOG</a></li> 
		<li id="gn-foto"><a href="http://www.hoonio.com/foto" title="Photography">FOTO</a></li> 
		<li id="gn-wiki"><a href="http://www.hoonio.com/wiki/Main_Page" title="Knowledge & Repository">VICI</a></li> 
		<li id="gn-work"><a href="http://www.hoonio.com/work" title="Portfolio & Repertoire">WORK</a></li> 
		<li id="gn-wall"><a href="http://www.hoonio.com/wall" title="Social Network">WALL</a></li> 
	</ul> 
	<!--googleon: all-->
	<div id="globalsearch"> 
		<form action="http://www.hoonio.com/search" id="cse-search-box">
			<div> 
				<input type="hidden" name="cx" value="partner-pub-5182625953902291:mp31b8-yoo0" />
				<input type="hidden" name="cof" value="FORID:9" />
				<input type="hidden" name="ie" value="UTF-8" />

				<input type="hidden" value="utf-8" name="oe" id="search-oe"> 
				<input type="hidden" value="p" name="access" id="search-access"> 
				<label for="sp-searchtext"><span class="prettyplaceholder">Search</span><input type="search" name="q" id="sp-searchtext" class="g-prettysearch applesearch" accesskey="s"></label> 
			</div> 
		</form> 
		<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=en"></script>
		<div id="sp-results"><div class="inside"></div></div> 
	</div></div>
<!--HOONIO global menu END-->
