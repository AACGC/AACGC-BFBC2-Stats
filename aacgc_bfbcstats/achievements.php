<?php

/*
#######################################
#     AACGC BFBC2 Stats               #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/

if ($pref['bfbc_enable_expandsections'] == "1")
{$width = "100%";}
else
{$width = "100%";}

//------------------------------------------------------

$text .= "
<table style='width:".$width."'>
<tr>
<td class='forumheader3' colspan='4'><center><b><u>Achievements</u></b></center></td>
</tr><tr>
<td style='width:50%; text-align:left' colspan='2'> <u>Achievement</u></td>
<td style='width:10%'><u>Recieved</u></td>
<td style='width:40%'><u>Goal</u></td>
</tr></table>";

$text .= "<div style='height:".$pref['bfbc_secth_achs']."; overflow:auto' class=''><table style='width:".$width."'>";

//------------------------------------------------------

//--------------------------------#ach0

$path = $data['players']['0']['achievements']['0'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta01.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish Operation Aurora"; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$img."</td>
<td class='forumheader3' style='width:50%'>".$name."</td>
<td class='indent' style='width:10%'>".$rec."</td>
<td class='indent' style='width:40%'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach1

$path = $data['players']['0']['achievements']['1'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta02.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish Cold War"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach2

$path = $data['players']['0']['achievements']['2'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta03.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish Heart of Darkness"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach3

$path = $data['players']['0']['achievements']['3'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta04.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish Upriver"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach4

$path = $data['players']['0']['achievements']['4'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta05.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish Crack the Sky"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach5

$path = $data['players']['0']['achievements']['5'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta06.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish Snowblind"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach6

$path = $data['players']['0']['achievements']['6'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta07.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish Heavy Metal"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------


//--------------------------------#ach7

$path = $data['players']['0']['achievements']['7'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta08.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish High Value Target"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach8

$path = $data['players']['0']['achievements']['8'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta09.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish Sangre del Toro"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach9

$path = $data['players']['0']['achievements']['9'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta10.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish No One Gets Left Behind"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach10

$path = $data['players']['0']['achievements']['10'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta11.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish Zero Dark Thirty"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach11

$path = $data['players']['0']['achievements']['11'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta12.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish Force Multiplier"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach12

$path = $data['players']['0']['achievements']['12'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta13.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish Airborne"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach13

$path = $data['players']['0']['achievements']['13'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta14.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: finish Airborne on Hard"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach14

$path = $data['players']['0']['achievements']['14'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta15.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: find 5 collectable weapons."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach15

$path = $data['players']['0']['achievements']['15'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta16.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: find all 15 collectable weapons."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach16

$path = $data['players']['0']['achievements']['16'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta17.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: destroy 1 satellite uplink."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach17

$path = $data['players']['0']['achievements']['17'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta18.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: destroy 15 satellite uplinks."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach18

$path = $data['players']['0']['achievements']['18'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta19.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: destroy all satellite uplinks."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach19

$path = $data['players']['0']['achievements']['19'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta20.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: 10 melee kills"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach20

$path = $data['players']['0']['achievements']['20'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta21.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: drive all vehicle types (land, sea, air)"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach21

$path = $data['players']['0']['achievements']['21'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta22.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: destroy 100 objects."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach22

$path = $data['players']['0']['achievements']['22'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta23.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: destroy 1000 objects."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach23

$path = $data['players']['0']['achievements']['23'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta24.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: demolish 1 house."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach24

$path = $data['players']['0']['achievements']['24'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta25.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: demolish 50 houses."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach25

$path = $data['players']['0']['achievements']['25'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta26.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: 50 kills with assault rifles"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach26

$path = $data['players']['0']['achievements']['26'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta27.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: 50 kills with submachine guns"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach27

$path = $data['players']['0']['achievements']['27'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta28.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: 50 kills with light machine guns"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach28

$path = $data['players']['0']['achievements']['28'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta29.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: 50 kills with sniper rifles"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach29

$path = $data['players']['0']['achievements']['29'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta30.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Campaign: 50 kills with shotguns"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach30

$path = $data['players']['0']['achievements']['30'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta31.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach31

$path = $data['players']['0']['achievements']['31'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta32.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach32

$path = $data['players']['0']['achievements']['32'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta33.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach33

$path = $data['players']['0']['achievements']['33'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta34.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach34

$path = $data['players']['0']['achievements']['34'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta35.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach35

$path = $data['players']['0']['achievements']['35'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta36.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach36

$path = $data['players']['0']['achievements']['36'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta37.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Online: obtain all unlocks in any kit for all Vehicle unlocks"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach37

$path = $data['players']['0']['achievements']['37'];
$label = $path['criteria1']['label'];
$value = round($path['criteria1']['value'], 0);
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta38.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach38

$path = $data['players']['0']['achievements']['38'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta39.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Online: in a round, get one kill with the knife, M60 and RPG-7"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach39

$path = $data['players']['0']['achievements']['39'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];
$label2 = $path['criteria2']['label'];
$value2 = $path['criteria2']['value'];
$target2 = $path['criteria2']['target'];
$label3 = $path['criteria3']['label'];
$value3 = $path['criteria3']['value'];
$target3 = $path['criteria3']['target'];
$label4 = $path['criteria4']['label'];
$value4 = $path['criteria4']['value'];
$target4 = $path['criteria4']['target'];
$label5 = $path['criteria5']['label'];
$value5 = $path['criteria5']['value'];
$target5 = $path['criteria5']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta40.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "".$label." - ".$value."/".$target."<br>".$label2." - ".$value2."/".$target2."<br>".$label3." - ".$value3."/".$target3."<br>".$label4." - ".$value4."/".$target4."<br>".$label5." - ".$value5."/".$target5."<br>"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach40

$path = $data['players']['0']['achievements']['40'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta41.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Online: roadkill an enemy with any helicopter"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach41

$path = $data['players']['0']['achievements']['41'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta42.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach42

$path = $data['players']['0']['achievements']['42'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta43.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach43

$path = $data['players']['0']['achievements']['43'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta44.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Destroy an enemy helicopter with a stationary RPG."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#ach44

$path = $data['players']['0']['achievements']['44'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta45.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Online: do a headshot kill wit the repair tool"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#ach45

$path = $data['players']['0']['achievements']['45'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta46.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Online: win a round in all online game modes"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#ach46

$path = $data['players']['0']['achievements']['46'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta47.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "Online: obtain the Gold Squad Pin 5 times"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#ach47

$path = $data['players']['0']['achievements']['47'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];
$label2 = $path['criteria2']['label'];
$value2 = $path['criteria2']['value'];
$target2 = $path['criteria2']['target'];
$label3 = $path['criteria3']['label'];
$value3 = $path['criteria3']['value'];
$target3 = $path['criteria3']['target'];
$label4 = $path['criteria4']['label'];
$value4 = $path['criteria4']['value'];
$target4 = $path['criteria4']['target'];
$label5 = $path['criteria5']['label'];
$value5 = $path['criteria5']['value'];
$target5 = $path['criteria5']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta48.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "".$label." - ".$value."/".$target."<br>".$label2." - ".$value2."/".$target2."<br>".$label3." - ".$value3."/".$target3."<br>".$label4." - ".$value4."/".$target4."<br>".$label5." - ".$value5."/".$target5."<br>"; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach48

$path = $data['players']['0']['achievements']['48'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta49.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#ach49

$path = $data['players']['0']['achievements']['49'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/achievements/ta50.png'></img>"; 
$name  = $path['name']; 
if ($path['unlocked'] == "0")
{$rec = "No";}else{$rec  = "Yes";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

$text .= "</table></div>";

?>
