<?php get_header(); ?>

	<div id="content">
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
                <br />
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
			<h2><?php the_title(); /*3*/ ?></h2>
			<p><?php the_excerpt(); ?></p>
		</div>
	</a>
<?php endwhile; ?></div>
<?php wp_reset_query(); /*4*/ ?>
<div class="non-featured grid">
<?php query_posts('posts_per_page=6'); /*1, 2*/
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
?>
	<a class="item grid-col-4 grid-col-12-mobile" href=<?php the_permalink(); ?>>
		<div class="image-zoom-hover">
			<div class="image" style="background: url(<?php echo $src[0]; ?> ) no-repeat; background-size: 100% 100%; height: 150px; width: 250px;"></div>
		</div>
		<div class="details">
			<h6><?php the_date(); ?> - <?php the_author(); ?></h6>
			<h2><?php the_title(); /*3*/ ?></h2>
			<p><?php the_excerpt(); ?></p>
		</div>
	</a>
<?php endwhile; ?></div>
<?php wp_reset_query(); /*4*/ ?>
				<div class="cf"></div>
				<a class="viewAll" href="/news/">View All News &nbsp;<i class="fa fa-caret-right"></i></a>
			</div>
            </div>
            	
            </div>
		</div>

		<?php do_action( 'bp_after_blog_home' ); ?>

		</div><!-- .padder -->
        
        
        
	</div><!-- #content -->



<?php get_footer(); ?>
