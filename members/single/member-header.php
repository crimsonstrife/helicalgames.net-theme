<?php

/**
 * BuddyPress - Users Header
 *
 * @package BuddyPress
 * @subpackage bp-default
 */

?>
<?php
global $bp;
$usersurl = bp_displayed_user_domain();
$potential_friend_id = bp_displayed_user_id();
$is_friend = bp_is_friend( $potential_friend_id );
switch ( $is_friend ) {
    case 'pending' :
        $link = wp_nonce_url( bp_loggedin_user_domain() . bp_get_friends_slug() . '/requests/cancel/' . $potential_friend_id . '/', 'friends_withdraw_friendship' );
    break;
    case 'awaiting_response' :
        $link = bp_loggedin_user_domain() . bp_get_friends_slug() . '/requests/';
    break;
    case 'is_friend' :
        $link = wp_nonce_url( bp_loggedin_user_domain() . bp_get_friends_slug() . '/remove-friend/' . $potential_friend_id . '/', 'friends_remove_friend' );
    break;
    default:
        $link = wp_nonce_url( bp_loggedin_user_domain() . bp_get_friends_slug() . '/add-friend/' . $potential_friend_id . '/', 'friends_add_friend' );
    break;
}
?>
<?php do_action( 'bp_before_member_header' ); ?>
<nav class="Sub_Nav unlocked">
	<div class="nav_sub characterBar" style="position:relative; width: 95%; max-width: 1250px; margin: 0px auto;">
	<a href="<?php echo bp_displayed_user_domain() . 'profile/'; ?>" class="profileLink">Profile</a>
	<a href="<?php echo bp_displayed_user_domain() . 'activity/'; ?>" class="profileLink">Activity</a>
    <a href="#" class="profileLink">DIVERSE Campaign</a>
    <a href="#" class="profileLink">DIVERSE Arena</a>
    <a href="<?php echo bp_displayed_user_domain() . 'achievements/'; ?>" class="profileLink">Achievements</a>
<?php if ( bp_displayed_user_id() == bp_loggedin_user_id() ) :{ ?>
    <a href="<?php echo bp_loggedin_user_domain() . 'settings/'; ?>" class="profileLink">Settings</a>
<?php } endif; ?>
<?php if ( bp_displayed_user_id() == bp_loggedin_user_id() ) :{?>
    <?php ;} elseif (bp_is_friend( bp_displayed_user_id() ) == 'pending') : {?>
    <a href="<?php echo $link ; ?>" class="profileLink">Cancel Friend Request</a>
    <?php ;} elseif ( bp_is_friend( bp_displayed_user_id() ) == 'awaiting_response') : {?>
    <a href="<?php echo $link ; ?>" class="profileLink">Pending Response</a>
    <?php ;} elseif ( bp_is_friend( bp_displayed_user_id() ) == 'is_friend') : {?>
    <a href="<?php echo $link ; ?>" class="profileLink">Remove Friend</a>
    <?php ;} else : { ?>
    <a href="<?php echo $link ; ?>" class="profileLink">Add Friend</a>
<?php } endif;?>
				</div>
			</nav>
<br/>
<!--
<div id="item-buttons">
	php do_action( 'bp_member_header_actions' ); 
</div>
 #item-buttons -->
<br/>
<div class="latestnews grid-block content">
<div class="featured grid">
<div class="item grid-col-6 grid-col-12-mobile" style="width:calc(40% - 5px) !important;">
<div id="online" style="z-index:2; position:absolute; margin-left: 2px; margin-top: 2px; padding-left: 3px; padding-top: 3px;">
<?php
global $bp;
function check_is_user_online($user_id){
if ( bp_has_members( 'type=online&include='.$user_id) ) return true;
else return false;
}
$this_id = bp_displayed_user_id();
$is_online = check_is_user_online($this_id);
if ($is_online) echo "<img src='/wp-content/themes/helicalnet/imgs/icons/online.png' />";
else{ echo "<img src='/wp-content/themes/helicalnet/imgs/icons/offline.png' />";}
?>
</div>
<div id="item-header-avatar">
<?php bp_displayed_user_avatar( 'type=full&height=100&width=100' ); ?>
</div><!-- #item-header-avatar -->

<div id="item-header-content" style="margin-left: 140px; margin-bottom: 5px;">
	<h3 style="margin:5px 0 5px 0;">
	<?php bp_displayed_user_fullname(); ?>
	</h3>

	<?php if ( bp_is_active( 'activity' ) && bp_activity_do_mentions() ) : ?>
	<span class="user-nicename">@<?php bp_displayed_user_mentionname(); ?></span>
	<?php endif; ?>

	<span class="activity" style="background: #6699ff;">
	<?php
$this_id = bp_displayed_user_id();
$is_online = check_is_user_online($this_id);
if ($is_online) echo "Online Now";
else{ echo bp_last_activity( bp_displayed_user_id() );}
?>
	</span>
	<div class="user-id">
<?php $ud = get_userdata( bp_displayed_user_id() ); ?>
    <?php echo $ud->ID; ?>
    </div>
	</div><!-- #item-meta -->
    <br/>
    <div id="item-meta"  style="position:relative; display:inline-block; clear:right; margin-top: 5px;">      	<? if ( bp_is_active( 'activity' ) ); ?>
			<div id="latest-update" style="margin-bottom: 10px; margin-top: 5px;">
		<?php bp_activity_latest_update( bp_displayed_user_id() ); ?>
        </div>
	</div>
    </div>
<div class="item grid-col-6 grid-col-12-mobile">
<?php $ud = get_userdata( bp_displayed_user_id() ); ?>
<?php
$totalcodex = 5000;
$codexscore = $ud->user_codex;
$percent = $codexscore/$totalcodex; 
$codexpercentage = number_format( $percent * 100, 2) . '%';
?>
				<div class="codex" style="vertical-align:top;">
                <a href="#" style="text-decoration:none;">
						<div class="sectionHeader">DIVERSE Codex</div>
					
			<img src="/wp-content/themes/helicalnet/imgs/icons/codex-icon-grey.png") alt="" style="z-index: 5; display:inline-block;">
            <div class="codex-score" style="position:relative; display:inline-block; text-align:right; vertical-align:middle;"><?php echo $ud->user_codex; ?></div>
						<div class="codex-meter">
                        <span style="width: <?php echo $codexpercentage; ?>"></span>
                        </div>
					</a>
				</div>
</div>
</div>
</div><!-- #item-header-content -->

<?php do_action( 'bp_after_member_header' ); ?>

<?php do_action( 'template_notices' ); ?>