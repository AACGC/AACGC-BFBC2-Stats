<?php


/*
#######################################
#     e107 website system plguin      #
#     AACGC BFBC2 Stats               #    
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/



require_once("../../class2.php");
if (!defined('e107_INIT'))
{exit;}
if (!getperms("P"))
{header("location:" . e_HTTP . "index.php");
exit;}
require_once(e_ADMIN . "auth.php");
if (!defined('ADMIN_WIDTH'))
{define(ADMIN_WIDTH, "width:100%;");}

if (e_QUERY == "update")
{
 
    $pref['bfbc_height'] = $_POST['bfbc_height'];
    $pref['bfbc_speed'] = $_POST['bfbc_speed'];
    $pref['bfbc_mouseoverspeed'] = $_POST['bfbc_mouseoverspeed'];
    $pref['bfbc_mouseoutspeed'] = $_POST['bfbc_mouseoutspeed'];
    $pref['bfbc_avatar_size'] = $_POST['bfbc_avatar_size'];
    $pref['bfbc_rendperpage'] = $_POST['bfbc_rendperpage'];

    $pref['bfbc_secth_weapons'] = $_POST['bfbc_secth_weapons'];
    $pref['bfbc_secth_vehicles'] = $_POST['bfbc_secth_vehicles'];
    $pref['bfbc_secth_kits'] = $_POST['bfbc_secth_kits'];
    $pref['bfbc_secth_teams'] = $_POST['bfbc_secth_teams'];
    $pref['bfbc_secth_insig'] = $_POST['bfbc_secth_insig'];
    $pref['bfbc_secth_pins'] = $_POST['bfbc_secth_pins'];
    $pref['bfbc_secth_achs'] = $_POST['bfbc_secth_achs'];
    $pref['bfbc_button_loc'] = $_POST['bfbc_button_loc'];


if (isset($_POST['bfbc_enable_forum'])) 
{$pref['bfbc_enable_forum'] = 1;}
else
{$pref['bfbc_enable_forum'] = 0;}

if (isset($_POST['bfbc_enable_profile'])) 
{$pref['bfbc_enable_profile'] = 1;}
else
{$pref['bfbc_enable_profile'] = 0;}

if (isset($_POST['bfbc_enable_gold'])) 
{$pref['bfbc_enable_gold'] = 1;}
else
{$pref['bfbc_enable_gold'] = 0;}

if (isset($_POST['bfbc_enable_avatar'])) 
{$pref['bfbc_enable_avatar'] = 1;}
else
{$pref['bfbc_enable_avatar'] = 0;}

if (isset($_POST['bfbc_enable_username'])) 
{$pref['bfbc_enable_username'] = 1;}
else
{$pref['bfbc_enable_username'] = 0;}

if (isset($_POST['bfbc_enable_platform'])) 
{$pref['bfbc_enable_platform'] = 1;}
else
{$pref['bfbc_enable_platform'] = 0;}


if (isset($_POST['bfbc_enable_weaponstats'])) 
{$pref['bfbc_enable_weaponstats'] = 1;}
else
{$pref['bfbc_enable_weaponstats'] = 0;}

if (isset($_POST['bfbc_enable_vehiclestats'])) 
{$pref['bfbc_enable_vehiclestats'] = 1;}
else
{$pref['bfbc_enable_vehiclestats'] = 0;}

if (isset($_POST['bfbc_enable_kitstats'])) 
{$pref['bfbc_enable_kitstats'] = 1;}
else
{$pref['bfbc_enable_kitstats'] = 0;}

if (isset($_POST['bfbc_enable_teamstats'])) 
{$pref['bfbc_enable_teamstats'] = 1;}
else
{$pref['bfbc_enable_teamstats'] = 0;}

if (isset($_POST['bfbc_enable_insigstats'])) 
{$pref['bfbc_enable_insigstats'] = 1;}
else
{$pref['bfbc_enable_insigstats'] = 0;}

if (isset($_POST['bfbc_enable_pinstats'])) 
{$pref['bfbc_enable_pinstats'] = 1;}
else
{$pref['bfbc_enable_pinstats'] = 0;}

if (isset($_POST['bfbc_enable_achstats'])) 
{$pref['bfbc_enable_achstats'] = 1;}
else
{$pref['bfbc_enable_achstats'] = 0;}

if (isset($_POST['bfbc_enable_globalpc'])) 
{$pref['bfbc_enable_globalpc'] = 1;}
else
{$pref['bfbc_enable_globalpc'] = 0;}

if (isset($_POST['bfbc_enable_globalxbox'])) 
{$pref['bfbc_enable_globalxbox'] = 1;}
else
{$pref['bfbc_enable_globalxbox'] = 0;}

if (isset($_POST['bfbc_enable_globalps'])) 
{$pref['bfbc_enable_globalps'] = 1;}
else
{$pref['bfbc_enable_globalps'] = 0;}

if (isset($_POST['bfbc_enable_expandsections'])) 
{$pref['bfbc_enable_expandsections'] = 1;}
else
{$pref['bfbc_enable_expandsections'] = 0;}


if (isset($_POST['bfbc_enable_umrank'])) 
{$pref['bfbc_enable_umrank'] = 1;}
else
{$pref['bfbc_enable_umrank'] = 0;}

if (isset($_POST['bfbc_enable_umscore'])) 
{$pref['bfbc_enable_umscore'] = 1;}
else
{$pref['bfbc_enable_umscore'] = 0;}

if (isset($_POST['bfbc_enable_umlevel'])) 
{$pref['bfbc_enable_umlevel'] = 1;}
else
{$pref['bfbc_enable_umlevel'] = 0;}

if (isset($_POST['bfbc_enable_umkills'])) 
{$pref['bfbc_enable_umkills'] = 1;}
else
{$pref['bfbc_enable_umkills'] = 0;}

if (isset($_POST['bfbc_enable_umdeaths'])) 
{$pref['bfbc_enable_umdeaths'] = 1;}
else
{$pref['bfbc_enable_umdeaths'] = 0;}

if (isset($_POST['bfbc_enable_umkdratio'])) 
{$pref['bfbc_enable_umkdratio'] = 1;}
else
{$pref['bfbc_enable_umkdratio'] = 0;}

if (isset($_POST['bfbc_enable_umtime'])) 
{$pref['bfbc_enable_umtime'] = 1;}
else
{$pref['bfbc_enable_umtime'] = 0;}

if (isset($_POST['bfbc_enable_umupdated'])) 
{$pref['bfbc_enable_umupdated'] = 1;}
else
{$pref['bfbc_enable_umupdated'] = 0;}

    save_prefs();
    $led_msgtext = "Settings Saved";
}

$admin_title = "AACGC BFBC2 Stats (settings)";
//--------------------------------------------------------------------


$text .= "
<form method='post' action='" . e_SELF . "?update' id='confnwb'>
	<table style='" . ADMIN_WIDTH . "' class='fborder'>


		<tr>
			<td colspan='3' class='fcaption'><b>Main Page Settings:</b></td>
		</tr>
                
                <tr>
		        <td style='width:30%' class='forumheader3'>Show BFBC2 Usernames beside Website Username:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_username'] == 1 ? "<input type='checkbox' name='bfbc_enable_username' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_username' value='0' />")."</td>
	        </tr>
              <tr>
		        <td style='width:30%' class='forumheader3'>Show Users Avatar:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_avatar'] == 1 ? "<input type='checkbox' name='bfbc_enable_avatar' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_avatar' value='0' />")."</td>
	        </tr>
		<tr>
			<td style='width:30%' class='forumheader3'>Avatar Size:</td>
			<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='bfbc_avatar_size' value='" . $tp->toFORM($pref['bfbc_avatar_size']) . "' />px</td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Platform Icons:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_platform'] == 1 ? "<input type='checkbox' name='bfbc_enable_platform' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_platform' value='0' />")." (effects all pages and menus)</td>
	        </tr>
              <tr>
		        <td style='width:30%' class='forumheader3'>Number Of Users per page:</td>
		        <td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='bfbc_rendperpage' value='" . $tp->toFORM($pref['bfbc_rendperpage']) . "' /></td>
	        </tr>





		<tr>
			<td colspan='3' class='fcaption'><b>Member Detail Page Settings:</b></td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Use Alternate Layout With Expanding Sections:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_expandsections'] == 1 ? "<input type='checkbox' name='bfbc_enable_expandsections' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_expandsections' value='0' />")."</td>
	        </tr>
              <tr>
<td style='width:30%' class='forumheader3'>Location of Expanding Section Buttons:<br>(If Alternate Layout With Expanding Sections Enabled)</td>
		 <td colspan='2'  class='forumheader3'>
<input class='tbox' type='radio'  name='bfbc_button_loc'  value='Below General Info' ".
($pref['bfbc_button_loc']=='Below General Info'?"checked='checked'":'')." />Below General Info 
<br>
<input class='tbox' type='radio'  name='bfbc_button_loc' value='Beside General Info' ".
($pref['bfbc_button_loc']=="Beside General Info"?"checked='checked'":'')." />Beside General Info
             </td>
	        </tr>


                <tr>
		        <td style='width:30%' class='forumheader3'>Show Weapon Stats:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_weaponstats'] == 1 ? "<input type='checkbox' name='bfbc_enable_weaponstats' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_weaponstats' value='0' />")."</td>
	        </tr>
		<tr>
	<td style='width:30%' class='forumheader3'>Weapon Stats Section Height:</td>
	<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='bfbc_secth_weapons' value='" . $tp->toFORM($pref['bfbc_secth_weapons']) . "' /> (Ex. 300px or auto for full)</td>
		</tr>

                <tr>
		        <td style='width:30%' class='forumheader3'>Show Vehicle Stats:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_vehiclestats'] == 1 ? "<input type='checkbox' name='bfbc_enable_vehiclestats' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_vehiclestats' value='0' />")."</td>
	        </tr>
		<tr>
	<td style='width:30%' class='forumheader3'>Vehicle Stats Section Height:</td>
	<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='bfbc_secth_vehicles' value='" . $tp->toFORM($pref['bfbc_secth_vehicles']) . "' /> (Ex. 300px or auto for full)</td>
		</tr>

                <tr>
		        <td style='width:30%' class='forumheader3'>Show Kit Stats:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_kitstats'] == 1 ? "<input type='checkbox' name='bfbc_enable_kitstats' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_kitstats' value='0' />")."</td>
	        </tr>
		<tr>
	<td style='width:30%' class='forumheader3'>Kit Stats Section Height:</td>
	<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='bfbc_secth_kits' value='" . $tp->toFORM($pref['bfbc_secth_kits']) . "' /> (Ex. 300px or auto for full)</td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Team Stats:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_teamstats'] == 1 ? "<input type='checkbox' name='bfbc_enable_teamstats' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_teamstats' value='0' />")."</td>
	        </tr>
		<tr>
	<td style='width:30%' class='forumheader3'>Team Stats Section Height:</td>
	<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='bfbc_secth_teams' value='" . $tp->toFORM($pref['bfbc_secth_teams']) . "' /> (Ex. 300px or auto for full)</td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Insiginia Stats:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_insigstats'] == 1 ? "<input type='checkbox' name='bfbc_enable_insigstats' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_insigstats' value='0' />")."</td>
	        </tr>
		<tr>
	<td style='width:30%' class='forumheader3'>Insiginia Stats Section Height:</td>
	<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='bfbc_secth_insig' value='" . $tp->toFORM($pref['bfbc_secth_insig']) . "' /> (Ex. 300px or auto for full)</td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Pin Stats:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_pinstats'] == 1 ? "<input type='checkbox' name='bfbc_enable_pinstats' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_pinstats' value='0' />")."</td>
	        </tr>
		<tr>
	<td style='width:30%' class='forumheader3'>Pin Stats Section Height:</td>
	<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='bfbc_secth_pins' value='" . $tp->toFORM($pref['bfbc_secth_pins']) . "' /> (Ex. 300px or auto for full)</td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Achievement Stats:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_achstats'] == 1 ? "<input type='checkbox' name='bfbc_enable_achstats' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_achstats' value='0' />")."</td>
	        </tr>
		<tr>
	<td style='width:30%' class='forumheader3'>Achievements Stats Section Height:</td>
	<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='bfbc_secth_achs' value='" . $tp->toFORM($pref['bfbc_secth_achs']) . "' /> (Ex. 300px or auto for full)</td>
		</tr>



		<tr>
			<td colspan='3' class='fcaption'><b>Scrolling Member Stats Menu Settings:</b></td>
		</tr>


		<tr>
			<td style='width:30%' class='forumheader3'>Menu Height:</td>
			<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='bfbc_height' value='" . $tp->toFORM($pref['bfbc_height']) . "' />px  (pixles)</td>
		</tr>
		<tr>
			<td style='width:30%' class='forumheader3'>Scroll Speed On Start:</td>
			<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='bfbc_speed' value='" . $tp->toFORM($pref['bfbc_speed']) . "' />  (1 for slow, 10 for fast)</td>
		</tr>
		<tr>
			<td style='width:30%' class='forumheader3'>Scroll Speed On Mouseover:</td>
			<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='bfbc_mouseoverspeed' value='" . $tp->toFORM($pref['bfbc_mouseoverspeed']) . "' />  (1 for slow, 10 for fast, 0 for it to stop)</td>
		</tr>
		<tr>
			<td style='width:30%' class='forumheader3'>Scroll Speed On Mouseout:</td>
			<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='bfbc_mouseoutspeed' value='" . $tp->toFORM($pref['bfbc_mouseoutspeed']) . "' />  (1 for slow, 10 for fast)</td>
		</tr>




		<tr>
			<td colspan='3' class='fcaption'><b>User Stats Menu Settings:</b></td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show User Rank:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_umrank'] == 1 ? "<input type='checkbox' name='bfbc_enable_umrank' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_umrank' value='0' />")."</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show User Score:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_umscore'] == 1 ? "<input type='checkbox' name='bfbc_enable_umscore' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_umscore' value='0' />")."</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show User Level:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_umlevel'] == 1 ? "<input type='checkbox' name='bfbc_enable_umlevel' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_umlevel' value='0' />")."</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show User Kills:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_umkills'] == 1 ? "<input type='checkbox' name='bfbc_enable_umkills' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_umkills' value='0' />")."</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show User Death:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_umdeaths'] == 1 ? "<input type='checkbox' name='bfbc_enable_umdeaths' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_umdeaths' value='0' />")."</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show User K/D Ration:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_umkdratio'] == 1 ? "<input type='checkbox' name='bfbc_enable_umkdratio' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_umkdratio' value='0' />")."</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show User Time:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_umtime'] == 1 ? "<input type='checkbox' name='bfbc_enable_umtime' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_umtime' value='0' />")."</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show User Last Updated:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_umupdated'] == 1 ? "<input type='checkbox' name='bfbc_enable_umupdated' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_umupdated' value='0' />")."</td>
	        </tr>



		<tr>
			<td colspan='3' class='fcaption'><b>Global Stats Menu Settings:</b></td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Global PC Stats:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_globalpc'] == 1 ? "<input type='checkbox' name='bfbc_enable_globalpc' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_globalpc' value='0' />")."</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Global Xbox360 Stats:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_globalxbox'] == 1 ? "<input type='checkbox' name='bfbc_enable_globalxbox' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_globalxbox' value='0' />")."</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Global PS3 Stats:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_globalps'] == 1 ? "<input type='checkbox' name='bfbc_enable_globalps' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_globalps' value='0' />")."</td>
	        </tr>







		<tr>
			<td colspan='3' class='fcaption'><b>Extra Settings:</b></td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Stats Badge In Forums:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_forum'] == 1 ? "<input type='checkbox' name='bfbc_enable_forum' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_forum' value='0' />")." (Only works with some themes, check the AACGC FAQs for more info)</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Stats Badge In Profiles:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_profile'] == 1 ? "<input type='checkbox' name='bfbc_enable_profile' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_profile' value='0' />")." (Only works with default e107 profiles)</td>
	        </tr>

                <tr>
		        <td style='width:30%' class='forumheader3'>Show Gold Orbs as Usernames:</td>
		        <td colspan=2 class='forumheader3'>".($pref['bfbc_enable_gold'] == 1 ? "<input type='checkbox' name='bfbc_enable_gold' value='1' checked='checked' />" : "<input type='checkbox' name='bfbc_enable_gold' value='0' />")." (Must Have Gold Orbs Installed)</td>
	        </tr>

		
                <tr>
			<td colspan='3' class='fcaption' style='text-align: left;'><input type='submit' name='update' value='Save Settings' class='button' /></td>
		</tr>





</table>
</form>";



$ns->tablerender($admin_title, $text);
require_once(e_ADMIN . "footer.php");
?>
