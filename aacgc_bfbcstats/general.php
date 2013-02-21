<?php

/*
#######################################
#     AACGC BFBC2 Stats               #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/

//-----------------------------------------------------
$membername = $data['players']['0']['name'];
$rank = $data['players']['0']['rank'];  
$rankname = $data['players']['0']['rank_name']; 
$score = number_format($data['players']['0']['score']);
$level = number_format($data['players']['0']['level']);
$kills = number_format($data['players']['0']['kills']); 
$deaths = number_format($data['players']['0']['deaths']);
$kdratio = round($kills/$deaths, 2);
$ttime  = $data['players']['0']['time'];
$lastupdated = $data['players']['0']['date_lastupdate'];
$totalupdates = number_format($data['players']['0']['count_updates']);

$hours = intval(intval($ttime) / 3600);
$minutes = bcmod((intval($ttime) / 60),60);
$seconds = bcmod(intval($ttime),60);
$time = "".$hours." hours, ".$minutes." minutes, ".$seconds." seconds";

if ($pref['bfbc_enable_platform'] == "1"){
if ($row['user_bfbc2type'] == "Windows"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/windows.png' align=left></img> PC";}
if ($row['user_bfbc2type'] == "Xbox360"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/Xbox360.png' align=left></img> Xbox360";}
if ($row['user_bfbc2type'] == "PS3"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/PS3.png' align=left></img> PS3";}}

//------------------------------------------------------

if ($pref['bfbc_enable_platform'] == "1"){
$rowspan = "12";}
else
{$rowspan = "11";}

$text .= "<table style='width:100%'>";

$text .= "
<tr>
<td class='indent' style='width:0%' rowspan='".$rowspan."'><center><img  width='125px' src='".e_PLUGIN."aacgc_bfbcstats/ranks/".$rank.".png'></img></center></td>
<td class='indent' style='width:20%'>Username:</td>
<td class='indent' style='width:60%'>".$avatar." <a href='".e_BASE."user.php?id.".$row2['user_id']."'>".$username."</a></td>";


//---------------# Expanding Buttons #--------------------
if ($pref['bfbc_enable_expandsections'] == "1"){
if ($pref['bfbc_button_loc'] == "Beside General Info"){

$text .= "<td class='indent' style='width:0%' rowspan='".$rowspan."'>";

$text .= "<table style='width:100%'>";

if ($pref['bfbc_enable_weaponstats'] == "1"){
$text .= "<tr><td class='indent'><center>
<a href='#' rel='toggle[weapons]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_weapons.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_weapons.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_weapons.jpg'></img></a>
</center></td></tr>";}

if ($pref['bfbc_enable_vehiclestats'] == "1"){
$text .= "<tr><td class='indent'><center>
<a href='#' rel='toggle[vehicles]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_vehicles.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_vehicles.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_vehicles.jpg'></img></a>
</center></td></tr>";}

if ($pref['bfbc_enable_kitstats'] == "1"){
$text .= "<tr><td class='indent'><center>
<a href='#' rel='toggle[kits]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_kits.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_kits.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_kits.jpg'></img></a>
</center></td></tr>";}

if ($pref['bfbc_enable_teamstats'] == "1"){
$text .= "<tr><td class='indent'><center>
<a href='#' rel='toggle[teams]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_teams.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_teams.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_teams.jpg'></img></a>
</center></td></tr>";}

if ($pref['bfbc_enable_pinstats'] == "1"){
$text .= "<tr><td class='indent'><center>
<a href='#' rel='toggle[pins]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_pins.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_pins.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_pins.jpg'></img></a>
</center></td></tr>";}

if ($pref['bfbc_enable_insigstats'] == "1"){
$text .= "<tr><td class='indent'><center>
<a href='#' rel='toggle[insig]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_insig.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_insig.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_insig.jpg'></img></a>
</center></td></tr>";}

if ($pref['bfbc_enable_achstats'] == "1"){
$text .= "<tr><td class='indent'><center>
<a href='#' rel='toggle[achiev]' data-openimage='".e_PLUGIN."aacgc_bfbcstats/images/button_ach.jpg' data-closedimage='".e_PLUGIN."aacgc_bfbcstats/images/button_ach.jpg'><img src='".e_PLUGIN."aacgc_bfbcstats/images/button_ach.jpg'></img></a>
</center></td></tr>";}


$text .= "</table></td>";}}
//---------------------------------------------------------


$text .= "</tr>";

if ($pref['bfbc_enable_platform'] == "1"){
$text .= "
<tr>
<td class='indent'>Platform:</td>
<td class='indent'>".$platform."</td>
</tr>";}

$text .= "
<tr>
<td class='indent'>BFBC2 Username:</td>
<td class='indent'>".$membername."</td>
</tr><tr>
<td class='indent'>Rank:</td>
<td class='indent'>".$rankname." (".$rank.")</td>
</tr><tr>
<td class='indent'>Level:</td>
<td class='indent'>".$level."</td>
</tr><tr>
<td class='indent'>Kills:</td>
<td class='indent'>".$kills."</td>
</tr><tr>
<td class='indent'>Deaths:</td>
<td class='indent'>".$deaths."</td>
</tr><tr>
<td class='indent'>Score:</td>
<td class='indent'>".$score."</td>
</tr><tr>
<td class='indent'>K/D Ratio:</td>
<td class='indent'>".$kdratio."</td>
</tr><tr>
<td class='indent'>Time Played:</td>
<td class='indent'>".$time."</td>
</tr><tr>
<td class='indent'>Last Updated:</td>
<td class='indent'>".$lastupdated."</td>
</tr><tr>
<td class='indent'>Total Updates:</td>
<td class='indent'>".$totalupdates."</td>
</tr>
";

$text .= "</table>";

//-----------------------------------------------------

?>
