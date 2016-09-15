<style>
div#container {
	background: none !important ;
	border-right: none !important;
	overflow: hidden;
	position: relative;
	width: 100%;
	color:#FFF;
}
</style>

<?php

/**
 * HelicalGames.net - Users Home
 *
 * @package HelicalGames.net
 * @subpackage bp-default
 */

get_header( 'buddypress' ); ?>

	<div id="content" style="background:rgba(245, 245, 245, 0.05)">
		<div class="padder" style="border-right: none;">

			<?php do_action( 'bp_before_member_home_content' ); ?>

			<div id="item-header" role="complementary">

				<?php locate_template( array( 'members/single/member-header.php' ), true ); ?>

			</div><!-- #item-header -->

			<div id="item-nav" style="margin-top: 5%;">
				<div class="item-list-tabs no-ajax" id="object-nav" role="navigation" style="height: 40px;">
					<ul>

						<?php bp_get_displayed_user_nav(); ?>

						<?php do_action( 'bp_member_options_nav' ); ?>

					</ul>
				</div>
			</div><!-- #item-nav -->

			<div id="item-body">

				<?php do_action( 'bp_before_member_body' );

				if ( bp_is_user_activity() || !bp_current_component() ) :
					locate_template( array( 'members/single/activity.php'  ), true );

				 elseif ( bp_is_user_blogs() ) :
					locate_template( array( 'members/single/blogs.php'     ), true );

				elseif ( bp_is_user_friends() ) :
					locate_template( array( 'members/single/friends.php'   ), true );

				elseif ( bp_is_user_groups() ) :
					locate_template( array( 'members/single/groups.php'    ), true );

				elseif ( bp_is_user_messages() ) :
					locate_template( array( 'members/single/messages.php'  ), true );

				elseif ( bp_is_user_profile() ) :
					locate_template( array( 'members/single/profile.php'   ), true );

				elseif ( bp_is_user_forums() ) :
					locate_template( array( 'members/single/forums.php'    ), true );

				elseif ( bp_is_user_settings() ) :
					locate_template( array( 'members/single/settings.php'  ), true );

				elseif ( bp_is_user_notifications() ) :
					locate_template( array( 'members/single/notifications.php' ), true );

				// If nothing sticks, load a generic template
				else :
					locate_template( array( 'members/single/plugins.php'   ), true );

				endif;

				do_action( 'bp_after_member_body' ); ?>

			</div><!-- #item-body -->
<?php $ud = get_userdata( bp_displayed_user_id() ); ?>
<div class="profile" role="stats">
			<div class="bp-widget stats">
				<h4>DIVERSE Stats</h4>
				<table class="profile-fields">
							<tbody>
                            <tr class="field_1 field_name required-field visibility-public field_type_textbox">
				<td class="label">Playtime</td>
				<td class="data"><p><?php echo $ud->user_diverse_playtime; ?></p></td>
							</tr>
				</tbody></table>
			</div>
            			<div class="bp-widget stats">
<?php
$skills= $ud->user_diverse_s_kills;
$sdeaths= $ud->user_diverse_s_deaths;
?>
<?php
if ($sdeaths == '0' or $skills == '0' ) {
    $user_s_kd = $ud->user_diverse_s_kills;
} else {
    $user_s_kd = number_format( $skills / $sdeaths, 2);
}
?>
				<h4>Campaign Stats</h4>
<?php
$totalmissions = 15;
$user_s_camp_progress = $ud->user_diverse_s_cprogress;
$scomppercent = $user_s_camp_progress/$totalmissions; 
$singleplayer_progress = number_format( $scomppercent * 100, 0) . '%';
$singleplayer_progress_notpercent = number_format( $scomppercent * 100, 0);
?>                     
<div class="progress-radial progress-<?php echo $singleplayer_progress_notpercent ?>" style="margin-bottom: 8px; margin-top: 8px; height: 300px; width: 300px;">
  <div class="overlay" style="height: 260px; width: 260px; background-color: #2b2b2b;">
<div style="max-height: 16px; margin-top: 190px; margin-bottom: 2px; text-align:center; position:relative;">
  <?php echo $singleplayer_progress ?>
</div>
<div style="border-bottom: 2px solid rgba(245, 245, 245, 0.1); background-color: #e7e7e7; border: 0 none; height: 1px; max-width: 100px; margin-left: 75px; margin-right: 75px; margin-bottom: 2px; display:inline-block; position:relative;" />
<div style="max-height: 16px; text-align:center;">
  <?php echo $user_s_camp_progress . '/' . $totalmissions ?>
</div>
</div>
</div>
</div>

  <div style="position:relative;">
                
				<table class="profile-fields">
							<tbody>
                            <tr class="field_1 field_name required-field visibility-public field_type_textbox">
				<td class="label">Kills </td>
				<td class="data"><p><?php echo $ud->user_diverse_s_kills; ?></p></td>
							</tr>
                            <tr class="field_1 field_name required-field visibility-public field_type_textbox">
				<td class="label">Deaths </td>
				<td class="data"><p><?php echo $ud->user_diverse_s_deaths; ?></p></td>
							</tr>
                            <tr class="field_1 field_name required-field visibility-public field_type_textbox">
				<td class="label">Kill/Death Ratio </td>
				<td class="data"><p><?php echo $user_s_kd ?></p></td>
							</tr>
				</tbody></table>
			</div>
</div>
			<?php do_action( 'bp_after_member_home_content' ); ?>

		</div>
        </div><!-- .padder -->
	</div><!-- #content -->

<?php get_footer( 'buddypress' ); ?>
