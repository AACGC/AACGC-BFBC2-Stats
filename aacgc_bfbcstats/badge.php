<?php

/*
#######################################
#     AACGC BFBC2 Stats               #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/

//-----------------------------------------------------
if ($row['user_bfbc2type'] == "Windows"){$bftype = "pc";}
if ($row['user_bfbc2type'] == "Xbox360"){$bftype = "360";}
if ($row['user_bfbc2type'] == "PS3"){$bftype = "ps3";}
$userbfbcname = $row['user_bfbc2'];
//-----------------------------------------------------
$url = 'http://api.bfbcs.com/api/'.$bftype.'';
$postdata = 'players='.$userbfbcname.'&fields=all';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
$data = curl_exec($ch);
curl_close($ch);
$data = json_decode($data,true);
//-----------------------------------------------------
$membername = $data['players']['0']['name'];
$rank = $data['players']['0']['rank'];  
$rankname = $data['players']['0']['rank_name']; 
$level = $data['players']['0']['level'];
//------------------------------------------------------

$text .= "<div style='height=400px; background-image:url(".e_PLUGIN."aacgc_bfbcstats/images/badge_bg.jpg); background-position: center top; background-repeat:no-repeat; background-attachment: fixed;'><table style='width:100%'>";

$text .= "
<tr>
<td style='width:20%'>Username:</td>
<td style='width:60%'>".$avatar." ".$username." (".$membername.")</center></td>
</tr><tr>
<td>Rank:</td>
<td>(".$rank.") ".$rankname."</td>
</tr><tr>
<td>Level:</td>
<td>".$level."</td>
</tr>
";

$text .= "</table></div>";

//-----------------------------------------------------

?>
