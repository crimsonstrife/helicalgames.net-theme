		</div> <!-- #container -->
</div>
		<?php do_action( 'bp_after_container' ); ?>
		<?php do_action( 'bp_before_footer'   ); ?>
<style>
footer
{
	position: relative;
	display: block;
	z-index: 1;
	box-sizing: border-box;

	bottom: 0;
	right: 0;
	
	width: 100%;
	height: auto;
	padding: 35px 250px 50px 60px;
	margin: 0 auto;
	clear: both;

	text-align: center;
	-moz-transition: 0.5s ease-out opacity, 0.2s bottom;
	-o-transition: 0.5s ease-out opacity, 0.2s bottom;
	-webkit-transition: 0.5s ease-out opacity, 0.2s bottom;
	transition: 0.5s ease-out opacity, 0.2s bottom;
	opacity:1;
	background: #272727;
}

	.compact footer,
	.NoSidebar footer
	{
		padding-right: 60px;
	}
footer
{
	padding: 35px 0 40px 0;
}

body.loaded footer
{
	opacity:1;
}
	
	footer .footerLogo
	{
		margin-bottom: 45px;
	}

		
	footer ul
	{
		display:inline-block;
	}
		footer li
		{
			list-style: none outside none;
		}
	
		

	footer a
	{
		font-size:11px;
		color:#f5f5f5;
		margin:0;       
	}
	footer .copyright
	{
		margin-top: 22px;
		color:#f5f5f5;
		font-size: 11px;
	}
		footer .promo
	{
		margin-top: 2px;
		color:#f5f5f5;
		font-size: 11px;
	}
	footer .followUs
	{
		margin:0 auto;
		width:400px;
		height: 30px;
		line-height: 30px;
	}
		footer .followUs p
		{
			font-size:11px;
			margin-bottom:5px;
			color:#f5f5f5;
			line-height:23px;
		}
		footer .followUs li
		{
			border:0;
			display: inline-block;
			margin-left:9px;
			padding:0;
		}
			footer .followUs li:first-child
			{
				margin-left:0;
			}
			footer .followUs li a
			{
				background-repeat: no-repeat;
				top: 4px;
				width: 22px;
				height: 22px;
				background-image:url("/wp-content/themes/helicalnet/imgs/icons/sprite_footer_socialIcons.png");
				z-index:200;
			}
				footer .followUs li.facebook a
				{
					background-position:0 0;
				}
				footer .followUs li.twitter a
				{
					background-position:-30px 0;
				}
				footer .followUs li.youtube a
				{
					background-position:-59px 0;
				}
				
	footer .nav_bottom
	{
		max-width: 1250px;
		margin:0 auto 22px;
		padding-top: 5px;
		border-top: 1px solid rgba(245,245,245,0.2);
		text-align: left;
	}
		.compact footer .nav_bottom
		{
			left: 0;
		}


		footer .nav_bottom .column
		{
			display: inline-block;
			vertical-align: top;
			width: calc(25% - 80px);
			text-align: left;
		}

			footer .nav_bottom .column.esrb
			{
				width: 61px;
				text-align: right;
			}

			footer .nav_bottom .column li
			{
				
			}

				footer .nav_bottom .column li:first-child a
				{
					font-weight: bold;
				}

	footer .SelectLanguage
	{
		color:#f5f5f5;
		font-size: 10px;
		line-height: 44px;
		margin: 0 auto;
		width:400px;
	}
	footer .SelectLanguage label
	{
		color:#f5f5f5;
		line-height: 23px;
	}

	footer .SelectLanguage select, footer .SelectLanguage.container_select option
	{
		font-size:10px;
	}
	footer .SelectLanguage select
	{
		background: none repeat scroll 0 0 #344768;
		border: 3px solid #344768;
		color: #FFFFFF;

		display:none;
	}
	footer .SelectLanguage .menu_selectLanguage
	{
		color: #FFFFFF;
		display: inline-block;
		height: 23px;
		overflow: hidden;
		position: relative;
		vertical-align: middle;
	}
		footer .SelectLanguage .menu_selectLanguage.opened
		{
			overflow:visible;
			display:inline-block !important;
		}
			
		footer .SelectLanguage .menu_selectLanguage ul
		{
			position:relative;
			top:0;
			left:0;
			width:100%;
			vertical-align: top;
		}
			footer .SelectLanguage .menu_selectLanguage.opened ul
			{
				background:#fff;
				color:#000;
			}
			footer .SelectLanguage .menu_selectLanguage li
			{
				display: none;
				float:none;
				line-height:23px;
				padding:0 1px;
				text-align: left;
			}
			
				footer .SelectLanguage .menu_selectLanguage.opened li,
				footer .SelectLanguage .menu_selectLanguage li.on
				{
					display: block;
				}

				footer .SelectLanguage .menu_selectLanguage li a
				{
					line-height: 23px;
					text-align: left;
					font-size: 13px;
					padding: 0 5px;
				}
					footer .SelectLanguage .menu_selectLanguage li a .fa
					{
						display: none;
					}

						footer .SelectLanguage .menu_selectLanguage li.on a .fa
						{
							display: inline-block;
						}

					footer .SelectLanguage .menu_selectLanguage li.on a
					{
						display: block;
					}

						footer .SelectLanguage .menu_selectLanguage.opened li.on a
						{
							background:#344768;
							color:#fff;
						}

						footer .SelectLanguage .menu_selectLanguage.opened li a
						{
							color:rgb(30,36,43);
						}

							footer .SelectLanguage .menu_selectLanguage.opened li a .fa
							{
								display: none;
							}
			
		


footer .nav_bottom .followUs {
	float: left;
	width: 25%;
}

	footer .nav_bottom .followUs p,
	footer .nav_bottom .followUs ul {
		float: right;
		margin-left: 10px;
	}

footer .appLinks {
	position: relative;
	max-width: 1000px;
	margin: 0 auto 10px;
	font-size: 14px;
	line-height: 35px;
	color: #FFF;
}

	footer .appLinks .btn_appStore,
	footer .appLinks .btn_googlePlay {
		display: inline-block;
		background-repeat: no-repeat;
		background-position: 0 0;
		background-size: contain;
		text-indent: -9999px;
	}

</style>
<footer class="footer" style="height:inherit; padding: 35px 0 40px 0;">
	<a href="<?php echo home_url(); ?>">
		<img src="/wp-content/themes/helicalnet/imgs/branding/horizontal-sw.png" class="footerLogo" style="width:100%; max-height:70px; max-width:101px;">
	</a>
	<div class="nav_bottom">
		<div class="column">
			<ul>
				<li><a href="<?php echo home_url(); ?>">HelicalGames.net</a></li>
				<li><a href="/news/">News</a></li>
				<li><a href="#">User Research</a></li>
				<li><a href="/careers/">Careers</a></li>
				<li><a href="/terms/">Terms of Use</a></li>
                <li><a href="/privacy/">Privacy</a></li>
			</ul>
		</div>
        <div class="column">
			<ul>
				<li><a href="http://www.stream.haus">Streamhaüs</a></li>
                <li><a href="#">Forums</a></li>
                <li><a href="#" target="_null">Streamhaüs Emporium</a></li>
			</ul>
		</div>
		<div class="column">
			<ul>
				<li><a href="#">DIVERSE</a></li>
				<li><a href="/groups/">Groups</a></li>
				<li><a href="/forums/forum/diverse/">Forums</a></li>
                <li><a href="#">Credits</a></li>
			</ul>
		</div>
		<div class="column">
			<ul>
				<li><a href="/store/" target="_null">Store</a></li>
				<li><a href="#" target="_null">Games</a></li>
                <li><a href="#" target="_null">Developer Marketplace</a></li>
			</ul>
		</div>
		<div class="column">
			<ul>
				<li><a href="/help/">Help</a></li>
				<li><a href="/forums/">Forums</a></li>
				<li><a href="/faqs/">FAQ</a></li>
			</ul>
		</div>
		<div class="column esrb" style="float:right; position:relative; top:0;">
			<a href="http://www.esrb.org/index-js.jsp" class="esrb">
				<img src="/wp-content/themes/helicalnet/imgs/esrb-rp.jpg" alt="Rating Pending">
			</a>
		</div>
	</div>
<!--<div class="SelectLanguage container_select">
	<label for="select_language">Choose Language:</label>
	<select id="select_language">
			<option value="en">English</option>
	</select>
	<div id="menu_selectLanguage" class="menu_selectLanguage">
		<ul style="top: 0px;">
	     <li data-lang="en" class="on"><a>English <i class="fa fa-chevron-down"></i></a>
		</ul> 
	</div>
</div> -->
	<div class="followUs" style="position:relative;">
		<p>Follow Us</p>
		<ul style="display:inline-block;">
			<li class="facebook"><a href="https://www.facebook.com/helicalgamedevs/" style="height:22px; width:22px;" class="ir" title="Helical Games on Facebook"><div style="background:url(/wp-content/themes/helicalnet/imgs/icons/sprite_footer_socialIcons.png); background-repeat:no-repeat; background-position:0 0; height:22px; width:22px;"></div></a></li>
			<li class="twitter"><a href="https://twitter.com/helical_games" style="height:22px; width:22px;" class="ir" title="Helical Games on Twitter"><div style="background:url(/wp-content/themes/helicalnet/imgs/icons/sprite_footer_socialIcons.png); background-repeat:no-repeat; background-position:-30px 0; height:22px; width:22px; margin-top:1px;"></div></a></li>
			<li class="youtube"><a href="https://www.youtube.com/channel/UCQ_9WOMN_YH1F65hSgx4W_w" style="height:22px; width:22px;" class="ir" title="Helical Games on YouTube"><div style="background:url(/wp-content/themes/helicalnet/imgs/icons/sprite_footer_socialIcons.png); background-repeat:no-repeat; background-position:-59px 0; height:22px; width:22px; margin-top:1px;"></div></a></li>
		</ul>
	</div>
	<p class="copyright" style="margin-bottom:0px !important;">© <span>2016</span> Helical Media Productions. All rights reserved.</p>
    <p class="promo">Logo Design by <a href="http://pmlogos.com/">PM Logos</a> Site Design by <a href="http://business.helicalgames.net">Helical Media Productions</a></p>
</footer>
			<?php do_action( 'bp_footer' ); ?>
<!-- #footer -->

		<?php do_action( 'bp_after_footer' ); ?>

		<?php wp_footer(); ?>

	</body>

</html>