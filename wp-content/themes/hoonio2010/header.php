<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en, sv" />

<?php if(is_page('Home')) : ?>
   <title>Hoonio.com</title> 
   <meta name="omni_page" content="Hoonio - Index" /> 
   <meta name="Description" content="Hoonio.com is an ubiquitous personal web space by Seunghoon Kim, dedicated to reminiscence of the past, carpe diem and future prominence. このサイト(フニオ)はかおるくん(金昇薫-きむ,しょうクン)の個人ウェブスペイスです。よろしくお願いいたします〜" /> <?php else : ?>
<title>Hoonio.com <?php if(wp_title('', false)) { echo ' -'; } ?> <?php wp_title(''); ?></title>
<?php endif;?>
<meta name="Keywords" content="Hoonio, Vicihooni, Seunghoon Kim, 김승훈, 金昇薫, かおる, フニオ, Justino, Power deregulation, CFA, LSAT, 日本語, JLPT" /> 
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats please -->

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--SAVE PARSING TIME ?php wp_get_archives('type=monthly&format=link'); ?-->
<?php wp_head(); ?>
<style type="text/css" media="screen">
<!-- @import url( <?php bloginfo('stylesheet_url'); ?> ); -->
</style>
<link rel="stylesheet" href="http://www.hoonio.com/navigation/base.css" type="text/css" /> 
</head>

<body>
<!--HOONIO global menu START-->

	<script src="http://www.hoonio.com/navigation/shortcuts.js" type="text/javascript" charset="utf-8"></script> 

<?php if(is_page('Home')||is_page('Search Results')) : ?>
   <div id="globalheader" class="home"> 
<?php elseif(is_page('Info')) : ?>
   <div id="globalheader" class="who"> 
<?php elseif(is_page('Foto')) : ?>
   <div id="globalheader" class="foto"> 
<?php elseif(is_page('Apps')) : ?>
   <div id="globalheader" class="apps"> 
<?php else : ?>
   <div id="globalheader" class="blog"> 
<?php endif;?>
	<!--googleoff: all--> 
	<ul id="globalnav" class="menu"> 
		<li id="gn-hoonio1"><a href="http://www.hoonio.com">Hoonio1</a></li><li id="gn-hoonio2"><a href="http://www.hoonio.com">Hoonio2</a></li><li id="gn-who"><a href="http://www.hoonio.com/info">INFO</a></li><li id="gn-blog"><a href="http://www.hoonio.com/blog">BLOG</a></li><li id="gn-foto"><a href="http://www.hoonio.com/pics">FOTO</a></li><li id="gn-wiki"><a href="http://www.hoonio.com/wiki">VICI</a></li><li id="gn-apps"><a href="http://www.hoonio.com/apps">APPS</a></li> 
	</ul> 
	<!--googleon: all-->
	<div id="globalsearch"> 
		<form action="http://www.hoonio.com/search" id="cse-search-box">
			<div> 
				<input type="hidden" name="cx" value="000024434167054242448:4mot2xdzgd8" />
				<input type="hidden" name="cof" value="FORID:9" />
				<input type="hidden" name="ie" value="UTF-8" />

				<input type="hidden" value="utf-8" name="oe" id="search-oe"> 
				<input type="hidden" value="p" name="access" id="search-access"> 
				<label for="sp-searchtext"><span class="prettyplaceholder">Search</span><input type="search" name="q" id="sp-searchtext" class="g-prettysearch applesearch" accesskey="s"></label> 
			</div> 
		</form> 
		<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=en"></script>
		<div id="sp-results"><div class="inside"></div></div> 
	</div> 
</div>
<!--HOONIO global menu END-->
<div id="header" onclick="location.href='<?php echo get_settings('home'); ?>';" style="cursor: pointer;">
	</div>

     <?php if(is_page('Home')||is_page('Info')||is_page('Apps')||is_page('Foto')||is_page('Calendar')||is_page('Search Results')||is_page('Vitae')) : ?>
	<!-- do nothing-->
     <?php else : ?>
	<div id="nav">
			<div class="alignleft">
				<ul>
				<?php wp_list_categories('show_count=0&title_li=&exclude=1'); ?>
				</ul>
			</div>
	</div>
     <?php endif;?>