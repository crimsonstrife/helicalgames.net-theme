		</div> <!-- #container -->
</div>
		<?php do_action( 'bp_after_container' ); ?>
		<?php do_action( 'bp_before_footer'   ); ?>
<footer class="footer" style="height:inherit;">
	<a href="<?php echo home_url(); ?>">
		<img src="/public/helicalnet/imgs/branding/horizontal-sw.png" class="footerLogo" style="width:100%; max-height:70px; max-width:101px;">
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
				<li><a href="/aboutdiverse">DIVERSE</a></li>
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
				<img src="/public/helicalnet/imgs/esrb-rp.jpg" alt="Rating Pending">
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
			<li class="facebook"><a href="https://www.facebook.com/helicalgamedevs/" style="height:22px; width:22px;" class="ir" title="Helical Games on Facebook"><div style="background:url(/public/helicalnet/imgs/icons/sprite_footer_socialIcons.png); background-repeat:no-repeat; background-position:0 0; height:22px; width:22px;"></div></a></li>
			<li class="twitter"><a href="https://twitter.com/helical_games" style="height:22px; width:22px;" class="ir" title="Helical Games on Twitter"><div style="background:url(/public/helicalnet/imgs/icons/sprite_footer_socialIcons.png); background-repeat:no-repeat; background-position:-30px 0; height:22px; width:22px; margin-top:1px;"></div></a></li>
			<li class="youtube"><a href="https://www.youtube.com/channel/UCQ_9WOMN_YH1F65hSgx4W_w" style="height:22px; width:22px;" class="ir" title="Helical Games on YouTube"><div style="background:url(/public/helicalnet/imgs/icons/sprite_footer_socialIcons.png); background-repeat:no-repeat; background-position:-59px 0; height:22px; width:22px; margin-top:1px;"></div></a></li>
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