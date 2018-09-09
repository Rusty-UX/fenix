.base-bg-layer{
	background-image: linear-gradient(<?php echo get_field("gradient_angle"); ?>deg, <?php echo get_field("bg_color_1"); ?>, <?php echo get_field("bg_color_2"); ?>);
}

.article-wrapper a{
	color: inherit;
  background-image: linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5));
  background-size: 120% 0.1em;
  background-repeat: no-repeat;
  background-position-y: 92.5%;
  text-decoration: none;
}

.article-wrapper .lightbox-backdrop{
  background-color: <?php echo get_field("content_bg"); ?>;
  opacity: 0.9;
}

.article-wrapper hr{
	border-top: 3px solid <?php echo get_field("border_color"); ?>;
}

.article-top-layer{
	background-color: <?php echo get_field("content_bg"); ?>;
}

.article-wrapper p,
li,
ul,
figcaption,
h2,
h3,
h4,
h5,
pre,
.article-subtitle,
.btc,
.article-wrapper a.btc,
.home-link a{
	color: <?php echo get_field("body_text_color"); ?>;
}

.bc{
	background-color: <?php echo get_field("body_text_color"); ?>;
}

.home-link a:hover{
	color: <?php echo get_field("body_text_link_color"); ?>;
}

.article-wrapper a{
	background-image: linear-gradient(0deg, <?php echo get_field("body_text_link_color"); ?>, <?php echo get_field("body_text_link_color"); ?>);
}

p code,
li code{
color: <?php echo get_field("code_text_color"); ?>;
}

.article-wrapper a:hover,
.article-wrapper .content-quote footer a{
	color: <?php echo get_field("body_text_link_color"); ?>;
	background-image: none;
}

.article-wrapper h1,
.article-wrapper h2,
.article-wrapper h3{
	color: <?php echo get_field("heading_color"); ?>;
}

.article-wrapper h1 a{
	background-image: linear-gradient(0deg, <?php echo get_field("heading_link_color"); ?>, <?php echo get_field("heading_link_color"); ?>);
}

.code-border-left{
	background: linear-gradient(-90deg, transparent calc(100% - 1rem), <?php echo get_field("content_bg"); ?>);
}

.code-border-right{
	background: linear-gradient(90deg, transparent calc(100% - 1rem), <?php echo get_field("content_bg"); ?>);
}

.article-wrapper h1 a:hover{
	color: <?php echo get_field("heading_link_color"); ?>;
	background-image: none;
}

.navigation a,
.next-previous-container .control-label{
	color: <?php echo get_field("nav_text_color"); ?>;
}

.navigation .nav-item:hover:after{
  background-color: <?php echo get_field("nav_text_color"); ?>; 
}

.letter{
	fill: <?php echo get_field("nav_text_color"); ?>;
}

.shadow{
	fill: <?php echo get_field("nav_text_color"); ?>;
	opacity: 0.5;
}

.control-container .control-post-name{
	color: <?php echo get_field("footer_post_link_color"); ?>;
}