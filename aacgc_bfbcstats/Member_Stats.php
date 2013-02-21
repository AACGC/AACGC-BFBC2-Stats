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

if ($pref['bfbc_enable_gold'] == "1"){$gold_obj = new gold();}

//---------------------------------------------------------------

$title .= "Battlefield Bad Company 2 Member Stats"; 

//---------------------------------------------------------------


//--------------# Multipage Script #---------------------------
if ($pref['bfbc_rendperpage'] != '') 
{$rowsPerPage = $pref['bfbc_rendperpage'];} 
else 
{$rowsPerPage = "";}
if(isset($_GET['rowspp']))
{$rowsPerPage = intval($_GET['rowspp']);}
$pageNum = 1;
if(isset($_GET['page']))
{$pageNum = intval($_GET['page']);}
$offset = ($pageNum - 1) * $rowsPerPage;
$query = @mysql_query("SELECT user_bfbc2 FROM ".MPREFIX."user_extended WHERE user_bfbc2!='' ");
$numrows = mysql_num_rows($query);
if(isset($_POST['page'])) 
{$rowsPerPage = intval($_POST['page']);}
$maxPage = ceil($numrows/$rowsPerPage);
$self = $_SERVER['PHP_SELF'];
$nav  = '';
for($page = 1; $page <= $maxPage; $page++) {
if ($page == $pageNum) 
{$nav .= " $page ";} 
else 
{$nav .= " <a href=\"$self?page=".$page."&rowspp=".$rowsPerPage."\">$page</a> ";}}
if ($pageNum > 1) 
{$page  = $pageNum - 1;
$prev  = " <a href=\"$self?page=$page&rowspp=$rowsPerPage\">Previous</a> ";} 
else 
{$prev  = "";}
if ($pageNum < $maxPage) 
{$page = $pageNum + 1;
$next = " <a href=\"$self?page=$page&rowspp=$rowsPerPage\">Next Page</a> ";} 
else 
{$next = "";}
if ($pref['bfbc_rendperpage'] == "") 
{$limit = "";} 
else 
{$limit = "LIMIT ".$offset.", ".$rowsPerPage."";}
//---------------------------------------------------------------


$text .= "<center><img src='".e_PLUGIN."aacgc_bfbcstats/images/bfbc2banner.jpg'></img></center><br><br>
<table style='width:100%' class=''>
<tr>
<td style='' class='forumheader3'>User</td>";

if ($pref['bfbc_enable_platform'] == "1"){
$text .= "<td style='' class='forumheader3'>Platform</td>";}

$text .= "
<td style='' class='forumheader3'>Rank</td>
<td style='text-align:center' class='forumheader3'>Score</td>
<td style='text-align:center' class='forumheader3'>Level</td>
<td style='' class='forumheader3'></td>
</tr>
";


$sql ->db_Select("user_extended", "*", "WHERE user_bfbc2!='' ORDER BY user_extended_id ASC $limit","");
while($row = $sql->db_Fetch()){

$userid = $row['user_extended_id'];
$userbfbcname = $row['user_bfbc2'];

if ($row['user_bfbc2type'] == ""){$bftype = "pc";}
if ($row['user_bfbc2type'] == "Windows"){$bftype = "pc";}
if ($row['user_bfbc2type'] == "Xbox360"){$bftype = "360";}
if ($row['user_bfbc2type'] == "PS3"){$bftype = "ps3";}

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
else {

//-------------------------------------------------------

$sql2 ->db_Select("user", "*", "user_id='".intval($row['user_extended_id'])."'");
$row2 = $sql2->db_Fetch();

if ($pref['bfbc_enable_gold'] == "1")
{$username = "".$gold_obj->show_orb($row2['user_id'])."";}
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

if ($pref['bfbc_enable_platform'] == "1"){
if ($row['user_bfbc2type'] == ""){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/windows.png'></img> PC";}
if ($row['user_bfbc2type'] == "Windows"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/windows.png'></img> PC";}
if ($row['user_bfbc2type'] == "Xbox360"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/Xbox360.png'></img> Xbox360";}
if ($row['user_bfbc2type'] == "PS3"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/PS3.png'></img> PS3";}}

if ($pref['bfbc_enable_username'] == "1"){
$membername = "(".$data['players']['0']['name'].")";}

$rank = $data['players']['0']['rank'];  
$rankname = $data['players']['0']['rank_name']; 
$score = number_format($data['players']['0']['score']);
$level = $data['players']['0']['level'];
$kills = $data['players']['0']['kills']; 
$deaths = $data['players']['0']['deaths'];
$rankimg = "<img  width='25px' src='".e_PLUGIN."aacgc_bfbcstats/ranks/".$rank.".png' align=left></img>";
$statslink = "<a href='".e_PLUGIN."aacgc_bfbcstats/Member_Details.php?det.".$userid."'><img src='".e_PLUGIN."aacgc_bfbcstats/images/statslink.jpg'></img></a>";

$text .= "<tr>
<td class='indent'>".$avatar." <a href='".e_BASE."user.php?id.".$userid."'>".$username."</a> ".$membername."</td>";

if ($pref['bfbc_enable_platform'] == "1"){
$text .= "<td class='indent'>".$platform."</td>";}

$text .= "<td class='indent'>".$rankimg." ".$rankname."</td>
<td class='indent' style='text-align:right'>".$score."</td>
<td class='indent' style='text-align:right'>".$level."</td>
<td class='indent'><center>".$statslink."</center></td>
</tr>";}}

$text .= "</table>";



//--#AACGC Plugin Copyright&reg; - DO NOT REMOVE BELOW THIS LINE
require(e_PLUGIN . 'aacgc_bfbcstats/plugin.php');
$copyright .= "<br><br><br><br><br><br><br>
<a href='http://www.aacgc.com' target='_blank'><font size='1'>".$eplug_name." V".$eplug_version."  &reg;</a>  ---  ( <a href='http://bfbcs.com/api' target='_blank'>Powered by bfbcs.com</a> )</font>";
//---------------------------------------------------------------

$ns -> tablerender($title, $text."<br><br>".$prev.$nav.$next.$copyright);




//----------------------------------------------------------------------------------

require_once(FOOTERF);
