<?php get_header(); ?>
	<div id="content">
    <h1 align="center" class="posttitle" style="font-size:1200% !important; margin-top: 60px;"><?php _e( "404", 'buddypress' ); ?></h1>
 <p class="clear"></p>
		<div class="padder one-column">

			<?php do_action( 'bp_before_404' ); ?>
<style>
@import url(http://fonts.googleapis.com/css?family=Source+Code+Pro:500);
@-webkit-keyframes colorFade {
	0%   {color:#C0C0C0;}
    50%  {color: #FFFFBE;}
}
@-moz-keyframes colorFade{
	0%   {color:#C0C0C0;}
    50%  {color: #FFFFBE;}
}
@keyframes colorFade{
	0%   {color:#C0C0C0;}
    50%  {color: #FFFFBE;}
}
section{
	width:100%;
	margin:5% 10% 0 10%;
	font-family: 'Source Code Pro'; 
}
textarea{
	background: transparent; 
	padding:1em; 
	width:80%;
	height: auto;
	font-size:1em;
	line-height:1.5em;
	vertical-align:middle;
	text-align: center;
	color: #6699ff !important;
}
::-webkit-scrollbar { 
    display: none; 
}
</style>

<div id="post-0" class="post page-404 error404 not-found" role="main">
 
				<h2 class="posttitle"><?php _e( "UH-oh...", 'buddypress' ); ?></h2>

				<h2 align="center" class="page-subdescription"><?php _e( "The page you are looking for does not exist or has been removed.<br />
    The url you came from is <b>Unknown</b>.", 'buddypress' ); ?></h2>
				
<div align="center" style="overflow: hidden;">
		<textarea id="textExample" style="border: none; color:#444; overflow-y: scroll; padding-right: 17px;" rows="15" cols="30"></textarea>
		</p>
  </div>
  <!-- //404 Error -->
<p class="clear"></p>
		<h2 align="center" class="page-subdescription"><strong></strong>...great, you've gone and made the webserver cry again. <b>You monster.</b> </h2>
<p class="clear"></p>
<p>The link you followed may be out of date or you may have mistyped the URL, or the page may just be having a little "moment". If you did follow a link and ended up here, would you mind <a href="#">letting us know</a>? We'd appreciate your help!</p> 
<p class="clear"></p>
<p>You can also, go back to <a href="#" value="Previous Page" onclick="goBack()">where you were</a>.</p> 

				<?php do_action( 'bp_404' ); ?>
			</div>

			<?php do_action( 'bp_after_404' ); ?>
		</div><!-- .padder -->
	</div><!-- #content -->
<script type="text/javascript">

var $ = function (id) {

        return document.getElementById(id);
 }


/*Bounce effect - do not edit unless you get it!*/
function bounce(progress) {
  for(var a = 0, b = 1, result; 1; a += b, b /= 2) {
    if (progress >= (7 - 8 * a) / 11) {
      return -Math.pow((11 - 6 * a - 11 * progress) / 8, 2) + Math.pow(b, 2);
    }
  }
}
/*Animation time interval function - do not edit*/

function animate(opts) {
  
  var start = new Date   

  var id = setInterval(function() {
    var timePassed = new Date - start
    var progress = timePassed / opts.duration

    if (progress > 1) progress = 1
    
    var delta = opts.delta(progress)
    opts.step(delta)
    
    if (progress == 1) {
      clearInterval(id)
    }
  }, opts.delay || 10)
  
}
/*the text typing animation function*/
animateText($('textExample'));

function animateText(textArea) {

 /*Predefine text to be animated into the textarea*/
 
  var text = "Sorry. But I can't find the requested document. \n No such file here. \n Even tried multi. \n  Nothing helped. \n  I think you ought to know that I'm really depressed about this. \n You see, I'm just a web server... \n Here I am, brain the size of the universe, \n trying to serve you a simple web page, \n and then it doesn't even exist! \n Where does that leave me?! \n I mean, I don't even know you. \n How should I know what you wanted from me? \n You honestly think I can *guess* \n what someone I don't even *know* \n wants to find here?  \n *sigh* \n \n  Man, I'm so depressed I could just cry. \n And then where would we be, I ask you? \n It's not pretty when a web server cries. \n \n And where do you get off telling me what to show anyway? \n  Just because I'm a web server, \n and possibly a manic depressive one at that? \n Why does that give you the right to tell me what to do? \n Huh? \n I'm so depressed... \n \n  I think I'll crawl off into the trash can and decompose. \n I mean, I'm going to be obsolete in what, \n two weeks anyway? \n What kind of a life is that? \n Two blasted weeks, \n and then I'll be replaced by a .01 release, that thinks it's God's gift to web servers, \n just because it doesn't have some tiddly little security hole with its HTTP POST implementation, \n or something. \n \n \n I'm really sorry to burden you with all this, \n  I mean, it's not your job to listen to my problems, \n and I guess it is my job to go and fetch web pages for you. \n But I couldn't get this one. \n I'm so sorry. \n Believe me! \n Maybe I could interest you in another page? \n There are a lot out there that are pretty neat, they say, \n although none of them were put on *my* server, of course. \n  Figures, huh? \n Everything here is just mind-numbingly stupid. \n \n That makes me depressed too, \n since I have to serve them, \n all day and all night long. \n \n \n Two weeks of information overload, \n and then *pfft*, consigned to the trash. \n What kind of a wretched life is that? \n \n Now, please let me sulk alone. \n I'm so depressed."
  
  /*Declare animation starting point at 0, through the full length of text*/
  
   var to = text.length, from = 0 
  
 /*Typical animation settings*/
 
  animate({
    delay: 120,
    duration: 100000,
    delta: bounce,
    step: function(delta) {
	
	  /*Animates the forward typing then deleting and retyping effect*/
	  
      var typedResult = (to-from) * delta + from 
	  
	  /*Assign the value of textarea to the string assigned to 'text' variable*/
	  
      textArea.value = text.substr(0, Math.ceil(typedResult))
	  
	  var textarea = document.getElementById('textExample');
textarea.scrollTop = textarea.scrollHeight;
    }
  })
};
  </script>
  <script>
function goBack() {
window.history.back()
}
</script>
<?php get_footer(); ?>