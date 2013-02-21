if ($pref['bfbc_enable_forum'] == "1"){

global $post_info, $sql;

$postowner  = $post_info['user_id'];



$sql->db_Select("user_extended", "*", "user_extended_id='".intval($postowner)."'");
while($row = $sql->db_Fetch()){

if ($row['user_bfbc2'] == ""){}
else
{

if ($row['user_bfbc2type'] == "Windows"){$bftype = "Windows";}
if ($row['user_bfbc2type'] == "Xbox360"){$bftype = "Xbox360";}
if ($row['user_bfbc2type'] == "PS3"){$bftype = "PS3";}
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
else {

$membername = $data['players']['0']['name'];
$rank = $data['players']['0']['rank'];  
$rankname = $data['players']['0']['rank_name']; 
$rankimg = "<center><img  width='50px' src='".e_PLUGIN."aacgc_bfbcstats/ranks/".$rank.".png'></img></center>";

//------------------------------------------------------



$bfbcforumms .= "<div style='height:58px; width:210px; background-image: url(".e_PLUGIN."aacgc_bfbcstats/images/forum_badge.jpg); border:0px; background-repeat: no-repeat;'>
<table style='width:100%'>
<tr>
<td class='' style='width:0%' rowspan='3'>".$rankimg."</td>
<td style='width:100%'></td>
</tr><tr>
<td class=''>".$rankname."</td>
<td></td>
</tr><tr>
<td class=''><a href='".e_PLUGIN."aacgc_bfbcstats/Member_Details.php?det.".$userid."'><img src='".e_PLUGIN."aacgc_bfbcstats/images/statslink.jpg'></img></a> ".$platform."</td>
<td></td>
</tr>
</table></div>";}

}}

return "".$bfbcforumms."";

}