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
<td class='forumheader3' colspan='4'><center><b><u>Insiginias</u></b></center></td>
</tr><tr>
<td style='width:55%; text-align:left' colspan='2'> <u>Insiginia</u></td>
<td style='width:0%'><u>Recieved</u></td>
<td style='width:45%'><u>Goal</u></td>
</tr></table>";

$text .= "<div style='height:".$pref['bfbc_secth_insig']."; overflow:auto' class=''><table style='width:".$width."'>";

//------------------------------------------------------

//--------------------------------#insig0

$insig0img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i01.png'></img>"; 
$insig0 = $data['players']['0']['insiginias']['0']['name']; 

if ($data['players']['0']['insiginias']['0']['count'] == "1")
{$insig01 = "Yes";}
else 
{$insig01 = "No";}
$label0 = $data['players']['0']['insiginias']['0']['criteria1']['label'];
$value0 = $data['players']['0']['insiginias']['0']['criteria1']['value'];
$target0 = $data['players']['0']['insiginias']['0']['criteria1']['target'];
$insig0goal =  "".$label0." - ".$value0."/".$target0.""; 


$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$insig0img."</td>
<td class='forumheader3' style='width:50%'>".$insig0."</td>
<td class='indent' style='width:10%'>".$insig01."</td>
<td class='indent' style='width:40%'>".$insig0goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig1

$insig1img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i02.png'></img>"; 
$insig1 = $data['players']['0']['insiginias']['1']['name']; 

if ($data['players']['0']['insiginias']['1']['count'] == "1")
{$insig11 = "Yes";}
else 
{$insig11 = "No";}
$label1 = $data['players']['0']['insiginias']['1']['criteria1']['label'];
$value1 = $data['players']['0']['insiginias']['1']['criteria1']['value'];
$target1 = $data['players']['0']['insiginias']['1']['criteria1']['target'];
$insig1goal =  "".$label1." - ".$value1."/".$target1.""; 


$text .= "<tr>
<td class='forumheader3' style='width:'>".$insig1img."</td>
<td class='forumheader3' style='width:'>".$insig1."</td>
<td class='indent' style='width:'>".$insig11."</td>
<td class='indent' style='width:'>".$insig1goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig2

$insig2img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i03.png'></img>"; 
$insig2 = $data['players']['0']['insiginias']['2']['name']; 

if ($data['players']['0']['insiginias']['2']['count'] == "1")
{$insig21 = "Yes";}
else 
{$insig21 = "No";}
$label2 = $data['players']['0']['insiginias']['2']['criteria1']['label'];
$value2 = $data['players']['0']['insiginias']['2']['criteria1']['value'];
$target2 = $data['players']['0']['insiginias']['2']['criteria1']['target'];
$insig2goal =  "".$label2." - ".$value2."/".$target2.""; 


$text .= "<tr>
<td class='forumheader3' style='width:'>".$insig2img."</td>
<td class='forumheader3' style='width:'>".$insig2."</td>
<td class='indent' style='width:'>".$insig21."</td>
<td class='indent' style='width:'>".$insig2goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig3

$insig3img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i04.png'></img>"; 
$insig3 = $data['players']['0']['insiginias']['3']['name']; 

if ($data['players']['0']['insiginias']['3']['count'] == "1")
{$insig31 = "Yes";}
else 
{$insig31 = "No";}
$label3 = $data['players']['0']['insiginias']['3']['criteria1']['label'];
$value3 = $data['players']['0']['insiginias']['3']['criteria1']['value'];
$target3 = $data['players']['0']['insiginias']['3']['criteria1']['target'];
$insig3goal =  "".$label3." - ".$value3."/".$target3.""; 


$text .= "<tr>
<td class='forumheader3' style='width:'>".$insig3img."</td>
<td class='forumheader3' style='width:'>".$insig3."</td>
<td class='indent' style='width:'>".$insig31."</td>
<td class='indent' style='width:'>".$insig3goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig4

$insig4img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i05.png'></img>"; 
$insig4 = $data['players']['0']['insiginias']['4']['name']; 

if ($data['players']['0']['insiginias']['4']['count'] == "1")
{$insig41 = "Yes";}
else 
{$insig41 = "No";}
$label4 = $data['players']['0']['insiginias']['4']['criteria1']['label'];
$value4 = $data['players']['0']['insiginias']['4']['criteria1']['value'];
$target4 = $data['players']['0']['insiginias']['4']['criteria1']['target'];
$insig4goal =  "".$label4." - ".$value4."/".$target4.""; 


$text .= "<tr>
<td class='forumheader3' style='width:'>".$insig4img."</td>
<td class='forumheader3' style='width:'>".$insig4."</td>
<td class='indent' style='width:'>".$insig41."</td>
<td class='indent' style='width:'>".$insig4goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig5

$insig5img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i06.png'></img>"; 
$insig5 = $data['players']['0']['insiginias']['5']['name']; 

if ($data['players']['0']['insiginias']['5']['count'] == "1")
{$insig51 = "Yes";}
else 
{$insig51 = "No";}
$label5 = $data['players']['0']['insiginias']['5']['criteria1']['label'];
$value5 = $data['players']['0']['insiginias']['5']['criteria1']['value'];
$target5 = $data['players']['0']['insiginias']['5']['criteria1']['target'];
$insig5goal =  "".$label5." - ".$value5."/".$target5.""; 


$text .= "<tr>
<td class='forumheader3' style='width:'>".$insig5img."</td>
<td class='forumheader3' style='width:'>".$insig5."</td>
<td class='indent' style='width:'>".$insig51."</td>
<td class='indent' style='width:'>".$insig5goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig6

$path = $data['players']['0']['insiginias']['6'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i07.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig7

$path = $data['players']['0']['insiginias']['7'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i08.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig8

$path = $data['players']['0']['insiginias']['8'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i09.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig9

$path = $data['players']['0']['insiginias']['9'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i10.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig10

$path = $data['players']['0']['insiginias']['10'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i11.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig11

$path = $data['players']['0']['insiginias']['11'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i12.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig12

$path = $data['players']['0']['insiginias']['12'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i13.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig13

$path = $data['players']['0']['insiginias']['13'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i14.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig14

$path = $data['players']['0']['insiginias']['14'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i15.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig15

$path = $data['players']['0']['insiginias']['15'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i16.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig16

$path = $data['players']['0']['insiginias']['16'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i17.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig17

$path = $data['players']['0']['insiginias']['17'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i18.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig18

$path = $data['players']['0']['insiginias']['18'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i19.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig19

$path = $data['players']['0']['insiginias']['19'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i20.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig20

$path = $data['players']['0']['insiginias']['20'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i21.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "50 Combat Efficiency Pins."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig21

$path = $data['players']['0']['insiginias']['21'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i22.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "50 Combat Excellence Pins."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig22

$path = $data['players']['0']['insiginias']['22'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i23.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig23

$path = $data['players']['0']['insiginias']['23'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i24.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig24

$path = $data['players']['0']['insiginias']['24'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i25.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig25

$path = $data['players']['0']['insiginias']['25'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i26.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig26

$path = $data['players']['0']['insiginias']['26'];
$label = $path['time']['label'];
$value = round($path['time']['value'], 0);
$target = $path['time']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i27.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig27

$path = $data['players']['0']['insiginias']['27'];
$label = $path['time']['label'];
$value = round($path['time']['value'], 0);
$target = $path['time']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i28.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig28

$path = $data['players']['0']['insiginias']['28'];
$label = $path['time']['label'];
$value = round($path['time']['value'], 0);
$target = $path['time']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i29.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig29

$path = $data['players']['0']['insiginias']['29'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i30.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig30

$path = $data['players']['0']['insiginias']['30'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i31.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig31

$path = $data['players']['0']['insiginias']['31'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i32.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "Get all weapon pins."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig32

$path = $data['players']['0']['insiginias']['32'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i33.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "Get all combat pins."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig33

$path = $data['players']['0']['insiginias']['33'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i34.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "Get all vehicle pins."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig34

$path = $data['players']['0']['insiginias']['34'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i35.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "Get all pins."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig35

$path = $data['players']['0']['insiginias']['35'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i36.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "Get all weapon bronze stars."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig36

$path = $data['players']['0']['insiginias']['36'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i37.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "Get all vehicle bronze stars."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig37

$path = $data['players']['0']['insiginias']['37'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i38.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig38

$path = $data['players']['0']['insiginias']['38'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i39.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "Get all bronze stars."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#insig39

$path = $data['players']['0']['insiginias']['39'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i40.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "Get 10 silver stars."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#insig40

$path = $data['players']['0']['insiginias']['40'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i41.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "Get 5 gold stars."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#insig41

$path = $data['players']['0']['insiginias']['41'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i42.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "Get 2 platinum stars."; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#insig42

$path = $data['players']['0']['insiginias']['42'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i43.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#insig43

$path = $data['players']['0']['insiginias']['43'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i44.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#insig44

$path = $data['players']['0']['insiginias']['44'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i45.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig45

$path = $data['players']['0']['insiginias']['45'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];
$label2 = $path['criteria2']['label'];
$value2 = $path['criteria2']['value'];
$target2 = $path['criteria2']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i46.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target."<br>".$label2." - ".$value2."/".$target2.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig46

$path = $data['players']['0']['insiginias']['46'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i47.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig47

$path = $data['players']['0']['insiginias']['47'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i48.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig48

$path = $data['players']['0']['insiginias']['48'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];
$label2 = $path['criteria2']['label'];
$value2 = $path['criteria2']['value'];
$target2 = $path['criteria2']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i49.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target."<br>".$label2." - ".$value2."/".$target2.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#insig49

$path = $data['players']['0']['insiginias']['49'];
$label = $path['criteria1']['label'];
$value = $path['criteria1']['value'];
$target = $path['criteria1']['target'];
$label2 = $path['criteria2']['label'];
$value2 = $path['criteria2']['value'];
$target2 = $path['criteria2']['target'];

$img = "<img src='".e_PLUGIN."aacgc_bfbcstats/insiginias/i50.png'></img>"; 
$name  = $path['name']; 
if ($path['count'] == "1")
{$rec = "Yes";}else{$rec  = "No";}
$goal =  "".$label." - ".$value."/".$target."<br>".$label2." - ".$value2."/".$target2.""; 

$text .= "<tr>
<td class='forumheader3' style='width:'>".$img."</td>
<td class='forumheader3' style='width:'>".$name."</td>
<td class='indent' style='width:'>".$rec."</td>
<td class='indent' style='width:'>".$goal."</td>
</tr>";

//------------------------------------------------------

$text .= "</table></div>";

?>
