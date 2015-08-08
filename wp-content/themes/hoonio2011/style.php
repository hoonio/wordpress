<?php
header('Content-type: text/css');
header("Cache-Control: must-revalidate");

$pattern    =   '/^[^a-z0-9]{6}$/';
if (preg_replace('/[^a-z0-9]/i', '', $_GET['style']) && isset($_GET['style'])) {
$color = $_GET["style"];
} else {
$color = "9d60c1";
}
?>
/*  
Theme Name: Hoonio 2011
Theme URI: 
Description: Hoonio 2011 is a theme specialized specifically for Hoonio.com, and based on hoonio2011(http://www.wp-themix.org)
Version: 1.0a
Author: Hoonio
Author URL: http://www.hoonio.com/
*/

/* General Styles */


html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
margin: 0;
padding: 0;
border: 0px;
outline: 0px;
font-size: 100%;
vertical-align: baseline;
background: transparent;
}

body {
line-height: 1;
background: #F3F3F3;
}

ol, ul {
list-style: none;
}
blockquote, q {
quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
content: '';
content: none;
}

:focus {
outline: 0;
}

ins {
text-decoration: none;
}

del {
text-decoration: line-through;
}

/************************************************
*	Hoonio menu									*
************************************************/

/* LAYOUT */
.clear { clear: both; }
.clearer { clear: both; display: block; margin: 0; padding: 0; height: 0; line-height: 1px; font-size: 1px; }

/* PRETTY SEARCH */
input.prettysearch { width:200px; height: 16px; background: url(searchfield_repeat.png) center top repeat-x; border: 0px; margin: 0; padding: 3px 0 0 0; font: 11px "Lucida Grande", "Lucida Sans Unicode", Arial, sans-serif; }
.search-wrapper { position: relative; width: 200px; }
.search-wrapper input.prettysearch { width: 171px; margin-left: 20px; margin-top:-1px; margin-right:-2px; margin-left:10px; }
.search-wrapper .left { display: block; position: absolute; left: 0; top: 0; width: 20px; height: 19px; background: url(searchfield_leftcap.png) left top no-repeat; }
.search-wrapper .right { display: block; position: absolute; right: 0; top: 0; width: 10px; height: 19px; background: url(searchfield_rightcap.png) right top no-repeat; }
.search-wrapper.empty.blurred input { color: #7e7e7e; }
.search-wrapper .reset { position: absolute; width: 11px; height: 11px; overflow:hidden; z-index: 1; right: 4px; top: 4px; background: url(close.gif); display: block; cursor: pointer; cursor:hand; }
.search-wrapper.empty .reset { display: none; }
label .prettyplaceholder { display: block; overflow: hidden; text-indent: -9999px; height: 0; width: 0;}

/* GLOBALHEADER */
#globalheader { width: 982px; height: 38px; margin: 18px auto; position: relative; z-index: 4998; }
#globalheader #globalnav { margin: 0; padding: 0; }
#globalheader #globalnav li { display: inline; }
#globalheader #globalnav li a { float: left; width: 117px; height: 0; padding-top: 38px; overflow: hidden; }
#globalheader #globalnav li a,
#globalheader #globalsearch { background-image: url(http://www.hoonio.com/blog/wp-content/themes/hoonio2011/images/globalnavbg.png); _background-image: url(http://www.hoonio.com/blog/wp-content/themes/hoonio2011/images/globalnavbg.gif); background-repeat: no-repeat; }

/* BUTTONS */
#globalheader #globalnav li#gn-hoonio a { background-position: 0 0; }
#globalheader #globalnav li#gn-info a { background-position: -117px 0; }
#globalheader #globalnav li#gn-blog a { background-position: -234px 0; }
#globalheader #globalnav li#gn-foto a { background-position: -351px 0; }
#globalheader #globalnav li#gn-wiki a { background-position: -468px 0; }
#globalheader #globalnav li#gn-work a { background-position: -585px 0; }
#globalheader #globalnav li#gn-wall a { background-position: -702px 0; }

/* OVER STATES */
#globalheader #globalnav li#gn-hoonio a:hover { background-position: -0px -38px; }
#globalheader #globalnav li#gn-info a:hover { background-position: -117px -38px; }
#globalheader #globalnav li#gn-blog a:hover { background-position: -234px -38px; }
#globalheader #globalnav li#gn-foto a:hover { background-position: -351px -38px; }
#globalheader #globalnav li#gn-wiki a:hover { background-position: -468px -38px; }
#globalheader #globalnav li#gn-work a:hover { background-position: -585px -38px; }
#globalheader #globalnav li#gn-wall a:hover { background-position: -702px -38px; }

/* PRESSED STATES */
#globalheader #globalnav li#gn-hoonio a:active { background-position: 0 -76px; }
#globalheader #globalnav li#gn-info a:active { background-position: -117px -76px; }
#globalheader #globalnav li#gn-blog a:active{ background-position: -234px -76px; }
#globalheader #globalnav li#gn-foto a:active { background-position: -351px -76px; }
#globalheader #globalnav li#gn-wiki a:active { background-position: -468px -76px; }
#globalheader #globalnav li#gn-work a:active { background-position: -585px -76px; }
#globalheader #globalnav li#gn-wall a:active { background-position: -702px -76px; }

/* ON STATES */
#globalheader.main #globalnav li#gn-hoonio a:hover { background-position: 0 0; cursor: default; }
#globalheader.info #globalnav li#gn-info a { background-position: -117px -114px !important; }
#globalheader.blog #globalnav li#gn-blog a { background-position: -234px -114px !important; }
#globalheader.foto #globalnav li#gn-foto a { background-position: -351px -114px !important; }
#globalheader.wiki #globalnav li#gn-wiki a { background-position: -468px -114px !important; }
#globalheader.work #globalnav li#gn-work a { background-position: -585px -114px !important; }
#globalheader.wall #globalnav li#gn-wall a { background-position: -702px -114px !important; }

/* Testing everywhere search */
input[type=search].not-round { /*background: #ABABAB;*/ height: 19px; outline: none; -webkit-border-radius: 9px; -webkit-border-image: url(images/searchfield_border.png) 2 2 2 2 stretch stretch; width: 200px; }

/* GLOBAL SEARCH */
#globalsearch { width: 163px; height: 38px; position: absolute; top: 0; right: 0; background-position: 100% 0; background-repeat: no-repeat; }
#globalsearch.active { background-position: 100% -38px; }
#globalsearch input.g-prettysearch, #globalsearch .search-wrapper input.g-prettysearch {background: url(images/searchfield_repeat.png) center top repeat-x; }
#globalsearch input.g-prettysearch { width:140px; height: 16px; margin-top: 9px; margin-left: 11px; }
#globalsearch .search-wrapper { position: relative; width: 140px; margin-top: 9px; margin-left: 11px; }
#globalsearch .search-wrapper input.g-prettysearch { width: 110px; margin-left: 20px; margin-top:-1px; margin-right:-2px; margin-left:10px; }
#globalsearch .search-wrapper .left, 
#globalsearch .search-wrapper .left { display: block; position: absolute; left: 0; top: 0; width: 20px; height: 19px; background: url(images/searchfield_leftcap.png) left top no-repeat; }
#globalsearch .search-wrapper .right { display: block; position: absolute; right: 0; top: 0; width: 10px; height: 19px; background: url(images/searchfield_rightcap.png) right top no-repeat; }
#globalsearch .search-wrapper.empty.blurred input { color: #7E7E7E; }
#globalsearch .search-wrapper .reset { position: absolute; width: 11px; height: 11px; overflow:hidden; z-index: 1; right: 4px; top: 4px; background: url(close.gif); display: block; cursor: pointer; cursor:hand; }
#globalsearch .search-wrapper.empty .reset { display: none; }
#globalsearch .search-wrapper input.g-prettysearch { position: absolute; width: 110px; top: 0; right: 10px; border: 0px; margin: 0; padding: 3px 0 0 0; font: 11px "Lucida Grande", Arial, sans-serif; }
#globalsearch label .prettyplaceholder { display: block; overflow: hidden; text-indent: -9999px; height: 0; width: 0;}

#globalsearch input[type=search].not-round { background: #ABABAB; height: 19px; outline: none; -webkit-border-radius: 9px; -webkit-border-image: url(images/searchfield_border.png) 2 2 2 2 stretch stretch; width: 133px; }

/* SEARCH SHORTCUTS */
#cse-search-results { position: absolute; margin-right: 0; margin-bottom: 0; margin-left: 0; top: 100px; left: 90px; height: 0; }

/* PRINT */
@media print {
	body, #main, #content { color: #000 !important; }
	a, a:link, a:visited { color: #000 !important; text-decoration:none !important; }
	#tabs, #globalheader, #globalfooter, #directorynav, .noprint, .hide { display: none !important; }
	#main a.pdf, #main a.html, #main a.qt, #main a.ical, #main a.dl, #main a.dmg, #main a.zip, #main a.keynote, #main a.audio { padding-left: 0 !important; background-image: none !important; }
}

/* iPhone */
@media screen and (max-device-width: 480px) { html { -webkit-text-size-adjust: none; } }


/************************************************
*	Lightbox & Facebook photo fetcher			*
************************************************/

#jquery-overlay {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 5190;
	width: 100%;
	height: 500px;
}
#jquery-lightbox {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 5200;
	text-align: center;
	line-height: 0;
}
#jquery-lightbox a img { border: none; }
#lightbox-container-image-box {
	position: relative;
	background-color: #fff;
	width: 250px;
	height: 250px;
	z-index: 5210;
	margin: 0 auto;
}
#lightbox-container-image { padding: 10px; 	z-index: 5220;}
#lightbox-loading {
	position: absolute;
	top: 40%;
	left: 0%;
	height: 25%;
	width: 100%;
	text-align: center;
	line-height: 0;
}
#lightbox-nav {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	z-index: 5110;
}
#lightbox-container-image-box > #lightbox-nav { left: 0; }
#lightbox-nav a { outline: none;}
#lightbox-nav-btnPrev, #lightbox-nav-btnNext {
	width: 49%;
	height: 100%;
	zoom: 1;
	display: block;
}
#lightbox-nav-btnPrev { 
	left: 0; 
	float: left;
}
#lightbox-nav-btnNext { 
	right: 0; 
	float: right;
}
#lightbox-container-image-data-box {
	font: 10px Verdana, Helvetica, sans-serif;
	background-color: #fff;
	margin: 0 auto;
	line-height: 1.4em;
	overflow: auto;
	width: 100%;
	z-index: 5210;
	padding: 0 10px 0;
}
#lightbox-container-image-data {
	padding: 0 10px; 
	color: #666; 
}
#lightbox-container-image-data #lightbox-image-details { 
	width: 70%; 
	float: left; 
	text-align: left; 
}	
#lightbox-image-details-caption { font-weight: bold; }
#lightbox-image-details-currentNumber {
	display: block; 
	clear: left; 
	padding-bottom: 1.0em;	
}			
#lightbox-secNav-btnClose {
	width: 66px; 
	float: right;
	padding-bottom: 0.7em;	
}

.gallery-item {
    float: left;
    margin-top: 6px; 
    text-align: center;
}

.gallery-icon img {
    padding:5px;
    background-color:#ffffff;
    border: 1px solid #ccc;
}

.gallery-caption {
    margin-left: 0;
    font-size: 75%;
    line-height:100%;
}

.fpfcredit{
    margin-top: 0;
    font-size:60%;
    color: #CCCCCC;
}

/************************************************
*	Hyperlinks									*
************************************************/


a, a:visited{
color: #<?php echo $color;?>;
text-decoration: none;
}

a img {border: none; } /*IE fix*/

a:hover {
color: #<?php echo $color;?>;
text-decoration: underline;
}

a:visited {
color: #<?php echo $color;?>;
text-decoration: none;
}

body {
font-size: 12px;
font-family: Tahoma, Geneva, sans-serif;
line-height:18px;
}

blockquote {
color: #CCC;
font-size: 11px;
font-style: italic;
}

h1, h2, h3 {
color: #9d60c1;
}

address, caption, cite, code, dfn, em, strong, th, var {
font-style: normal;
//font-weight: normal;
}

table {
border-collapse: collapse;
border-spacing: 0;
}
fieldset, img {
border: 0;
}
caption, th {
text-align: left;
}
q:before, q:after {
content: '';
}
abbr {
border:0;
}

#wrapper {
width:980px;
margin:0 auto;
}
		
#topmenu {
margin-top: 5px;
float: right;
clear: both;
}

#header {
float: left;
width: 980px;
height: 100px;
}


/* Slideshow Styles */

#slide-wrapper {
background: url(images/slider-bg.gif) no-repeat;
width: 976px;
height: 365px;
margin-top: 10px;
padding-top:5px;
z-index:1;
margin-left: 0px;
clear: both;
float: left;
margin-bottom: 5px;
}

.featurebox {
width: 976px;
height: 365px;
clear:both;
margin:auto;
}


#image-wrapper {
margin:0 auto;
display:none;
padding:0;
width: 976px;
}

#image-wrapper * {
margin:0;
padding:0;
}
	
#full-image {
position:relative;
padding:0;
width: 915px;
}

.frontslide {
display: none;
}

#text {
float:right;
position:absolute;
top:10px;
width:455px;
height:0;
color:#FF0000;
overflow:hidden;
z-index:4;
padding:5px;
left: 490px;
}

#text h3 a {
padding:3px 0 10px 3px;
color: #<?php echo $color;?>;
font-size: 18px;
font-weight:bold;
letter-spacing:-1px;
text-decoration: none;
}

#text h3 a:hover {
text-decoration: underline;
}

#text p {
padding:0 0 5px 3px;
color:#6e6e6e;
float:right;
font-size:12px;
text-align: justify;
margin: 5px;
}

#text p a {
color:#993399;
}

.date {
color:#9d9c9c;
font-size: 10px;
font-style: italic;
}


#image {
width:440px;
height:250px;
}

#image img {
position:absolute;
z-index:2;
width:440px;
height:200px;
left:20px;
top:10px;
border:2px solid #bfbfbf;
}

.imgnav {
position:absolute;
width:25%;
height:180px;
cursor:pointer;
z-index:3;
}

#imgprev {left:0;background:none;}
#imgnext {right:0;background:none;}

#imglink {
position:absolute;
height:150px;
width:100%;
z-index:5;
opacity:0.4;
filter:alpha(opacity=40);
}

.linkhover { }


/* captions */
.aligncenter,div.aligncenter {
	display:block;
	margin-left:auto;
	margin-right:auto;
}
.alignleft {
float: left;
}

.alignright {
float: right;
}

.wp-caption {
	text-align:center;
	padding-top:4px;
	margin:10px;
}
.wp-caption img {
	margin:0;
	padding:0;
	border:0 none;
}
.wp-caption p.wp-caption-text {
	font-size:.8em;
	padding:0 4px 5px;
	margin:0;
}

#thumbnails {margin-top:20px;height:38px;}

#arrowleft {
float:left;
width:26px;
height:49px;
background:url(images/left.gif) top center no-repeat;
padding-left:40px;
margin-top: 30px;
z-index:6;
}

#slideleft:hover {}

#arrowright {
float:right;
width:26px;
height:49px;
background:url(images/right.gif) top center no-repeat;
padding-right:40px;
margin-top: 30px;
z-index:7;
}

#slideright:hover {	}

#frontarea {
float:left;
position:relative;
width:835px;
margin-left:3px;
height:100px;
overflow:hidden;
}

#frontarea {margin-left:0;}

#fronter {
position:absolute;
left:0;
height:100px;
top: 10px;
}

#fronter img {
cursor:pointer;
border:2px solid #<?php echo $color;?>;
}

/* Frontpage Column Styles */

#big-column {
width: 980px;
margin: 0px auto;
}

#column-top {
background: url(images/top-column.gif) no-repeat;
width: 980px;
height: 9px;
float: left;
margin-left: 0px;
}

#column-content {
background: url(images/center-column.gif) repeat-y;
width: 980px;
float: left;
padding-bottom: 20px;
padding-left: 20px;
margin-left: 0px;
}

/* Featured Posts & Articles on Frontpage */

.feat-post {
width: 300px;
padding: 10px 10px 10px 20px;
float: left;
}

.feat-post h2 {
font-size: 18px;
text-decoration: none;
color: #6e6e6e;
}

.feat-post h2 a {
text-decoration: none;
color: #6e6e6e;
}

.feat-post h2 a:hover {
text-decoration: none;
color: #<?php echo $color;?>;
}

.desc h3 {
font-size: 10px;
font-style: italic;
color: #<?php echo $color;?>;
font-weight: normal;
clear:both;
border-bottom: 1px solid #b1b1b1;
}

.feat-post p {
text-align: justify;
color: #6e6e6e;
margin-top: 15px;
}

.feat-post img {
margin-top: 20px;
border: 1px solid #<?php echo $color;?>;
}

.latest-posts {
width: 275px;
padding: 10px 10px 10px 20px;
float: left;
}

.latest-posts h2 {
font-size: 18px;
text-decoration: none;
color: #6e6e6e;
}

.latest-posts h2 a {
text-decoration: none;
color: #6e6e6e;
}

.latest-posts ul {
color: #<?php echo $color;?>;
margin-top: 10px;
list-style-type: disc;
}

.latest-posts ul li {
color: #<?php echo $color;?>;
padding-left: 10px;
margin-bottom: 5px;
}

.latest-posts ul li a {
text-decoration: none;
display: block;
line-height: 15px;
color: #<?php echo $color;?>;
}

.latest-posts ul li a:hover {
text-decoration: underline;
color: #<?php echo $color;?>;
}

.latest-posts p {
text-align: justify;
color: #6e6e6e;
margin-top: 10px;
}


/* Subpage Column Styles */

#sub-column {
width: 980px;
z-index:0;
height: auto;
margin: 0px auto;
}

#sub-top {
background: url(images/sub-top.gif) no-repeat;
width: 980px;
height: 42px;
margin-left: 0px;
float: left;
margin-top: 10px;
}

#sub-content {
background: url(images/sub-content.gif) repeat-y;
z-index:1;
width: 980px;
float: left;
margin-left: 0px;
border : 0px;
}


/* Subpage Content Styles */


.content {
width: 950px;
float: left;
padding: 10px 15px 10px 15px;
border: 0px;
}

.content td{
border: 0px;
}

.content h1 {
font-size: 24px;
color: #8a8a8a;
margin: 20px 0px 20px 0px;
font-weight: normal;
}

.content p {
text-align: justify;
color: #8a8a8a;
border: 0px;
}

.page ul {
border-top: 0px solid #CCC;
list-style-type: disc;
list-style-position:inside;
color: #6e6e6e;
margin: 0px 40px 5px 10px;
}

.page ul li {
color: #6e6e6e;
border-bottom: 0px solid #CCC;
padding: 2px;
}

.post ul {
border-top: 0px solid #CCC;
list-style-type: disc;
list-style-position:inside;
color: #6e6e6e;
margin: 5px 40px 5px 10px;
}

.post ul li {
color: #6e6e6e;
border-bottom: 0px solid #CCC;
padding: 5px;
}

.post ul li a {
color: #<?php echo $color;?>;
}

.post ol {
border-top: 1px solid #CCC;
list-style-type: disc;
list-style-position:inside;
color: #6e6e6e;
margin: 20px 40px 10px 10px;
}

.post ol li {
color: #6e6e6e;
border-bottom: 1px solid #CCC;
padding: 5px;
}

.post ol li a {
color: #<?php echo $color;?>;
}

/* Breadcrumb Navigation Styles */

.breadcrumb {
float: left;
padding: 13px 15px 10px 15px;
color: #8a8a8a;
font-size: 12px;
}

.breadcrumb a {
color: #<?php echo $color;?>;
font-weight: normal;
text-decoration: none;
}

.breadcrumb a:hover {
text-decoration: underline;
}

.breadcrumb li {
display: inline;
list-style-type: none;
margin: 3px;
padding: 0px;
}
	
.posted {
color:#9d9c9c;
font-size: 10px;
font-style: italic;
display: block;
padding-left: 10px;
}

#wp-calendar {
border:1px solid #cccccc;
color:#6e6e6e;
width: 220px;
}

#wp-calendar caption {
color: #8a8a8a;
font-size: 18px;
font-weight: normal;
padding: 0px 0px 10px 0px; 
list-style-type: none;
}

tbody .pad {
background-color:#dddddd;
}

#wp-calendar a {
font-weight:bold;
font-size:12px;
background: none;
padding: 0px;
margin: 0px;
border: none;
}

thead tr th {
width:20px;
height:20px;
text-align:center;
background-color: #<?php echo $color;?>;
color: #FFF;
border:0px solid #cccccc;
padding: 3px; 
}

tfoot #prev {
width:58px;
height:20px;
text-align:left;
background-color:#ffffff;
background: none;
padding-left: 10px;
}

tfoot #next {
width:58px;
height:20px;
text-align:right;
background-color:#ffffff;
background: none;
padding-right: 10px;
}

/* Comment Styles */

.alt {margin: 0;padding: 10px;}

#post-control {
border: 0px;
margin-left: 50px;
margin-right: 50px;
color: #6e6e6e;
font-size: 11px;
}

#comment-wrap {
border: 0px;
margin-left: 50px;
color: #6e6e6e;
font-size: 11px;
}

#comment-wrap h6 {
font-size: 12px;
margin-bottom: 10px;
}

#comments ol {
list-style-type: none;
line-height: 18px;
border: 0px;
}

#comments ul li {
list-style-type: none;
list-style-image: none;
list-style-position: outside;
border: 0px;
}

.commentlist {
padding: 0;
text-align: justify;
border: none;
}

.comment-body {
margin-bottom: 20px;
}

.reply {
font-size:11px;
clear: both;
float: right;
margin-top: -20px;
}

.commentlist em {
font-size: 11px;
}

.commentlist li {
margin: 5px 0 0px 10px;
padding: 5px 5px 0px 5px;
list-style: none;
border: 0px;
}

.commentlist li ul li { 
margin-right: -5px;
margin-left: 30px;
margin-bottom: 0px;
list-style: none;
border: 0px;
}

.commentlist li li {
background:none;
border:none;
list-style:none;
margin:3px 0 3px 20px;
padding:3px 0;
border: 0px;
}

.commentlist li .avatar {
border:1px solid #ccc;
margin:5px 8px 6px 5px;
float: left;
padding:2px;
width:45px;
height:45px;
}

.commentlist cite, .commentlist cite a {
font-style: normal;
font-size: 11px;
margin-top: 2px;
}

.commentlist p {
font-weight: normal;
line-height: 1.5em;
text-transform: none; 
margin: 10px 5px 5px 65px;
font-size: 11px;
border: none;
}

#commentform p {
}

.commentmetadata {
font-weight: normal; 
margin: 0;
display: block; 
font-size: 10px;
font-style: italic;
}

.commentmetadata a, .commentmetadata a:visited {
color: #6e6e6e;
}

.commentmetadata a:hover{
}

.children { 
padding: 0;
border: none;
}

.thread-alt {
border: none;
}

.thread-even li {
}
.depth-1 {
border: none;
}

.even, .alt li {
margin-bottom: 20px;
}

#respond input {
margin-right: 10px;
font-size: 11px;
color: #8a8a8a;
display: block;
margin-bottom: 5px;
}

#respond h4 {
font-size: 12px;
margin-bottom: 5px;
}

#submit {
background-color: #8a8a8a;
border: 1px solid #CCC;
color: #FFF !important;
padding: 3px 5px 3px 5px;
margin-top: 10px;
text-decoration: none;
font-size: 12px;
cursor: pointer;
}

#submit:hover {
background-color: #FFF;
border: 1px solid #8a8a8a;
color: #8a8a8a !important;
padding: 3px 5px 3px 5px;
text-decoration: none;
}

/* Portfolio Styles */

#portfolio {
margin: 20px 10px 50px 30px;
float: left;
}

.port-pic {
width: 270px;
height: auto;
background-color: #FFF;
border: 1px solid #CCC;
float: left;
margin-bottom: 20px;
margin-right: 20px;
display: block;
}

.port-pic h3 {
font-size: 16px;
font-weight: normal;
color: #<?php echo $color;?>;
margin: 10px 10px 0px 12px;
}

.port-pic h3 a {
text-decoration: none;
color: #<?php echo $color;?>;
}

.port-pic h3 a:hover {
text-decoration: underline;
color: #<?php echo $color;?>;
}

.port-pic p {
text-align: justify;
color: #8a8a8a;
padding: 5px 10px 10px 10px;
font-style: italic;
font-size: 11px;
}

.port-pic img {
border: 2px solid #CCC;
margin: 10px 10px 0px 7px;
text-align: center;
}

/* Blog Styles */

.page {
padding-bottom: 20px;
margin-top: 30px;
margin-bottom: 10px;
border-bottom: 1px solid #CCC;
}

.post {
padding-bottom: 20px;
margin-top: 30px;
margin-left: 50px;
margin-right: 50px;
margin-bottom: 10px;
border-bottom: 1px solid #CCC;
}

.post h1 a {
color: #<?php echo $color;?>;
text-decoration: none;
}

.post h1 a:hover {
color: #<?php echo $color;?>;
text-decoration: underline;
}

.page p {
margin-bottom: 10px;
}

.post p {
margin-top: 20px;
}

.blogpic {
text-align: center;
}

.blogpic img {
margin-top: 20px;
border: 2px solid #CCC;
}

.category a {
background-color: #8a8a8a;
border: 1px solid #CCC;
color: #FFF;
padding: 3px 5px 3px 5px;
text-decoration: none;
font-size: 11px;
margin: 0px 5px;
line-height: 25px;
}

.category a:hover {
background-color: #d4d4d4;
border: 1px solid #8a8a8a;
color: #8a8a8a;
padding: 3px 5px 3px 5px;
text-decoration: none;
}


/* Footer Styles */

#footer {
background: url(images/footer-column.gif) no-repeat;
width: 980px;
height: 45px;
margin-bottom: 5px;
clear: both;
padding: 12px 0px 0px 15px;
margin-left: 0px;
}

#footer .copyright {
color: #8a8a8a;
text-transform: uppercase;
}

#footer a {
color: #<?php echo $color;?>;
text-decoration: none;
padding: 0px 2px;
}

#footer p {
color: #6e6e6e;
text-transform: uppercase;
float: left;
}

#footer a img  {
margin: 0px;
padding: 0px;
display: inline;
}

#footer span.footer-right {
color: #6e6e6e;
float: right;
text-transform: none;
margin: 0px 30px 0px 0px;
}

#footer p.footer-right {
color: #6e6e6e;
float: right;
text-transform: none;
margin: 0px 30px 0px 0px;
}

#footer p.footer-right a {
color: #6e6e6e;
text-decoration: none;
clear: both;
padding: 0px 0px 0px 15px;
}

#footer p.footer-right a:hover {
text-decoration: underline;
}

.wordpress-icon {
float: left;
margin-right: 10px;
margin-bottom: 12px;
}

.supported {
color: #CCC;
font-size: 10px;
text-align: center;
width: 980px;
}

.supported a {
color: #CCC;
font-size: 10px;
text-decoration: none;
}


/* Pagenavi */

.wp-pagenavi a, .wp-pagenavi a:link {
padding: 2px 4px 2px 4px; 
margin: 2px;
text-decoration: none;
background-color: #8a8a8a;
border: 1px solid #CCC;
color: #FFF;	
}

.wp-pagenavi a:visited {
padding: 2px 4px 2px 4px; 
margin: 2px;
text-decoration: none;
background-color: #8a8a8a;
border: 1px solid #CCC;
color: #FFF;
}

.wp-pagenavi a:hover {	
background-color: #d4d4d4;
border: 1px solid #8a8a8a;
color: #8a8a8a;
}

.wp-pagenavi a:active {
padding: 2px 4px 2px 4px; 
margin: 2px;
text-decoration: none;
background-color: #d4d4d4;
border: 1px solid #8a8a8a;
color: #8a8a8a;	
}

.wp-pagenavi span.pages {
padding: 2px 4px 2px 4px; 
margin: 2px 2px 2px 2px;
background-color: #8a8a8a;
border: 1px solid #CCC;
color: #FFF;
}

.wp-pagenavi span.current {
padding: 2px 4px 2px 4px; 
margin: 2px;
font-weight: bold;
background-color: #d4d4d4;
border: 1px solid #8a8a8a;
color: #8a8a8a;
}

.wp-pagenavi span.extend {
padding: 2px 4px 2px 4px; 
margin: 2px;	
border: 1px solid #000000;
color: #000000;
background-color: #FFFFFF;
}

/* Frontpage */

#front-tweet {
background: url(images/tweets.jpg) no-repeat;
width: 650px;
height: 550px;
float: left;
margin-left: 0px;
margin-bottom: 0px;
}

.latest-tweets {
width: 645px;
padding: 10px 0px 10px 0px;
float: left;
}

.latest-tweets h2 {
font-size: 18px;
text-decoration: none;
color: #6e6e6e;
}

.latest-tweets h2 a {
text-decoration: none;
color: #6e6e6e;
}

.latest-tweets p {
font-size: 14px;
text-align: justify;
color: #6e6e6e;
margin-top: 10px;
}

#front-side {
width: 270px;
height: auto;
float: right;
margin-left: 0px;
}

#front-follow {
background: url(images/feed_link.jpg) no-repeat;
width: 270px;
height: 120px;
}

#front-icon {
width: 70px;
height: auto;
float: left;
margin: 10px 10px 10px 10px;
}

#front-bottom {
width: 950px;
height: auto;
float: left;
}

#front-buttons {
width: 310px;
height: auto;
float: left;
margin-left: 6px;
}

.frontpage {
width: 950px;
float: left;
padding: 10px 0px 10px 0px;
border: 0px;
}

.frontpage table tbody tr td{
border: 0px;
}

.frontpage h1 {
font-size: 24px;
color: #8a8a8a;
margin: 20px 0px 20px 0px;
font-weight: normal;
}

.frontpage p {
text-align: justify;
color: #8a8a8a;
border: 0px;
margin-left: 20px;
margin-right: 20px;
}

.featpage{
width: 950px;
float: left;
padding: 10px 0px 10px 0px;
border: 0px;
}

.featpage table tbody tr td{
border: 0px;
margin-left: 40px;
}

.featpage p {
text-align: justify;
color: #8a8a8a;
border: 0px;
margin-left: 20px;
margin-right: 20px;
}

.featpage li {
text-align: justify;
color: #8a8a8a;
border: 0px;
line-height:120%;
margin-left: 10px;
margin-right: 0px;
}

#data-site {
background: url(images/info_site.jpg) no-repeat;
width: 650px;
height: 750px;
float: left;
margin-left: 0px;
margin-bottom: 20px;
margin-right: 20px;
}

#data-me {
background: url(images/info_me.jpg) no-repeat;
width: 280px;
height: 430px;
float: left;
margin-left: 0px;
margin-bottom: 0px;
}

#data-ical {
width: 280px;
height: auto;
float: right;
margin-left: 0px;
}


/* feature blocks - foto, case */

#foto-pathway {
background: url(images/foto-timeline.jpg) no-repeat;
width: 440px;
height: 700px;
float: left;
color: #00FFFF;
padding-left: 0px;
padding-top: 10px;
padding-right: 0px;
margin-right: 10px;
}

#foto-pathway a {
color: #FFFF66;
text-transform: none;
}

#foto-justino {
background: url(images/foto-justino.jpg) no-repeat;
width: 300px;
height: 390px;
float: left;
color: #FFFF66;
font-size: 13px;
padding-left: 200px;
padding-top: 10px;
padding-right: 0px;
}

#foto-justino a {
color: #FFFF66;
text-transform: none;
}

#foto-justino a:hover {
background-color: #d4d4d4;
border: 1px solid #8a8a8a;
color: #666666;
text-decoration: none;
}

#foto-voyage {
background: url(images/foto-voyage.jpg) no-repeat;
width: 500px;
height: 280px;
float: left;
color: #FFCC99;
margin-top: 10px;
padding-left: 0px;
padding-top: 10px;
padding-right: 0px;
}

#foto-voyage a {
color: #FFFF66;
text-transform: none;
}

#work-design {
background: url(images/expertise_01.jpg) no-repeat;
width: 475px;
height: 300px;
float: left;
}

#work-repertoire {
background: url(images/expertise_02.jpg) no-repeat;
width: 475px;
height: 300px;
float: left;

}

#work-finance {
background: url(images/expertise_03.jpg) no-repeat;
width: 475px;
height: 300px;
float: left;

}

#work-engineering{
background: url(images/expertise_04.jpg) no-repeat;
width: 475px;
height: 300px;
float: left;

}

#wall {
width: 750px;
float: left;
margin-left: 100px;
margin-right: 100px;
margin-bottom: 10px;
color: #333333;
}

#wall hr{
width: 100%;
color: #999999;
}

#wall-story {
width: 750px;
min-height:60px;
margin-top: 10px;
}

#wall-reply {
width: 650px;
min-height:60px;
margin-top: 10px;
margin-left: 50px;
margin-right: 50px;
}

#wall-icon {
width: 50px;
height: 50px;
float: left;
margin-left: 30px;
margin-right: 20px;
margin-top: 0px;
}

#wall-message {
width: 650px;
min-height:60px;
float: left;
margin-top: 0px;
}

#wall-replymessage {
width: 550px;
min-height:60px;
float: left;
margin-top: 0px;
}

#wall p {
margin-top: 0px;
margin-bottom: 0px;
color: #333333;
}

#wall p b {
color: #003399;
}

#wall a {
color: #0099FF;
text-transform: none;
}
