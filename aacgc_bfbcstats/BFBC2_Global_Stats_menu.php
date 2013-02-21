<?php

/*
#######################################
#     AACGC BFBC2 Stats               #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/


//---------------------------------------------------------------

$bfbcsglobal_title .= "BFBC2 Global Stats"; 

//---------------------------------------------------------------

$url = 'http://api.bfbcs.com/api/pc?globalstats';
$postdata = '';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
$data = curl_exec($ch);
curl_close($ch);
$data = json_decode($data,true);

//---------------------------------------------------------------

$bfbcsglobal_text .= "<table style='width:100%' class='indent'>
<tr>
<td><center><a href='".e_PLUGIN."aacgc_bfbcstats/Member_Stats.php'>
<img src='".e_PLUGIN."aacgc_bfbcstats/images/bfbc2menubanner.jpg'></img>
</a></center></td>
</tr><tr>
<td>";

//-------------# Global PC Stats #-------------------------
if ($pref['bfbc_enable_globalpc'] == "1"){

$playerspc = number_format($data['players_pc']);
$serverspc = number_format($data['s_pc']['servers']);
$playersonlinepc = number_format($data['s_pc']['players']);

if ($pref['bfbc_enable_platform'] == "1"){
$iconpc = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/windows.png'></img> ";}

$bfbcsglobal_text .= "<table style='width:100%' class=''>
<tr>
<td style='' class='forumheader3' colspan='2'>".$iconpc."<b>Global PC Stats</b></td>
</tr><tr>
<td style='width:50%' class='forumheader3'>Total Players:</td>
<td style='width:50%' class='indent'>".$playerspc."</td>
</tr><tr>
<td style='' class='forumheader3'>Players Online:</td>
<td style='' class='indent'>".$playersonlinepc."</td>
</tr><tr>
<td style='' class='forumheader3'>Servers:</td>
<td style='' class='indent'>".$serverspc."</td>
</tr>
</table>";
}
//----------------------------------------------------------

//-------------# Global Xbox360 Stats #---------------------
if ($pref['bfbc_enable_globalxbox'] == "1"){

$playersxbox360 = number_format($data['players_360']);
$serversxbox360 = number_format($data['s_360']['servers']);
$playersonlinexbox360 = number_format($data['s_360']['players']);

if ($pref['bfbc_enable_platform'] == "1"){
$iconxbox360 = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/Xbox360.png'></img> ";}

$bfbcsglobal_text .= "<table style='width:100%' class=''>
<tr>
<td style='' class='forumheader3' colspan='2'>".$iconxbox360."<b>Global Xbox360 Stats</b></td>
</tr><tr>
<td style='width:50%' class='forumheader3'>Total Players:</td>
<td style='width:50%' class='indent'>".$playersxbox360."</td>
</tr><tr>
<td style='' class='forumheader3'>Players Online:</td>
<td style='' class='indent'>".$playersonlinexbox360."</td>
</tr><tr>
<td style='' class='forumheader3'>Servers:</td>
<td style='' class='indent'>".$serversxbox360."</td>
</tr>
</table>";
}
//----------------------------------------------------------

//-------------# Global PS3 Stats #---------------------
if ($pref['bfbc_enable_globalps'] == "1"){

$playersps3 = number_format($data['players_ps3']);
$serversps3 = number_format($data['s_ps3']['servers']);
$playersonlineps3 = number_format($data['s_ps3']['players']);

if ($pref['bfbc_enable_platform'] == "1"){
$iconps3 = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/PS3.png'></img> ";}

$bfbcsglobal_text .= "<table style='width:100%' class=''>
<tr>
<td style='' class='forumheader3' colspan='2'>".$iconps3."<b>Global PS3 Stats</b></center></td>
</tr><tr>
<td style='width:50%' class='forumheader3'>Total Players:</td>
<td style='width:50%' class='indent'>".$playersps3."</td>
</tr><tr>
<td style='' class='forumheader3'>Players Online:</td>
<td style='' class='indent'>".$playersonlineps3."</td>
</tr><tr>
<td style='' class='forumheader3'>Servers:</td>
<td style='' class='indent'>".$serversps3."</td>
</tr>
</table>";
}
//----------------------------------------------------------

$bfbcsglobal_text .= "</td></tr></table>";


$ns -> tablerender($bfbcsglobal_title, $bfbcsglobal_text);


//---------------------------------------------------------------



?>