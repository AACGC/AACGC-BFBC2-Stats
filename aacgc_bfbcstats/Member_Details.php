<?php

/*
#######################################
#     AACGC BFBC2 Stats               #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/

require_once("../../class2.php");
require_once(HEADERF);

if (e_QUERY) {
        $tmp = explode('.', e_QUERY);
        $action = $tmp[0];
        $sub_action = $tmp[1];
        $id = $tmp[2];
        unset($tmp);
}

if ($pref['bfbc_enable_gold'] == "1"){$gold_obj = new gold();}

//---------------------------------------------------------------

$title .= "Battlefield Bad Company 2 Member Details"; 

//---------------------------------------------------------------

$sql ->db_Select("user_extended", "*", "user_extended_id='".intval($sub_action)."'");
$row = $sql->db_Fetch();
$sql2 ->db_Select("user", "*", "user_id='".intval($row['user_extended_id'])."'");
$row2 = $sql2->db_Fetch();
if ($pref['bfbc_enable_gold'] == "1"){
$username = "".$gold_obj->show_orb($row2['user_id'])."";}
else
{$username = "".$row2['user_name']."";}
if ($pref['bfbc_enable_avatar'] == "1"){
if ($row2['user_image'] == "")
{$avatar = "";}
else
{$useravatar = $row2[user_image];
require_once(e_HANDLER."avatar_handler.php");
$useravatar = avatar($useravatar);
$avatar = "<img src='".$useravatar."' width=".$pref['bfbc_avatar_size']."px></img>";}}
$bfbcname = $row['user_bfbc2'];
//-----------------------------------------------------
if ($row['user_bfbc2type'] == "Windows"){$bftype = "pc";}
if ($row['user_bfbc2type'] == "Xbox360"){$bftype = "360";}
if ($row['user_bfbc2type'] == "PS3"){$bftype = "ps3";}
//-----------------------------------------------------
$url = 'http://api.bfbcs.com/api/'.$bftype.'';
$postdata = 'players='.$bfbcname.'&fields=all';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
$data = curl_exec($ch);
curl_close($ch);
$data = json_decode($data,true);
//------------------------------------------------------
$text .= "<table style='width:100%' class=''>";
$text .= "
<tr>
<td bgcolor='#000000'><center><img src='".e_PLUGIN."aacgc_bfbcstats/images/bfbc2banner.jpg'></img></center></td>
</tr>";
//--------------------------------------------------------

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js'></script>
<script type='text/javascript' src='bfbc2details.js'></script>
<script type='text/javascript'>
animatedcollapse.addDiv('weapons', 'fade=10,group=bfbc2deatils,persist=1,height=".$pref['bfbc_secth_weapons']."')
animatedcollapse.addDiv('vehicles', 'fade=10,group=bfbc2deatils,height=".$pref['bfbc_secth_vehicles']."')
animatedcollapse.addDiv('kits', 'fade=10,group=bfbc2deatils,height=".$pref['bfbc_secth_kits']."')
animatedcollapse.addDiv('teams', 'fade=10,group=bfbc2deatils,height=".$pref['bfbc_secth_teams']."')
animatedcollapse.addDiv('achiev', 'fade=10,group=bfbc2deatils,height=".$pref['bfbc_secth_achs']."')
animatedcollapse.addDiv('insig', 'fade=10,group=bfbc2deatils,height=".$pref['bfbc_secth_insig']."')
animatedcollapse.addDiv('pins', 'fade=10,group=bfbc2deatils,height=".$pref['bfbc_secth_pins']."')
animatedcollapse.ontoggle=function($, divobj, state){}
animatedcollapse.init()
</script>";}



//---------------# General #------------------------------
$text .= "<tr><td>";
require_once("".e_PLUGIN."aacgc_bfbcstats/general.php");
$text .= "</td></tr>";
//--------------------------------------------------------


//---------------# Expanding Buttons #--------------------
if ($pref['bfbc_enable_expandsections'] == "1"){
if ($pref['bfbc_button_loc'] == "Below General Info"){

$text .= "<tr><td class=''><table style='width:100%'><tr>";

if ($pref['bfbc_enable_weaponstats'] == "1"){
$text .= "<td class='indent'><center>
<a href='#' rel='toggle[weapons]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_weapons.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_weapons.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_weapons.jpg'></img></a>
</center></td>";}

if ($pref['bfbc_enable_vehiclestats'] == "1"){
$text .= "<td class='indent'><center>
<a href='#' rel='toggle[vehicles]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_vehicles.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_vehicles.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_vehicles.jpg'></img></a>
</center></td>";}

if ($pref['bfbc_enable_kitstats'] == "1"){
$text .= "<td class='indent'><center>
<a href='#' rel='toggle[kits]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_kits.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_kits.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_kits.jpg'></img></a>
</center></td>";}

if ($pref['bfbc_enable_teamstats'] == "1"){
$text .= "<td class='indent'><center>
<a href='#' rel='toggle[teams]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_teams.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_teams.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_teams.jpg'></img></a>
</center></td>";}

if ($pref['bfbc_enable_pinstats'] == "1"){
$text .= "<td class='indent'><center>
<a href='#' rel='toggle[pins]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_pins.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_pins.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_pins.jpg'></img></a>
</center></td>";}

if ($pref['bfbc_enable_insigstats'] == "1"){
$text .= "<td class='indent'><center>
<a href='#' rel='toggle[insig]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_insig.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_insig.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_insig.jpg'></img></a>
</center></td>";}

if ($pref['bfbc_enable_achstats'] == "1"){
$text .= "<td class='indent'><center>
<a href='#' rel='toggle[achiev]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_ach.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_ach.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_ach.jpg'></img></a>
</center></td>";}

$text .= "</tr></table></td></tr>";}}

//---------------------------------------------------------

$text .= "<tr><td>";

//---------------# Weapons #------------------------------
if ($pref['bfbc_enable_weaponstats'] == "1"){

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "<div id='weapons' style='display:none'><center>";}

require_once("".e_PLUGIN."aacgc_bfbcstats/weapons.php");

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "</div>";}
}
//--------------------------------------------------------



//---------------# Vehicles #------------------------------
if ($pref['bfbc_enable_vehiclestats'] == "1"){

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "<div id='vehicles' style='display:none'><center>";}

require_once("".e_PLUGIN."aacgc_bfbcstats/vehicles.php");

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "</div>";}
}
//---------------------------------------------------------


//---------------# Kits #------------------------------
if ($pref['bfbc_enable_kitstats'] == "1"){

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "<div id='kits' style='display:none'><center>";}

require_once("".e_PLUGIN."aacgc_bfbcstats/kits.php");

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "</div>";}
}
//---------------------------------------------------------


//---------------# Teams #------------------------------
if ($pref['bfbc_enable_teamstats'] == "1"){

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "<div id='teams' style='display:none'><center>";}

require_once("".e_PLUGIN."aacgc_bfbcstats/teams.php");

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "</div>";}
}
//---------------------------------------------------------


//---------------# Insiginias #----------------------------------
if ($pref['bfbc_enable_insigstats'] == "1"){

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "<div id='insig' style='display:none'><center>";}

require_once("".e_PLUGIN."aacgc_bfbcstats/insiginias.php");

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "</div>";}
}
//---------------------------------------------------------


//---------------# Pins #----------------------------------
if ($pref['bfbc_enable_pinstats'] == "1"){

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "<div id='pins' style='display:none'><center>";}

require_once("".e_PLUGIN."aacgc_bfbcstats/pins.php");

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "</div>";}
}
//---------------------------------------------------------


//---------------# Achievements #--------------------------
if ($pref['bfbc_enable_achstats'] == "1"){

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "<div id='achiev' style='display:none'><center>";}

require_once("".e_PLUGIN."aacgc_bfbcstats/achievements.php");

if ($pref['bfbc_enable_expandsections'] == "1"){
$text .= "</div>";}
}
//---------------------------------------------------------

$text .= "</td></tr>";

//--------------------------------------------------------
$text .= "</table>";
//--------------------------------------------------------


$text .= "<br><br><br><br><center>[ <a href='".e_PLUGIN."aacgc_bfbcstats/Member_Stats.php'>Back To Member List</a> ]</center>";

//--#AACGC Plugin Copyright&reg; - DO NOT REMOVE BELOW THIS LINE
require(e_PLUGIN . 'aacgc_bfbcstats/plugin.php');
$text .= "<br><br><br><br><br><br><br>
<a href='http://www.aacgc.com' target='_blank'><font size='1'>".$eplug_name." V".$eplug_version."  &reg;</a>  ---  ( <a href='http://bfbcs.com/api' target='_blank'>Powered by bfbcs.com</a> )</font>";
//---------------------------------------------------------------
$ns -> tablerender($title, $text);
//---------------------------------------------------------------
require_once(FOOTERF);
?>
