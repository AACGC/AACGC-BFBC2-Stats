<?php

/*
#######################################
#     e107 website system plguin      #
#     AACGC BFBC2 Stats               #    
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/


if ($pref['bfbc_enable_gold'] == "1"){$gold_obj = new gold();}

//-----------------Menu Title--------------------------------+

$bfbcuser_title .= "My BFBC2 Stats";

//-----------------------------------------------------------+
$bfbcuser_text .= "
<table style='width:100%' class='forumheader3'>
<tr>
<td colspan='2'><center>
<a href='".e_PLUGIN."aacgc_bfbcstats/Member_Stats.php'><img src='".e_PLUGIN."aacgc_bfbcstats/images/bfbc2menubanner.jpg'></img></a>
</center></td>
</tr>";

if (USER){
//-----------------------------------------------------------+

$sql ->db_Select("user_extended", "*", "user_extended_id='".USERID."'");
$row = $sql->db_Fetch();
$sql2 = new db;
$sql2 ->db_Select("user", "*", "user_id='".USERID."'");
$row2 = $sql2->db_Fetch();

if ($row['user_bfbc2'] == ""){$bfbcuser_text .= "<tr><td colspan='2' class='indent'><i>You Do Not Have a BFBC2 Username Entered in Your Profile Settings.</i></td></tr>";}         
else{
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

if ($row['user_bfbc2type'] == "Windows"){$bftype = "pc";}
if ($row['user_bfbc2type'] == "Xbox360"){$bftype = "360";}
if ($row['user_bfbc2type'] == "PS3"){$bftype = "ps3";}

$userid = $row['user_extended_id'];
$userbfbcname = $row['user_bfbc2'];

if ($pref['bfbc_enable_platform'] == "1"){
if ($row['user_bfbc2type'] == "Windows"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/windows.png' align=right></img>";}
if ($row['user_bfbc2type'] == "Xbox360"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/Xbox360.png' align=right></img>";}
if ($row['user_bfbc2type'] == "PS3"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/PS3.png' align=right></img>";}}

$url = 'http://api.bfbcs.com/api/'.$bftype.'';
$postdata = 'players='.$userbfbcname.'&fields=general';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
$data = curl_exec($ch);
curl_close($ch);
$data = json_decode($data,true);

if($data['players']['0']['name'] == "")
{$bfbcuser_text .= "<tr><td colspan='2' class='indent'><i>No BFBC2 Username found, check your username and try again.</i></td></tr>";}
else
{

$membername = $data['players']['0']['name'];
$rank = $data['players']['0']['rank'];  
$rankname = $data['players']['0']['rank_name']; 
$rankimg = "<img  width='25px' src='".e_PLUGIN."aacgc_bfbcstats/ranks/".$rank.".png'></img>";
$score = number_format($data['players']['0']['score']);
$level = number_format($data['players']['0']['level']);
$kills = number_format($data['players']['0']['kills']); 
$deaths = number_format($data['players']['0']['deaths']);
$kdratio = round($kills/$deaths, 2);
$ttime  = $data['players']['0']['time'];
$lastupdated = $data['players']['0']['date_lastupdate'];

$hours = intval(intval($ttime) / 3600);
$minutes = bcmod((intval($ttime) / 60),60);
$seconds = bcmod(intval($ttime),60);
$time = "".$hours." hours, ".$minutes." minutes, ".$seconds." seconds";

$statslink = "<center><a href='".e_PLUGIN."aacgc_bfbcstats/Member_Details.php?det.".USERID."'><img src='".e_PLUGIN."aacgc_bfbcstats/images/statslink.jpg'></img></a></center>";

//-----------------------------------------------------------+

$bfbcuser_text .= "
<tr>
<td colspan='2' class='indent'><center>Welcome Back<br>".$avatar ." <a href='".e_PLUGIN."aacgc_bfbcstats/Member_Details.php?det.".$userid."'>".$username."</a><br>Your Current BFBC2 Stats:
</td>";


$bfbcuser_text .= "
<tr>
<td style='width:10%' class='indent'>BFBC2 Username:</td>
<td style='width:90%' class='indent'>".$membername."</td>
</tr>";

if ($pref['bfbc_enable_umrank'] == "1"){
$bfbcuser_text .= "
<tr>
<td style='width:10%' class='indent'>Rank:</td>
<td style='width:90%' class='indent'>".$rankimg." <font size='1'>".$rankname."</font></td>
</tr>";}

if ($pref['bfbc_enable_umscore'] == "1"){
$bfbcuser_text .= "
<tr>
<td style='width:10%' class='indent'>Score:</td>
<td style='width:90%' class='indent'>".$score."</td>
</tr>";}

if ($pref['bfbc_enable_umlevel'] == "1"){
$bfbcuser_text .= "
<tr>
<td style='width:10%' class='indent'>Level:</td>
<td style='width:90%' class='indent'>".$level."</td>
</tr>";}

if ($pref['bfbc_enable_umkills'] == "1"){
$bfbcuser_text .= "
<tr>
<td style='width:10%' class='indent'>Kills:</td>
<td style='width:90%' class='indent'>".$kills."</td>
</tr>";}

if ($pref['bfbc_enable_umdeaths'] == "1"){
$bfbcuser_text .= "
<tr>
<td style='width:10%' class='indent'>Deaths:</td>
<td style='width:90%' class='indent'>".$deaths."</td>
</tr>";}

if ($pref['bfbc_enable_umkdratio'] == "1"){
$bfbcuser_text .= "
<tr>
<td style='width:10%' class='indent'>K/D Ratio:</td>
<td style='width:90%' class='indent'>".$kdratio."</td>
</tr>";}

if ($pref['bfbc_enable_umtime'] == "1"){
$bfbcuser_text .= "
<tr>
<td style='width:10%' class='indent'>Time Played:</td>
<td style='width:90%' class='indent'>".$time."</td>
</tr>";}

if ($pref['bfbc_enable_umupdated'] == "1"){
$bfbcuser_text .= "
<tr>
<td style='width:10%' class='indent'>Last Updated:</td>
<td style='width:90%' class='indent'>".$lastupdated."</td>
</tr>";}

$bfbcuser_text .= "
<tr>
<td colspan='2' class='indent'>".$statslink."</td>
</tr>
";}}}

//-----------------------------------------------------------+

else

{$bfbcuser_text .= "
<tr>
<td colspan='2' class='indent'><i>You Must Login or Register to View Your BFBC2 Stats.</i></td>
</tr>";}

//-----------------------------------------------------------+

$bfbcuser_text .= "</table>";

//-----------------------------------------------------------+

$ns -> tablerender($bfbcuser_title, $bfbcuser_text);


?>


