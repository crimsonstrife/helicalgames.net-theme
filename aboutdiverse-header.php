<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<?php if ( current_theme_supports( 'bp-default-responsive' ) ) : ?><meta name="viewport" content="width=device-width, initial-scale=1.0" /><?php endif; ?>
		<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="/wp-content/themes/helicalnet/css/normalize.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="/wp-content/themes/helicalnet/css/slider.css" rel="stylesheet" type="text/css">
<link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/helicalnet/imgs/icons/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/helicalnet/imgs/icons/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/helicalnet/imgs/icons/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/helicalnet/imgs/icons/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/helicalnet/imgs/icons/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/helicalnet/imgs/icons/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/helicalnet/imgs/icons/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/helicalnet/imgs/icons/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/helicalnet/imgs/icons/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/wp-content/themes/helicalnet/imgs/icons/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/wp-content/themes/helicalnet/imgs/icons/favicons/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="/wp-content/themes/helicalnet/imgs/icons/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/wp-content/themes/helicalnet/imgs/icons/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/wp-content/themes/helicalnet/imgs/icons/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/wp-content/themes/helicalnet/imgs/icons/favicons/manifest.json">
<link rel="mask-icon" href="/wp-content/themes/helicalnet/imgs/icons/favicons/safari-pinned-tab.svg" color="#6699ff">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/wp-content/themes/helicalnet/imgs/icons/favicons/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
		<?php bp_head(); ?>
		<?php wp_head(); ?>
		<script src="js/prefixfree.min.js"></script>
        <script type="text/javascript" src="js/news-slider.js"></script>
		<script>
		$(function()
  {
     $("a#toggle-account").click(function()
                         {
                            $("#account__subitem").slideToggle();
                            return false;
                         }); 
  });
		</script>
		<script>
		$(function()
  {
     $("a#toggle-games").click(function()
                         {
                            $("#games__subitem").slideToggle();
                            return false;
                         }); 
  });
		</script>
		<script>
		$(function()
  {
     $("a#toggle-community").click(function()
                         {
                            $("#community__subitem").slideToggle();
                            return false;
                         }); 
  });
		</script>
		<script>
		$(function()
  {
     $("a#toggle-more").click(function()
                         {
                            $("#more__subitem").slideToggle();
                            return false;
                         }); 
  });
		</script>
        <script>
		$('.slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.slide');
  var bulletArray = [];
  var currentIndex = 0;
  var timeout;
  
  function move(newIndex) {
    var animateLeft, slideLeft;
    
    advance();
    
    if ($group.is(':animated') || currentIndex === newIndex) {
      return;
    }
    
    bulletArray[currentIndex].removeClass('active');
    bulletArray[newIndex].addClass('active');
    
    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }
    
    $slides.eq(newIndex).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function() {
      $slides.eq(currentIndex).css({
        display: 'none'
      });
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }
  
  function advance() {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    }, 4000);
  }
  
  $('.next_btn').on('click', function() {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });
  
  $('.previous_btn').on('click', function() {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move(3);
    }
  });
  
  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');
    
    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });
  
  advance();
});
		</script>
	</head>
	<body <?php body_class(); ?> id="bp-default">
<?php if ( is_user_logged_in() ) : ?>

<?php else : ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8869413432398897",
    enable_page_level_ads: true
  });
</script>
<?php endif; ?>
		<?php do_action( 'bp_before_header' ); ?>
        <?php do_action( 'bp_header' ); ?>
<nav class="Nav_Top">
		<ul class="nav_top cf">
<li class="nav_logo h1" style="height: 52px; padding-left: 25px; padding-bottom: 3px;">
            <h1 class="dropTrigger">
					<a href="<?php echo home_url(); ?>" class="ir logo"></a> 
				</h1>
</li>
            <li>
            <form action="<?php echo bp_search_form_action(); ?>" method="post" id="globalsearch" style="height: 62px;">
            <div id="globalsearch" class="nav_top_search" role="search" style="height: 62px; margin-bottom: 5px;">
			<input class="btn_search ir" type="image" name="search-submit" id="search-submit" style="position:relative; float:right;" value="<?php esc_attr_e( 'Search', 'buddypress', 'support' ); ?>" src="/wp-content/themes/helicalnet/imgs/icons/sprite_nav_search_v2.png"/>

            </div>
            </li>
			<li>
            <div id="globalsearch" class="nav_top_search" role="search" style="height: 62px; margin-bottom: 5px; background-color:#FFF;">
			<input type="text" placeholder="Search" maxlength="150" id="text_search" class="container_textfield container_textbox floatingLabel" name="search-terms" style="border: hidden; position:relative; top:0; padding-top: 3px; margin-top: 15px;"/>
 <?php echo bp_search_form_type_select(); ?>
            </div>
            </form><!-- #search-form -->
			<!-- #search-bar -->
            </li>
            <?php if ( is_user_logged_in() ) : ?>
            <a href="<?php echo bp_loggedin_user_domain() . 'friends/'; ?>" class="connect" style="text-decoration:none;">
            <?php my_bp_adminbar_friends_menu()?></a>            
			<a href="<?php echo bp_loggedin_user_domain() . 'messages/'; ?>" class="connect" style="text-decoration:none;">
            <?php my_bp_adminbar_messages_menu()?></a>
            <a href="<?php echo bp_loggedin_user_domain() . 'notifications/'; ?>" class="connect" style="text-decoration:none;">
            <?php my_bp_adminbar_notifications_menu()?></a>
                        <li class="right nav_goSignUp signedOut">
					<div class="nav-bucket">
						<a class="exempt" id="btn_signUp" href="/login?action=logout">Sign Out</a>
					</div>
			</li
            ><?php else : ?>
            <li class="right nav_identity cf">
		<div class="nav-bucket">
			<a href="/login" class="connect">Sign In</a>
		</div>
			</li>
            <li class="right nav_goSignUp signedOut">
					<div class="nav-bucket">
						<a class="exempt" id="btn_signUp" href="/register">Register</a>
					</div>
			</li>
            <?php endif; ?>
    </ul>
</nav>
<?php if ( is_front_page() && is_home() ) { ?> 	
<div class="slider" style="margin-top: 60px;">
  <div class="slide_viewer">
    <div class="slide_group">
<?php query_posts('posts_per_page=1&cat=48'); /*1, 2*/
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
?>
      <div class="slide" style="background: url(<?php echo $src[0]; ?> ) no-repeat; background-size: 100% 100%; height:auto; padding-top: 40%; padding-bottom: 10%;">
      <a href=<?php the_permalink(); ?> style="text-decoration:none;"><div class="calloutcontent" style="margin-left: 5%; margin-right: 10%; padding-left:5%; padding-right:2%; position: absolute; bottom: 100px; max-height: 75%; padding: 10px; color: #f5f5f5; text-shadow: 0 1px 2px rgba(0,0,0,0.15); box-shadow: 0 3px 15px rgba(0,0,0,0); font-size: 1rem; transition: 0.25s;">	
			<div class="sectionheader" style="position: relative; display: inline-block;width: 100%; line-height: 19px; margin-bottom: 18px; color: #6699ff; text-shadow: 0 1px 1px rgba(0,0,0,.15); font-size: 2rem; font-weight: 500; text-transform: uppercase; letter-spacing: 2px;"><?php the_title(); /*3*/ ?></div>
            <div class="calloutdate" style="color: #f5f5f5; text-decoration: none; text-shadow: 0 1px 2px rgba(0,0,0,0.15); box-shadow: 0 3px 15px rgba(0,0,0,0); font-size: 1.5rem; font-weight: 200;"><?php the_date(); ?></div>
			<div class="calloutsummary" style="color: #f5f5f5; text-decoration: none; text-shadow: 0 1px 2px rgba(0,0,0,0.15); box-shadow: 0 3px 15px rgba(0,0,0,0); font-size: 1rem; font-weight: 200;"><?php the_excerpt(); ?></div>
			read more...
      </div></a>
      </div>
<?php endwhile; ?>
<div class="slide_buttons">
</div> 
</div><!-- End // .slider -->
<?php wp_reset_query(); /*4*/ ?>
</div>
</div>
<?php } ?> 
<nav class="main-menu">
<?php if ( is_user_logged_in() ) : ?>
  <a class="menu__item" href="<?php echo bp_loggedin_user_domain(); ?>">
  <div class="user_info" style="padding-left: 5px; padding-top: 2px;">
  	<div class="user__avatar">
		<?php bp_loggedin_user_avatar( 'type=thumb&width=40&height=40' ); ?>
	</div>
	<div class="user__username">
	<?php global $current_user;
      get_currentuserinfo();
        echo $current_user->user_login . "\n"; ?>
    </div>
	<div class="user__status" style="color:#3C0; padding-bottom: 2px;">Logged in</div>
  </div>
  </a>
<?php else : ?>
  <a href="/login" class="menu__item">
  <div class="user_info" style="padding-left: 5px; padding-top: 2px;">
  	<div class="user__avatar">
		<img src="http://www.gravatar.com/avatar/21768c94207461357618040aaa8be7a2?s=40&r=pg&d=mm" />
	</div>
	<div class="user__username">Guest</div>
	<div class="user__status" style="padding-bottom: 2px;">
    
        		<?php if ( bp_get_signup_allowed() ) : ?>	
			<p id="login-text">
				 Log In or Register
			</p>
    </div>
            <?php endif; ?>
    
    </div>

  </div>
  </a>
<?php endif; ?>
  <a class="menu__item" href="<?php echo home_url(); ?>">
    <div class="menu__icon menu__icon--home"></div>
    <div class="menu__content">Home</div>
  </a>
<?php if ( is_user_logged_in() ) : ?>
  <a class="menu__item" href="#" id="toggle-account">
    <div class="menu__icon menu__icon--account"></div>
    <div class="menu__content">My Account</div>
  </a>
<div id="account__subitem">
  <a id="account__subitem1" href="<?php echo bp_loggedin_user_domain() . 'messages/'; ?>">
    <div class="menu__icon menu__icon--empty"></div>
    <div class="menu__content">Messages<div class="circle" style="width: 15px; height: 15px; line-height: 14px;"><?php echo count( bp_get_total_unread_messages_count( $bp->loggedin_user->id ) ) ?></div></div>
  </a>
  <a id="account__subitem2" href="<?php echo bp_loggedin_user_domain() . 'friends/'; ?>">
    <div class="menu__icon menu__icon--empty"></div>
    <div class="menu__content">Requests<div class="circle" style="width: 15px; height: 15px; line-height: 14px;"><?php echo count( bp_friend_get_total_requests_count( $bp->loggedin_user->id ) ) ?></div></div>
  </a>
</div>
<?php endif; ?>
  <a class="menu__item" href="#" id="toggle-community">
    <div class="menu__icon menu__icon--community"></div>
    <div class="menu__content">Community</div>
  </a>
<div id="community__subitem">
  <a id="community__subitem1" href="/news/">
    <div class="menu__icon menu__icon--news"></div>
    <div class="menu__content">News</div>
  </a>
  <a id="community__subitem2" href="/forums/">
    <div class="menu__icon menu__icon--forum"></div>
    <div class="menu__content">Forums</div>
  </a>
</div>
  <a class="menu__item" href="#" id="toggle-games">
    <div class="menu__icon menu__icon--games"></div>
    <div class="menu__content">Games</div>
  </a>
<div id="games__subitem">
  <a id="games__subitem1" href="#">
    <div class="menu__icon menu__icon--diverse"></div>
    <div class="menu__content">Diverse</div>
  </a>
</div>
  <a class="menu__item" href="/help/">
    <div class="menu__icon menu__icon--help"></div>
    <div class="menu__content">Help</div>
  </a>
  <a class="menu__item" href="/store/">
    <div class="menu__icon menu__icon--store"></div>
    <div class="menu__content">Store</div>
  </a>
  <a class="menu__item" href="#">
    <div class="menu__icon menu__icon--contact"></div>
    <div class="menu__content">Contact</div>
  </a>
  <a class="menu__item" href="#" id="toggle-more">
    <div class="menu__icon menu__icon--more"></div>
    <div class="menu__content">More</div>
  </a>
<div id="more__subitem">
<?php if ( is_user_logged_in() ) : ?>
  <a id="more__subitem1" href="#">
    <div class="menu__icon menu__icon--labs"></div>
    <div class="menu__content">User Research</div>
  </a>
<?php endif; ?>
  <a id="more__subitem2" href="/about-us/">
    <div class="menu__icon menu__icon--about"></div>
    <div class="menu__content">About Us</div>
  </a>
</div>
  <a id="more__item" href="http://www.stream.haus">
    <div class="menu__icon menu__icon--streamhaus"></div>
    <div class="menu__content">Streamhaüs</div>
  </a>
<?php if ( is_user_logged_in() ) : ?>
   <a id="more__item" href="/login?action=logout">
    <div class="menu__icon menu__icon--exit"></div>
    <div class="menu__content">Sign Out</div>
  </a>
<?php endif; ?>
</nav>
<?php if ( is_front_page() && is_home() ) { ?>
<div class="eventCalendar" style="position:relative; left: 0 !important; width: 100% !important; overflow: hidden;">
			<div class="grid" style="width: 95%; max-width: 1474px; margin: 0 auto;">
			<a class="calendarItem" href="#" title="Helical Games 4th Aniversary">
               <div class="icon" style="background-image:url('/wp-content/themes/helicalnet/imgs/30x30-placeholder.png');"></div>

						<div class="date">
							<span class="start-date">	OCT<em>25</em>
</span>
						</div>
						<div class="title">Helical Games 4<sup>th</sup> Aniversary</div>
					</a>
					<a class="calendarItem" href="http://www.stream.haus" title="Launch of STREAMHAÜS">

							<div class="icon" style="background-image: url('/wp-content/themes/helicalnet/imgs/30x30-SH-logo.png');"></div>

						<div class="date">
							<span class="start-date">	JAN<em>21</em>
</span>
						</div>
						<div class="title">Launch of STREAMHAÜS</div>
					</a>
					<a class="calendarItem" href="#" title="">

							<div class="icon" style="background-image: url('/wp-content/themes/helicalnet/imgs/30x30-placeholder.png');"></div>

						<div class="date">
							<span class="start-date">	FEB<em>09</em>
</span>
								<span> - 	FEB<em>16</em>
</span>
						</div>
						<div class="title"></div>
					</a>
					<a class="calendarItem" href="#" title="Trials of Osiris">

							<div class="icon" style="background-image: url('/wp-content/themes/helicalnet/imgs/30x30-placeholder.png');"></div>

						<div class="date">
							<span class="start-date">	FEB<em>19</em>
</span>
								<span> - 	FEB<em>22</em>
</span>
						</div>
						<div class="title"></div>
					</a>
					<a class="calendarItem" href="#" title="Extra Life 2016">

							<div class="icon" style="background-image: url('http://www.extra-life.org/assets/extralife/images/$cms$/100/1568.png');"></div>

						<div class="date">
							<span class="start-date">	NOV<em>5</em>
</span>
						</div>
						<div class="title">Extra Life 2016</div>
					</a>
			</div>
		</div>
<?php } ?>
<?php do_action( 'bp_after_header'     ); ?>
		<?php do_action( 'bp_before_container' ); ?>
<?php if( is_home() || is_front_page() ) : ?>
		<div id="container" style="position:relative; width: 95%; max-width: 1474px; margin: 0 auto; height: auto;">
<?php else : ?>
		<div id="container" style="position:relative; width: 95%; margin: 62px auto; height: auto;">
<?php endif; ?>