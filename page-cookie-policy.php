<?php get_header(); ?>

	<div id="content">
		<div>

		<?php do_action( 'bp_before_blog_page' ); ?>

		<div class="page" id="blog-page" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h2 class="pagetitle"><?php the_title(); ?></h2>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry">

						<p>This site uses cookies – small text files that are placed on your machine to help the site provide a better user experience. In general, cookies are used to retain user preferences, store information for things like shopping carts, and provide anonymised tracking data to third party applications like Google Analytics. 
                        </p>
                        <p>As a rule, cookies will make your browsing experience better. However, you may prefer to disable cookies on this site and on others. The most effective way to do this is to disable cookies in your browser. We suggest consulting the Help section of your browser or taking a look at <a href="http://www.aboutcookies.org">the About Cookies website</a> which offers guidance for all modern browsers</p>
                        <p>Cookies are small pieces of text. They are not computer programs, and they can't be executed as code. Also, they cannot be used to disseminate viruses, and modern versions of both Microsoft Internet Explorer and Netscape browsers allow users to set their own limitations to the number of cookies saved on their hard drives.</p>
                        <p>Cookies are stored on the computer's hard drive. They cannot access the hard drive - so a cookie can't read other information saved on the hard drive, or get a user's e-mail address etc. They only contain and transfer to the server as much information as the users themselves have disclosed to a certain web site.</p>
                        

					</div>

				</div>

			<?php comments_template(); ?>

			<?php endwhile; endif; ?>

		</div><!-- .page -->

		<?php do_action( 'bp_after_blog_page' ); ?>

		</div><!-- .padder -->
	</div><!-- #content -->

<?php get_footer(); ?>
