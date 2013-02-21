if ($pref['bfbc_enable_profile'] == "1"){

global $sql,$sql2,$user; 

$suser = "";
$USER_ID = "";


$url = $_SERVER["REQUEST_URI"];
$suser = explode(".", $url);
	if ($suser[1] == 'php?id') {
	$suser = $suser[2];}

$SUSER_ID = $suser;

if (USER){

$sql->db_Select("user_extended", "*", "user_extended_id='".intval($SUSER_ID)."'");
$row = $sql->db_Fetch();

if ($row['user_bfbc2'] == ""){}
else
{
if ($row['user_bfbc2type'] == "Windows"){$bftype = "pc";}
if ($row['user_bfbc2type'] == "Xbox360"){$bftype = "360";}
if ($row['user_bfbc2type'] == "PS3"){$bftype = "ps3";}
$userid = $row['user_extended_id'];
$userbfbcname = $row['user_bfbc2'];

if ($pref['bfbc_enable_platform'] == "1"){
if ($row['user_bfbc2type'] == "Windows"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/windows.png'></img> PC";}
if ($row['user_bfbc2type'] == "Xbox360"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/Xbox360.png'></img> Xbox360";}
if ($row['user_bfbc2type'] == "PS3"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_bfbcstats/images/PS3.png'></img> PS3";}}

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
$score = $data['players']['0']['score'];
$level = $data['players']['0']['level'];
$kills = $data['players']['0']['kills']; 
$deaths = $data['players']['0']['deaths'];
$rankimg = "<center><img  width='50px' src='".e_PLUGIN."aacgc_bfbcstats/ranks/".$rank.".png'></img></center>";

//------------------------------------------------------

$bfbcuser .= "
<tr><td class='forumheader3' colspan='2'><div style='height:150px; width:400px; background-color:#000000; background-image: url(".e_PLUGIN."aacgc_bfbcstats/images/badge_bg.jpg); border:0px; background-repeat: no-repeat;'>
<table style='width:100%'>
<tr>
<td class='' style='width:0%' rowspan='5'>".$rankimg."</td>
<td class='indent' style='width:70%' colspan='2'>".$membername."</td>
<td style='width:30%'></td>
</tr>";

if ($pref['bfbc_enable_platform'] == "1"){
$bfbcuser .= "<tr>
<td class='indent' colspan='2'>Platform: ".$platform."</td>
<td></td>
</tr>";}

$bfbcuser .= "<tr>
<td class='indent' colspan='2'>Rank: ".$rankname."</td>
<td></td>
</tr><tr>
<td class='indent'>Score: ".$score."</td>
<td class='indent'>Level: ".$level."</td>
<td></td>
</tr><tr>
<td class='indent' colspan='2'><a href='".e_PLUGIN."aacgc_bfbcstats/Member_Details.php?det.".$userid."'><img src='".e_PLUGIN."aacgc_bfbcstats/images/statslink.jpg'></img></a></td>
<td></td>
</tr>
</table></div></td></tr>";


return "".$bfbcuser."";}}}

}


