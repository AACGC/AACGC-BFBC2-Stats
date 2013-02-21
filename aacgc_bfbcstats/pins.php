<?php

/*
#######################################
#     AACGC BFBC2 Stats               #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/


//------------------------------------------------------

if ($pref['bfbc_enable_expandsections'] == "1")
{$width = "100%";}
else
{$width = "100%";}

$text .= "
<table style='width:".$width."'>
<tr>
<td class='forumheader3'><center><b><u>Pins</u></b></center></td>
</tr></table>";

$text .= "<div style='height:".$pref['bfbc_secth_pins']."; overflow:auto' class=''><table style='width:".$width."'>";

//------------------------------------------------------

//--------------------------------#pin0

$pin0img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p01.png'></img>"; 
$pin0 = $data['players']['0']['pins']['0']['name']; 
$pin01 = $data['players']['0']['pins']['0']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin0img."</td>
<td class='forumheader3' style='width:80%'>".$pin0."</td>
<td class='indent' style='width:20%'>".$pin01."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin1

$pin1img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p02.png'></img>"; 
$pin1 = $data['players']['0']['pins']['1']['name']; 
$pin11 = $data['players']['0']['pins']['1']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin1img."</td>
<td class='forumheader3' style='width:50%'>".$pin1."</td>
<td class='indent' style='width:50%'>".$pin11."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin2

$pin2img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p03.png'></img>"; 
$pin2 = $data['players']['0']['pins']['2']['name']; 
$pin21 = $data['players']['0']['pins']['2']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin2img."</td>
<td class='forumheader3' style='width:50%'>".$pin2."</td>
<td class='indent' style='width:50%'>".$pin21."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin3

$pin3img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p04.png'></img>"; 
$pin3 = $data['players']['0']['pins']['3']['name']; 
$pin31 = $data['players']['0']['pins']['3']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin3img."</td>
<td class='forumheader3' style='width:50%'>".$pin3."</td>
<td class='indent' style='width:50%'>".$pin31."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin4

$pin4img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p05.png'></img>"; 
$pin4 = $data['players']['0']['pins']['4']['name']; 
$pin41 = $data['players']['0']['pins']['4']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin4img."</td>
<td class='forumheader3' style='width:50%'>".$pin4."</td>
<td class='indent' style='width:50%'>".$pin41."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin5

$pin5img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p06.png'></img>"; 
$pin5 = $data['players']['0']['pins']['5']['name']; 
$pin51 = $data['players']['0']['pins']['5']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin5img."</td>
<td class='forumheader3' style='width:50%'>".$pin5."</td>
<td class='indent' style='width:50%'>".$pin51."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin6

$pin6img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p07.png'></img>"; 
$pin6 = $data['players']['0']['pins']['6']['name']; 
$pin61 = $data['players']['0']['pins']['6']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin6img."</td>
<td class='forumheader3' style='width:50%'>".$pin6."</td>
<td class='indent' style='width:50%'>".$pin61."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin7

$pin7img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p08.png'></img>"; 
$pin7 = $data['players']['0']['pins']['7']['name']; 
$pin71 = $data['players']['0']['pins']['7']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin7img."</td>
<td class='forumheader3' style='width:50%'>".$pin7."</td>
<td class='indent' style='width:50%'>".$pin71."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin8

$pin8img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p09.png'></img>"; 
$pin8 = $data['players']['0']['pins']['8']['name']; 
$pin81 = $data['players']['0']['pins']['8']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin8img."</td>
<td class='forumheader3' style='width:50%'>".$pin8."</td>
<td class='indent' style='width:50%'>".$pin81."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin9

$pin9img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p10.png'></img>"; 
$pin9 = $data['players']['0']['pins']['9']['name']; 
$pin91 = $data['players']['0']['pins']['9']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin9img."</td>
<td class='forumheader3' style='width:50%'>".$pin9."</td>
<td class='indent' style='width:50%'>".$pin91."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin10

$pin10img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p11.png'></img>"; 
$pin10 = $data['players']['0']['pins']['10']['name']; 
$pin101 = $data['players']['0']['pins']['10']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin10img."</td>
<td class='forumheader3' style='width:50%'>".$pin10."</td>
<td class='indent' style='width:50%'>".$pin101."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin11

$pin11img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p12.png'></img>"; 
$pin11 = $data['players']['0']['pins']['11']['name']; 
$pin111 = $data['players']['0']['pins']['11']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin11img."</td>
<td class='forumheader3' style='width:50%'>".$pin11."</td>
<td class='indent' style='width:50%'>".$pin111."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin12

$pin12img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p13.png'></img>"; 
$pin12 = $data['players']['0']['pins']['12']['name']; 
$pin121 = $data['players']['0']['pins']['12']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin12img."</td>
<td class='forumheader3' style='width:50%'>".$pin12."</td>
<td class='indent' style='width:50%'>".$pin121."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin13

$pin13img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p14.png'></img>"; 
$pin13 = $data['players']['0']['pins']['13']['name']; 
$pin131 = $data['players']['0']['pins']['13']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin13img."</td>
<td class='forumheader3' style='width:50%'>".$pin13."</td>
<td class='indent' style='width:50%'>".$pin131."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin14

$pin14img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p15.png'></img>"; 
$pin14 = $data['players']['0']['pins']['14']['name']; 
$pin141 = $data['players']['0']['pins']['14']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin14img."</td>
<td class='forumheader3' style='width:50%'>".$pin14."</td>
<td class='indent' style='width:50%'>".$pin141."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin15

$pin15img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p16.png'></img>"; 
$pin15 = $data['players']['0']['pins']['15']['name']; 
$pin151 = $data['players']['0']['pins']['15']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin15img."</td>
<td class='forumheader3' style='width:50%'>".$pin15."</td>
<td class='indent' style='width:50%'>".$pin151."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin16

$pin16img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p17.png'></img>"; 
$pin16 = $data['players']['0']['pins']['16']['name']; 
$pin161 = $data['players']['0']['pins']['16']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin16img."</td>
<td class='forumheader3' style='width:50%'>".$pin16."</td>
<td class='indent' style='width:50%'>".$pin161."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin17

$pin17img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p18.png'></img>"; 
$pin17 = $data['players']['0']['pins']['17']['name']; 
$pin171 = $data['players']['0']['pins']['17']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin17img."</td>
<td class='forumheader3' style='width:50%'>".$pin17."</td>
<td class='indent' style='width:50%'>".$pin171."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin18

$pin18img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p19.png'></img>"; 
$pin18 = $data['players']['0']['pins']['18']['name']; 
$pin181 = $data['players']['0']['pins']['18']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin18img."</td>
<td class='forumheader3' style='width:50%'>".$pin18."</td>
<td class='indent' style='width:50%'>".$pin181."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin19

$pin19img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p20.png'></img>"; 
$pin19 = $data['players']['0']['pins']['19']['name']; 
$pin191 = $data['players']['0']['pins']['19']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin19img."</td>
<td class='forumheader3' style='width:50%'>".$pin19."</td>
<td class='indent' style='width:50%'>".$pin191."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin20

$pin20img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p21.png'></img>"; 
$pin20 = $data['players']['0']['pins']['20']['name']; 
$pin201 = $data['players']['0']['pins']['20']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin20img."</td>
<td class='forumheader3' style='width:50%'>".$pin20."</td>
<td class='indent' style='width:50%'>".$pin201."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin21

$pin21img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p22.png'></img>"; 
$pin21 = $data['players']['0']['pins']['21']['name']; 
$pin211 = $data['players']['0']['pins']['21']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin21img."</td>
<td class='forumheader3' style='width:50%'>".$pin21."</td>
<td class='indent' style='width:50%'>".$pin211."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin22

$pin22img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p23.png'></img>"; 
$pin22 = $data['players']['0']['pins']['22']['name']; 
$pin221 = $data['players']['0']['pins']['22']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin22img."</td>
<td class='forumheader3' style='width:50%'>".$pin22."</td>
<td class='indent' style='width:50%'>".$pin221."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin23

$pin23img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p24.png'></img>"; 
$pin23 = $data['players']['0']['pins']['23']['name']; 
$pin231 = $data['players']['0']['pins']['23']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin23img."</td>
<td class='forumheader3' style='width:50%'>".$pin23."</td>
<td class='indent' style='width:50%'>".$pin231."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin4

$pin24img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p25.png'></img>"; 
$pin24 = $data['players']['0']['pins']['24']['name']; 
$pin241 = $data['players']['0']['pins']['24']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin24img."</td>
<td class='forumheader3' style='width:50%'>".$pin24."</td>
<td class='indent' style='width:50%'>".$pin241."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin25

$pin25img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p26.png'></img>"; 
$pin25 = $data['players']['0']['pins']['25']['name']; 
$pin251 = $data['players']['0']['pins']['25']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin25img."</td>
<td class='forumheader3' style='width:50%'>".$pin25."</td>
<td class='indent' style='width:50%'>".$pin251."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin26

$pin26img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p27.png'></img>"; 
$pin26 = $data['players']['0']['pins']['26']['name']; 
$pin261 = $data['players']['0']['pins']['26']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin26img."</td>
<td class='forumheader3' style='width:50%'>".$pin26."</td>
<td class='indent' style='width:50%'>".$pin261."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin27

$pin27img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p28.png'></img>"; 
$pin27 = $data['players']['0']['pins']['27']['name']; 
$pin271 = $data['players']['0']['pins']['27']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin27img."</td>
<td class='forumheader3' style='width:50%'>".$pin27."</td>
<td class='indent' style='width:50%'>".$pin271."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin28

$pin28img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p29.png'></img>"; 
$pin28 = $data['players']['0']['pins']['28']['name']; 
$pin281 = $data['players']['0']['pins']['28']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin28img."</td>
<td class='forumheader3' style='width:50%'>".$pin28."</td>
<td class='indent' style='width:50%'>".$pin281."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin29

$pin29img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p30.png'></img>"; 
$pin29 = $data['players']['0']['pins']['29']['name']; 
$pin291 = $data['players']['0']['pins']['29']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin29img."</td>
<td class='forumheader3' style='width:50%'>".$pin29."</td>
<td class='indent' style='width:50%'>".$pin291."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin30

$pin30img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p31.png'></img>"; 
$pin30 = $data['players']['0']['pins']['30']['name']; 
$pin301 = $data['players']['0']['pins']['30']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin30img."</td>
<td class='forumheader3' style='width:50%'>".$pin30."</td>
<td class='indent' style='width:50%'>".$pin301."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin31

$pin31img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p32.png'></img>"; 
$pin31 = $data['players']['0']['pins']['31']['name']; 
$pin311 = $data['players']['0']['pins']['31']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin31img."</td>
<td class='forumheader3' style='width:50%'>".$pin31."</td>
<td class='indent' style='width:50%'>".$pin311."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin32

$pin32img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p33.png'></img>"; 
$pin32 = $data['players']['0']['pins']['32']['name']; 
$pin321 = $data['players']['0']['pins']['32']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin32img."</td>
<td class='forumheader3' style='width:50%'>".$pin32."</td>
<td class='indent' style='width:50%'>".$pin321."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin33

$pin33img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p34.png'></img>"; 
$pin33 = $data['players']['0']['pins']['33']['name']; 
$pin331 = $data['players']['0']['pins']['33']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin33img."</td>
<td class='forumheader3' style='width:50%'>".$pin33."</td>
<td class='indent' style='width:50%'>".$pin331."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin34

$pin34img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p35.png'></img>"; 
$pin34 = $data['players']['0']['pins']['34']['name']; 
$pin341 = $data['players']['0']['pins']['34']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin34img."</td>
<td class='forumheader3' style='width:50%'>".$pin34."</td>
<td class='indent' style='width:50%'>".$pin341."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin35

$pin35img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p36.png'></img>"; 
$pin35 = $data['players']['0']['pins']['35']['name']; 
$pin351 = $data['players']['0']['pins']['35']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin35img."</td>
<td class='forumheader3' style='width:50%'>".$pin35."</td>
<td class='indent' style='width:50%'>".$pin351."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin36

$pin36img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p37.png'></img>"; 
$pin36 = $data['players']['0']['pins']['36']['name']; 
$pin361 = $data['players']['0']['pins']['36']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin36img."</td>
<td class='forumheader3' style='width:50%'>".$pin36."</td>
<td class='indent' style='width:50%'>".$pin361."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin37

$pin37img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p38.png'></img>"; 
$pin37 = $data['players']['0']['pins']['37']['name']; 
$pin371 = $data['players']['0']['pins']['37']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin37img."</td>
<td class='forumheader3' style='width:50%'>".$pin37."</td>
<td class='indent' style='width:50%'>".$pin371."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin38

$pin38img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p39.png'></img>"; 
$pin38 = $data['players']['0']['pins']['38']['name']; 
$pin381 = $data['players']['0']['pins']['38']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin38img."</td>
<td class='forumheader3' style='width:50%'>".$pin38."</td>
<td class='indent' style='width:50%'>".$pin381."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#pin39

$pin39img = "<img src='".e_PLUGIN."aacgc_bfbcstats/pins/p40.png'></img>"; 
$pin39 = $data['players']['0']['pins']['39']['name']; 
$pin391 = $data['players']['0']['pins']['39']['count']; 

$text .= "<tr>
<td class='forumheader3' style='width:0%'>".$pin39img."</td>
<td class='forumheader3' style='width:50%'>".$pin39."</td>
<td class='indent' style='width:50%'>".$pin391."</td>
</tr>";

//------------------------------------------------------
$text .= "</table></div>";

?>
