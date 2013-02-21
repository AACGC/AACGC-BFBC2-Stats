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

$bfbc_title .= "BFBC2 Member Stats";

//-----------------------------------------------------------+


//----------------Menu News & Info Section-------------------+

$bfbc_text .= "
<table style='width:100%' class='forumheader3'>
<tr>
<td colspan='2'><center><a href='".e_PLUGIN."aacgc_bfbcstats/Member_Stats.php'><img src='".e_PLUGIN."aacgc_bfbcstats/images/bfbc2menubanner.jpg'></img></a></center></td>
</tr><tr>
<td style='width:50%' class='forumheader3'>User</td>
<td style='width:50%' class='forumheader3'>BFBC2 Rank</td>
</tr><tr>
<td colspan='2'>

<script type=\"text/javascript\">
function bfbcup(){bfbc.direction = \"up\";}
function bfbcdown(){bfbc.direction = \"down\";}
function bfbcstop(){bfbc.stop();}
function bfbcstart(){bfbc.start();}
</script>

<marquee height='".$pref['bfbc_height']."px' id='bfbc' scrollamount='".$pref['bfbc_speed']."' onMouseover='this.scrollAmount=".$pref['bfbc_mouseoverspeed']."' onMouseout='this.scrollAmount=".$pref['bfbc_mouseoutspeed']."' direction='up' loop='true'><table style='width:100%'>";



        $sql ->db_Select("user_extended", "*", "WHERE user_bfbc2!='' ORDER BY user_extended_id ASC","");
        while($row = $sql->db_Fetch()){
        $sql2 = new db;
        $sql2 ->db_Select("user", "*", "WHERE user_id='".intval($row['user_extended_id'])."'");
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

if($data['players']['0']['name'] == ""){}
else
{

$membername = $data['players']['0']['name'];
$rank = $data['players']['0']['rank'];  
$rankname = $data['players']['0']['rank_name']; 
$rankimg = "<img  width='25px' src='".e_PLUGIN."aacgc_bfbcstats/ranks/".$rank.".png'></img>";


$bfbc_text .= "<tr>
<td style='width:50%' class='indent'>".$avatar ." <a href='".e_PLUGIN."aacgc_bfbcstats/Member_Details.php?det.".$userid."'>".$username."</a></td>
<td style='width:50%' class='indent'>".$rankimg." <font size='1'>".$rankname."</font></td>
</tr>";

}}


$bfbc_text .= "</table></marquee></td></tr></table>
<br><br>
<table style='width:100%' class=''><tr><td>
<center>
<input class=\"button\" value=\"Start\" onClick=\"bfbcstart();\" type=\"button\">
<input class=\"button\" value=\"Stop\" onClick=\"bfbcstop();\" type=\"button\">
<input class=\"button\" value=\"Up\" onClick=\"bfbcup();\" type=\"button\">
<input class=\"button\" value=\"Down\" onClick=\"bfbcdown();\" type=\"button\">
</center>
</td></tr></table>
<br>
";


$ns -> tablerender($bfbc_title, $bfbc_text);


?>


