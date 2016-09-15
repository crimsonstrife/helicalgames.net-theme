<?php get_header(); ?>
<!-- Sulvo Audience Tag -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P5LMWH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script id="sulvoTrafficTag">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-P5LMWH');</script>
<!-- Sulvo Traffic Tag -->
<div class="grid fluid">
<div class="item grid-col-7">
<div id="content" style="float:left;">
<div class="padder" style="border-right:none; margin-right: 300px; width: 100%;">
<?php do_action( 'bp_before_blog_home' ); ?>
<?php do_action( 'template_notices' ); ?>
<div class="updates">
<div class="grid fluid">
		<div class="page" id="blog-latest" role="main">
<div class="latestnews grid-block content">
				<div class="sectionHeader" style="position: relative; display: inline-block;width: 100%; line-height: 19px; margin-bottom: 18px; color: #6699ff; text-shadow: 0 1px 1px rgba(0,0,0,.15); font-size: 2rem; font-weight: 500; text-transform: uppercase; letter-spacing: 2px;">
					LATEST NEWS
				</div>
				<hr>
<div class="featured grid">
<?php query_posts('posts_per_page=2&cat=48'); /*1, 2*/
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
?>
	<a class="item grid-col-6 grid-col-12-mobile" href=<?php the_permalink(); ?>>
		<div class="image-zoom-hover">
			<div class="image" style="background: url(<?php echo $src[0]; ?> ) no-repeat; background-size: 100% 100%; height: 150px; width: 250px;"></div>
		</div>
		<div class="details">
			<h6><?php the_date(); ?> - <?php the_author(); ?></h6>
			<h2><?php $tit = the_title('','',FALSE);
			echo substr($tit, 0, 13);
			if (strlen($tit) > 13) echo " [...]"; /*3*/ ?></h2>
			<p><?php the_excerpt(); ?></p>
		</div>
	</a>
<?php endwhile; ?></div>
<?php wp_reset_query(); /*4*/ ?>
<hr>
<div class="non-featured grid">
<?php query_posts('posts_per_page=6'); /*1, 2*/
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
?>
	<a class="item grid-col-4 grid-col-12-mobile" href=<?php the_permalink(); ?>>
		<div class="image-zoom-hover">
			<div class="image" style="background: url(<?php echo $src[0]; ?> ) no-repeat; background-size: 100% 100%; height: 100px; width: 200px;"></div>
		</div>
		<div class="details">
			<h6><?php the_date(); ?> - <?php the_author(); ?></h6>
			<h4><?php $tit = the_title('','',FALSE);
			echo substr($tit, 0, 13);
			if (strlen($tit) > 13) echo " [...]"; /*3*/ ?></h4>
		</div>
	</a>
<?php endwhile; ?></div>
<?php wp_reset_query(); /*4*/ ?>
<hr>
				<div class="cf"></div>
				<a class="viewAll" href="/news/" style="text-decoration:none;">View All News &nbsp;<i class="fa fa-caret-right"></i></a>
			</div>
            </div>  	
            </div>
		</div>
		</div><!-- .padder -->
	</div><!-- #content -->
</div>
<div class="item grid-col-5">
<div id="content" style="position:relative; float:right;">
<div class="padder" style="border-right:none; width: 100%;">
<div class="updates">
<div class="grid fluid">
<div class="page" id="blog-latest" role="main">
<div class="latestnews grid-block content">
<div class="sectionHeader" style="position: relative; display: inline-block;width: 100%; line-height: 19px; margin-bottom: 18px; color: #6699ff; text-shadow: 0 1px 1px rgba(0,0,0,.15); font-size: 2rem; font-weight: 500; text-transform: uppercase; letter-spacing: 2px;">GAMES</div>
                <hr>
<div class="featured grid">
<div class="release ">
<a href="/Diverse" class="image-zoom-hover">
<img src="/public/helicalnet/imgs/pubassets/EN_DIVrelease.jpg" alt="" style="size: 100%; max-height: 98%; max-width: 98%;"></a>
</div>
</div>
<?php wp_reset_query(); /*4*/ ?>
<hr>
<?php if ( is_user_logged_in() ) : ?>
<div class="adblock" style="size: 100%; height: auto; max-height: 98%; max-width: 98%;">

</div>
<?php else : ?>
<div class="adblock" style="size: 100%; height: auto; max-height: 98%; max-width: 98%;">

</div>
<?php endif; ?>
				<div class="cf"></div>
			</div>
            </div>
            	
            </div>
		</div>

		<?php do_action( 'bp_after_blog_home' ); ?>

		</div><!-- .padder -->
        
        
        
	</div><!-- #content -->
</div>
<div class="item grid-col-12">
<div id="content" style="float:left;">
<div class="padder" style="border-right:none; margin-right: 300px; width: 100%;">
<?php do_action( 'bp_before_blog_home' ); ?>
<?php do_action( 'template_notices' ); ?>
<div class="updates">
<div class="grid fluid">
		<div class="page" id="blog-latest" role="main">
<div class="latestnews grid-block content">
				<div class="sectionHeader" style="position: relative; display: inline-block;width: 100%; line-height: 19px; margin-bottom: 0px; color: #6699ff; text-shadow: 0 1px 1px rgba(0,0,0,.15); font-size: 1rem; font-weight: 500; text-transform: uppercase; letter-spacing: 2px;">
					GAME UPDATES
				</div>
				<hr>
<div class="featured grid">
<?php query_posts('posts_per_page=4&cat=60'); /*1, 2*/
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
?>
	<a class="item grid-col-3 grid-col-12-mobile" href=<?php the_permalink(); ?>>
		<div class="image-zoom-hover">
			<div class="image" style="background: url(<?php echo $src[0]; ?> ) no-repeat; background-size: 100% 100%; height: 100px; width: 200px;"></div>
		</div>
		<div class="details">
			<h6><?php the_date(); ?> - <?php the_author(); ?></h6>
			<h4><?php the_title(); /*3*/ ?></h4>
			<p><?php the_excerpt(); ?></p>
		</div>
	</a>
<?php endwhile; ?></div>
<?php wp_reset_query(); /*4*/ ?>
<hr>
				<div class="cf"></div>
				<a class="viewAll" href="/news/" style="text-decoration:none;">View All Updates &nbsp;<i class="fa fa-caret-right"></i></a>
			</div>
            </div>  	
            </div>
		</div>
		</div><!-- .padder -->
	</div><!-- #content -->
</div>
</div>
<?php get_footer(); ?>