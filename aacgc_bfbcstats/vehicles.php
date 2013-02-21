<?php

/*
#######################################
#     AACGC BFBC2 Stats               #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/


//------------------------------------------------------

$text .= "
<table style='width:100%'>
<tr>
<td class='forumheader3' colspan='6'><center><b><u>Vehicle Stats</b></u></center></td>
</tr><tr>
<td style='width:30%'><u>Vehicle</u></td>
<td style='width:10%'><u>Kills</u></td>
<td style='width:10%'><u>Road Kills</u></td>
<td style='width:10%'><u>Distance</u></td>
<td style='width:10%'><u>Time</u></td>
<td style='width:20%'><u>Stars</u></td>
</tr></table>";

$text .= "<div style='height:".$pref['bfbc_secth_vehicles']."; overflow:auto' class=''><table style='width:100%'>";

//------------------------------------------------------

//--------------------------------#hvm

$hvm = $data['players']['0']['vehicles']['hmv']['name']; 
$hvm1 = $data['players']['0']['vehicles']['hmv']['kills']; 
$hvm2 = $data['players']['0']['vehicles']['hmv']['roadkills']; 
$hvm3 = round($data['players']['0']['vehicles']['hmv']['distance'], 0); 
$sechvm4 = $data['players']['0']['vehicles']['hmv']['seconds']; 
$hvm6 = $data['players']['0']['vehicles']['hmv']['stars']['bron']; 
$hvm7 = $data['players']['0']['vehicles']['hmv']['stars']['silv']; 
$hvm8 = $data['players']['0']['vehicles']['hmv']['stars']['gold']; 
$hvm9 = $data['players']['0']['vehicles']['hmv']['stars']['plat']; 

$hours = intval(intval($sechvm4) / 3600);
$minutes = bcmod((intval($sechvm4) / 60),60);
$seconds = bcmod(intval($sechvm4),60);
$hvm4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3' style='width:30%'>".$hvm."</td>
<td class='indent' style='width:10%'>".$hvm1."</td>
<td class='indent' style='width:10%'>".$hvm2."</td>
<td class='indent' style='width:10%'>".$hvm3."</td>
<td class='indent' style='width:10%'>".$hvm4."</td>
<td class='indent' style='width:20%'>B:".$hvm6." S:".$hvm7." G:".$hvm8." P:".$hvm9."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#vodn

$vodn = $data['players']['0']['vehicles']['vodn']['name']; 
$vodn1 = $data['players']['0']['vehicles']['vodn']['kills']; 
$vodn2 = $data['players']['0']['vehicles']['vodn']['roadkills']; 
$vodn3 = round($data['players']['0']['vehicles']['vodn']['distance'], 0); 
$secvodn4 = $data['players']['0']['vehicles']['vodn']['seconds']; 
$vodn6 = $data['players']['0']['vehicles']['vodn']['stars']['bron']; 
$vodn7 = $data['players']['0']['vehicles']['vodn']['stars']['silv']; 
$vodn8 = $data['players']['0']['vehicles']['vodn']['stars']['gold']; 
$vodn9 = $data['players']['0']['vehicles']['vodn']['stars']['plat']; 

$hours = intval(intval($secvodn4) / 3600);
$minutes = bcmod((intval($secvodn4) / 60),60);
$seconds = bcmod(intval($secvodn4),60);
$vodn4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$vodn."</td>
<td class='indent'>".$vodn1."</td>
<td class='indent'>".$vodn2."</td>
<td class='indent'>".$vodn3."</td>
<td class='indent'>".$vodn4."</td>
<td class='indent'>B:".$vodn6." S:".$vodn7." G:".$vodn8." P:".$vodn9."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#cobr

$cobr = $data['players']['0']['vehicles']['cobr']['name']; 
$cobr1 = $data['players']['0']['vehicles']['cobr']['kills']; 
$cobr2 = $data['players']['0']['vehicles']['cobr']['roadkills']; 
$cobr3 = round($data['players']['0']['vehicles']['cobr']['distance'], 0);
$seccobr4 = $data['players']['0']['vehicles']['cobr']['seconds']; 
$cobr6 = $data['players']['0']['vehicles']['cobr']['stars']['bron']; 
$cobr7 = $data['players']['0']['vehicles']['cobr']['stars']['silv']; 
$cobr8 = $data['players']['0']['vehicles']['cobr']['stars']['gold']; 
$cobr9 = $data['players']['0']['vehicles']['cobr']['stars']['plat']; 

$hours = intval(intval($seccobr4) / 3600);
$minutes = bcmod((intval($seccobr4) / 60),60);
$seconds = bcmod(intval($seccobr4),60);
$cobr4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$cobr."</td>
<td class='indent'>".$cobr1."</td>
<td class='indent'>".$cobr2."</td>
<td class='indent'>".$cobr3."</td>
<td class='indent'>".$cobr4."</td>
<td class='indent'>B:".$cobr6." S:".$cobr7." G:".$cobr8." P:".$cobr9."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#quad

$quad = $data['players']['0']['vehicles']['quad']['name']; 
$quad1 = $data['players']['0']['vehicles']['quad']['kills']; 
$quad2 = $data['players']['0']['vehicles']['quad']['roadkills']; 
$quad3 = round($data['players']['0']['vehicles']['quad']['distance'], 0); 
$secquad4 = $data['players']['0']['vehicles']['quad']['seconds']; 
$quad6 = $data['players']['0']['vehicles']['quad']['stars']['bron']; 
$quad7 = $data['players']['0']['vehicles']['quad']['stars']['silv']; 
$quad8 = $data['players']['0']['vehicles']['quad']['stars']['gold']; 
$quad9 = $data['players']['0']['vehicles']['quad']['stars']['plat'];

$hours = intval(intval($secquad4) / 3600);
$minutes = bcmod((intval($secquad4) / 60),60);
$seconds = bcmod(intval($secquad4),60);
$quad4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$quad."</td>
<td class='indent'>".$quad1."</td>
<td class='indent'>".$quad2."</td>
<td class='indent'>".$quad3."</td>
<td class='indent'>".$quad4."</td>
<td class='indent'>B:".$quad6." S:".$quad7." G:".$quad8." P:".$quad9."</td>
</tr>";

//----------------------------------------------------
//--------------------------------#m1a2

$m1a2 = $data['players']['0']['vehicles']['m1a2']['name']; 
$m1a21 = $data['players']['0']['vehicles']['m1a2']['kills']; 
$m1a22 = $data['players']['0']['vehicles']['m1a2']['roadkills']; 
$m1a23 = round($data['players']['0']['vehicles']['m1a2']['distance'], 0); 
$secm1a24 = $data['players']['0']['vehicles']['m1a2']['seconds']; 
$m1a26 = $data['players']['0']['vehicles']['m1a2']['stars']['bron']; 
$m1a27 = $data['players']['0']['vehicles']['m1a2']['stars']['silv']; 
$m1a28 = $data['players']['0']['vehicles']['m1a2']['stars']['gold']; 
$m1a29 = $data['players']['0']['vehicles']['m1a2']['stars']['plat'];

$hours = intval(intval($secm1a24) / 3600);
$minutes = bcmod((intval($secm1a24) / 60),60);
$seconds = bcmod(intval($secm1a24),60);
$m1a24 = "".$hours."h ".$minutes."m ".$seconds."s"; 

$text .= "<tr>
<td class='forumheader3'>".$m1a2."</td>
<td class='indent'>".$m1a21."</td>
<td class='indent'>".$m1a22."</td>
<td class='indent'>".$m1a23."</td>
<td class='indent'>".$m1a24."</td>
<td class='indent'>B:".$m1a26." S:".$m1a27." G:".$m1a28." P:".$m1a29."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#t90

$t90 = $data['players']['0']['vehicles']['t90']['name']; 
$t901 = $data['players']['0']['vehicles']['t90']['kills']; 
$t902 = $data['players']['0']['vehicles']['t90']['roadkills']; 
$t903 = round($data['players']['0']['vehicles']['t90']['distance'], 0); 
$sect904 = $data['players']['0']['vehicles']['t90']['seconds']; 
$t906 = $data['players']['0']['vehicles']['t90']['stars']['bron']; 
$t907 = $data['players']['0']['vehicles']['t90']['stars']['silv']; 
$t908 = $data['players']['0']['vehicles']['t90']['stars']['gold']; 
$t909 = $data['players']['0']['vehicles']['t90']['stars']['plat']; 

$hours = intval(intval($sect904) / 3600);
$minutes = bcmod((intval($sect904) / 60),60);
$seconds = bcmod(intval($sect904),60);
$t904 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$t90."</td>
<td class='indent'>".$t901."</td>
<td class='indent'>".$t902."</td>
<td class='indent'>".$t903."</td>
<td class='indent'>".$t904."</td>
<td class='indent'>B:".$t906." S:".$t907." G:".$t908." P:".$t909."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#m3a3

$m3a3 = $data['players']['0']['vehicles']['m3a3']['name']; 
$m3a31 = $data['players']['0']['vehicles']['m3a3']['kills']; 
$m3a32 = $data['players']['0']['vehicles']['m3a3']['roadkills']; 
$m3a33 = round($data['players']['0']['vehicles']['m3a3']['distance'], 0); 
$secm3a34 = $data['players']['0']['vehicles']['m3a3']['seconds']; 
$m3a36 = $data['players']['0']['vehicles']['m3a3']['stars']['bron']; 
$m3a37 = $data['players']['0']['vehicles']['m3a3']['stars']['silv']; 
$m3a38 = $data['players']['0']['vehicles']['m3a3']['stars']['gold']; 
$m3a39 = $data['players']['0']['vehicles']['m3a3']['stars']['plat']; 

$hours = intval(intval($secm3a34) / 3600);
$minutes = bcmod((intval($secm3a34) / 60),60);
$seconds = bcmod(intval($secm3a34),60);
$m3a34 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$m3a3."</td>
<td class='indent'>".$m3a31."</td>
<td class='indent'>".$m3a32."</td>
<td class='indent'>".$m3a33."</td>
<td class='indent'>".$m3a34."</td>
<td class='indent'>B:".$m3a36." S:".$m3a37." G:".$m3a38." P:".$m3a39."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#bmd3

$bmd3 = $data['players']['0']['vehicles']['bmd3']['name']; 
$bmd31 = $data['players']['0']['vehicles']['bmd3']['kills']; 
$bmd32 = $data['players']['0']['vehicles']['bmd3']['roadkills']; 
$bmd33 = round($data['players']['0']['vehicles']['bmd3']['distance'], 0); 
$secbmd34 = $data['players']['0']['vehicles']['bmd3']['seconds']; 
$bmd36 = $data['players']['0']['vehicles']['bmd3']['stars']['bron']; 
$bmd37 = $data['players']['0']['vehicles']['bmd3']['stars']['silv']; 
$bmd38 = $data['players']['0']['vehicles']['bmd3']['stars']['gold']; 
$bmd39 = $data['players']['0']['vehicles']['bmd3']['stars']['plat']; 

$hours = intval(intval($secbmd34) / 3600);
$minutes = bcmod((intval($secbmd34) / 60),60);
$seconds = bcmod(intval($secbmd34),60);
$bmd34 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$bmd3."</td>
<td class='indent'>".$bmd31."</td>
<td class='indent'>".$bmd32."</td>
<td class='indent'>".$bmd33."</td>
<td class='indent'>".$bmd34."</td>
<td class='indent'>B:".$bmd36." S:".$bmd37." G:".$bmd38." P:".$bmd39."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#bmda

$bmda = $data['players']['0']['vehicles']['bmda']['name']; 
$bmda1 = $data['players']['0']['vehicles']['bmda']['kills']; 
$bmda2 = $data['players']['0']['vehicles']['bmda']['roadkills']; 
$bmda3 = round($data['players']['0']['vehicles']['bmda']['distance'], 0); 
$secbmda4 = $data['players']['0']['vehicles']['bmda']['seconds']; 
$bmda6 = $data['players']['0']['vehicles']['bmda']['stars']['bron']; 
$bmda7 = $data['players']['0']['vehicles']['bmda']['stars']['silv']; 
$bmda8 = $data['players']['0']['vehicles']['bmda']['stars']['gold']; 
$bmda9 = $data['players']['0']['vehicles']['bmda']['stars']['plat'];

$hours = intval(intval($secbmda4) / 3600);
$minutes = bcmod((intval($secbmda4) / 60),60);
$seconds = bcmod(intval($secbmda4),60);
$bmda4 = "".$hours."h ".$minutes."m ".$seconds."s"; 

$text .= "<tr>
<td class='forumheader3'>".$bmda."</td>
<td class='indent'>".$bmda1."</td>
<td class='indent'>".$bmda2."</td>
<td class='indent'>".$bmda3."</td>
<td class='indent'>".$bmda4."</td>
<td class='indent'>B:".$bmda6." S:".$bmda7." G:".$bmda8." P:".$bmda9."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#jets

$jets = $data['players']['0']['vehicles']['jets']['name']; 
$jets1 = $data['players']['0']['vehicles']['jets']['kills']; 
$jets2 = $data['players']['0']['vehicles']['jets']['roadkills']; 
$jets3 = round($data['players']['0']['vehicles']['jets']['distance'], 0); 
$secjets4 = $data['players']['0']['vehicles']['jets']['seconds']; 
$jets6 = $data['players']['0']['vehicles']['jets']['stars']['bron']; 
$jets7 = $data['players']['0']['vehicles']['jets']['stars']['silv']; 
$jets8 = $data['players']['0']['vehicles']['jets']['stars']['gold']; 
$jets9 = $data['players']['0']['vehicles']['jets']['stars']['plat']; 

$hours = intval(intval($secjets4) / 3600);
$minutes = bcmod((intval($secjets4) / 60),60);
$seconds = bcmod(intval($secjets4),60);
$jets4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$jets."</td>
<td class='indent'>".$jets1."</td>
<td class='indent'>".$jets2."</td>
<td class='indent'>".$jets3."</td>
<td class='indent'>".$jets4."</td>
<td class='indent'>B:".$jets6." S:".$jets7." G:".$jets8." P:".$jets9."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#PBLB

$PBLB = $data['players']['0']['vehicles']['PBLB']['name']; 
$PBLB1 = $data['players']['0']['vehicles']['PBLB']['kills']; 
$PBLB2 = $data['players']['0']['vehicles']['PBLB']['roadkills']; 
$PBLB3 = round($data['players']['0']['vehicles']['PBLB']['distance'], 0); 
$secPBLB4 = $data['players']['0']['vehicles']['PBLB']['seconds']; 
$PBLB6 = $data['players']['0']['vehicles']['PBLB']['stars']['bron']; 
$PBLB7 = $data['players']['0']['vehicles']['PBLB']['stars']['silv']; 
$PBLB8 = $data['players']['0']['vehicles']['PBLB']['stars']['gold']; 
$PBLB9 = $data['players']['0']['vehicles']['PBLB']['stars']['plat']; 

$hours = intval(intval($secPBLB4) / 3600);
$minutes = bcmod((intval($secPBLB4) / 60),60);
$seconds = bcmod(intval($secPBLB4),60);
$PBLB4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$PBLB."</td>
<td class='indent'>".$PBLB1."</td>
<td class='indent'>".$PBLB2."</td>
<td class='indent'>".$PBLB3."</td>
<td class='indent'>".$PBLB4."</td>
<td class='indent'>B:".$PBLB6." S:".$PBLB7." G:".$PBLB8." P:".$PBLB9."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#ah60

$ah60 = $data['players']['0']['vehicles']['ah60']['name']; 
$ah601 = $data['players']['0']['vehicles']['ah60']['kills']; 
$ah602 = $data['players']['0']['vehicles']['ah60']['roadkills']; 
$ah603 = round($data['players']['0']['vehicles']['ah60']['distance'], 0); 
$secah604 = $data['players']['0']['vehicles']['ah60']['seconds']; 
$ah606 = $data['players']['0']['vehicles']['ah60']['stars']['bron']; 
$ah607 = $data['players']['0']['vehicles']['ah60']['stars']['silv']; 
$ah608 = $data['players']['0']['vehicles']['ah60']['stars']['gold']; 
$ah609 = $data['players']['0']['vehicles']['ah60']['stars']['plat']; 

$hours = intval(intval($secah604) / 3600);
$minutes = bcmod((intval($secah604) / 60),60);
$seconds = bcmod(intval($secah604),60);
$ah604 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$ah60."</td>
<td class='indent'>".$ah601."</td>
<td class='indent'>".$ah602."</td>
<td class='indent'>".$ah603."</td>
<td class='indent'>".$ah604."</td>
<td class='indent'>B:".$ah606." S:".$ah607." G:".$ah608." P:".$ah609."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#ah64

$ah64 = $data['players']['0']['vehicles']['ah64']['name']; 
$ah641 = $data['players']['0']['vehicles']['ah64']['kills']; 
$ah642 = $data['players']['0']['vehicles']['ah64']['roadkills']; 
$ah643 = round($data['players']['0']['vehicles']['ah64']['distance'], 0); 
$secah644 = $data['players']['0']['vehicles']['ah64']['seconds']; 
$ah646 = $data['players']['0']['vehicles']['ah64']['stars']['bron']; 
$ah647 = $data['players']['0']['vehicles']['ah64']['stars']['silv']; 
$ah648 = $data['players']['0']['vehicles']['ah64']['stars']['gold']; 
$ah649 = $data['players']['0']['vehicles']['ah64']['stars']['plat']; 

$hours = intval(intval($secah644) / 3600);
$minutes = bcmod((intval($secah644) / 60),60);
$seconds = bcmod(intval($secah644),60);
$ah644 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$ah64."</td>
<td class='indent'>".$ah641."</td>
<td class='indent'>".$ah642."</td>
<td class='indent'>".$ah643."</td>
<td class='indent'>".$ah644."</td>
<td class='indent'>B:".$ah646." S:".$ah647." G:".$ah648." P:".$ah649."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#MI28

$MI28 = $data['players']['0']['vehicles']['MI28']['name']; 
$MI281 = $data['players']['0']['vehicles']['MI28']['kills']; 
$MI282 = $data['players']['0']['vehicles']['MI28']['roadkills']; 
$MI283 = round($data['players']['0']['vehicles']['MI28']['distance'], 0); 
$secMI284 = $data['players']['0']['vehicles']['MI28']['seconds']; 
$MI286 = $data['players']['0']['vehicles']['MI28']['stars']['bron']; 
$MI287 = $data['players']['0']['vehicles']['MI28']['stars']['silv']; 
$MI288 = $data['players']['0']['vehicles']['MI28']['stars']['gold']; 
$MI289 = $data['players']['0']['vehicles']['MI28']['stars']['plat']; 

$hours = intval(intval($secMI284) / 3600);
$minutes = bcmod((intval($secMI284) / 60),60);
$seconds = bcmod(intval($secMI284),60);
$MI284 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$MI28."</td>
<td class='indent'>".$MI281."</td>
<td class='indent'>".$MI282."</td>
<td class='indent'>".$MI283."</td>
<td class='indent'>".$MI284."</td>
<td class='indent'>B:".$MI286." S:".$MI287." G:".$MI288." P:".$MI289."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#havoc

$havoc = $data['players']['0']['vehicles']['havoc']['name']; 
$havoc1 = $data['players']['0']['vehicles']['havoc']['kills']; 
$havoc2 = $data['players']['0']['vehicles']['havoc']['roadkills']; 
$havoc3 = round($data['players']['0']['vehicles']['havoc']['distance'], 0); 
$sechavoc4 = $data['players']['0']['vehicles']['havoc']['seconds']; 
$havoc6 = $data['players']['0']['vehicles']['havoc']['stars']['bron']; 
$havoc7 = $data['players']['0']['vehicles']['havoc']['stars']['silv']; 
$havoc8 = $data['players']['0']['vehicles']['havoc']['stars']['gold']; 
$havoc9 = $data['players']['0']['vehicles']['havoc']['stars']['plat']; 

$hours = intval(intval($sechavoc4) / 3600);
$minutes = bcmod((intval($sechavoc4) / 60),60);
$seconds = bcmod(intval($sechavoc4),60);
$havoc4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$havoc."</td>
<td class='indent'>".$havoc1."</td>
<td class='indent'>".$havoc2."</td>
<td class='indent'>".$havoc3."</td>
<td class='indent'>".$havoc4."</td>
<td class='indent'>B:".$havoc6." S:".$havoc7." G:".$havoc8." P:".$havoc9."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#uav

$uav = $data['players']['0']['vehicles']['uav']['name']; 
$uav1 = $data['players']['0']['vehicles']['uav']['kills']; 
$uav2 = $data['players']['0']['vehicles']['uav']['roadkills']; 
$uav3 = round($data['players']['0']['vehicles']['uav']['distance'], 0); 
$secuav4 = $data['players']['0']['vehicles']['uav']['seconds']; 
$uav6 = $data['players']['0']['vehicles']['uav']['stars']['bron']; 
$uav7 = $data['players']['0']['vehicles']['uav']['stars']['silv']; 
$uav8 = $data['players']['0']['vehicles']['uav']['stars']['gold']; 
$uav9 = $data['players']['0']['vehicles']['uav']['stars']['plat'];

$hours = intval(intval($secuav4) / 3600);
$minutes = bcmod((intval($secuav4) / 60),60);
$seconds = bcmod(intval($secuav4),60);
$uav4 = "".$hours."h ".$minutes."m ".$seconds."s"; 

$text .= "<tr>
<td class='forumheader3'>".$uav."</td>
<td class='indent'>".$uav1."</td>
<td class='indent'>".$uav2."</td>
<td class='indent'>".$uav3."</td>
<td class='indent'>".$uav4."</td>
<td class='indent'>B:".$uav6." S:".$uav7." G:".$uav8." P:".$uav9."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#XM312

$XM312 = $data['players']['0']['vehicles']['XM312']['name']; 
$XM3121 = $data['players']['0']['vehicles']['XM312']['kills']; 
$XM3122 = $data['players']['0']['vehicles']['XM312']['roadkills']; 
$XM3123 = round($data['players']['0']['vehicles']['XM312']['distance'], 0);
$secXM3124 = $data['players']['0']['vehicles']['XM312']['seconds']; 
$XM3126 = $data['players']['0']['vehicles']['XM312']['stars']['bron']; 
$XM3127 = $data['players']['0']['vehicles']['XM312']['stars']['silv']; 
$XM3128 = $data['players']['0']['vehicles']['XM312']['stars']['gold']; 
$XM3129 = $data['players']['0']['vehicles']['XM312']['stars']['plat']; 

$hours = intval(intval($secXM3124) / 3600);
$minutes = bcmod((intval($secXM3124) / 60),60);
$seconds = bcmod(intval($secXM3124),60);
$XM3124 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$XM312."</td>
<td class='indent'>".$XM3121."</td>
<td class='indent'><i>N/A</i></td>
<td class='indent'><i>N/A</i></td>
<td class='indent'>".$XM3124."</td>
<td class='indent'>B:".$XM3126." S:".$XM3127." G:".$XM3128." P:".$XM3129."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#KORD

$KORD = $data['players']['0']['vehicles']['KORD']['name']; 
$KORD1 = $data['players']['0']['vehicles']['KORD']['kills']; 
$KORD2 = $data['players']['0']['vehicles']['KORD']['roadkills']; 
$KORD3 = round($data['players']['0']['vehicles']['KORD']['distance'], 0); 
$secKORD4 = $data['players']['0']['vehicles']['KORD']['seconds']; 
$KORD6 = $data['players']['0']['vehicles']['KORD']['stars']['bron']; 
$KORD7 = $data['players']['0']['vehicles']['KORD']['stars']['silv']; 
$KORD8 = $data['players']['0']['vehicles']['KORD']['stars']['gold']; 
$KORD9 = $data['players']['0']['vehicles']['KORD']['stars']['plat']; 

$hours = intval(intval($secKORD4) / 3600);
$minutes = bcmod((intval($secKORD4) / 60),60);
$seconds = bcmod(intval($secKORD4),60);
$KORD4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$KORD."</td>
<td class='indent'>".$KORD1."</td>
<td class='indent'><i>N/A</i></td>
<td class='indent'><i>N/A</i></td>
<td class='indent'>".$KORD4."</td>
<td class='indent'>B:".$KORD6." S:".$KORD7." G:".$KORD8." P:".$KORD9."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#KORN

$KORN = $data['players']['0']['vehicles']['KORN']['name']; 
$KORN1 = $data['players']['0']['vehicles']['KORN']['kills']; 
$KORN2 = $data['players']['0']['vehicles']['KORN']['roadkills']; 
$KORN3 = round($data['players']['0']['vehicles']['KORN']['distance'], 0); 
$secKORN4 = $data['players']['0']['vehicles']['KORN']['seconds']; 
$KORN6 = $data['players']['0']['vehicles']['KORN']['stars']['bron']; 
$KORN7 = $data['players']['0']['vehicles']['KORN']['stars']['silv']; 
$KORN8 = $data['players']['0']['vehicles']['KORN']['stars']['gold']; 
$KORN9 = $data['players']['0']['vehicles']['KORN']['stars']['plat']; 

$hours = intval(intval($secKORN4) / 3600);
$minutes = bcmod((intval($secKORN4) / 60),60);
$seconds = bcmod(intval($secKORN4),60);
$KORN4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$KORN."</td>
<td class='indent'>".$KORN1."</td>
<td class='indent'><i>N/A</i></td>
<td class='indent'><i>N/A</i></td>
<td class='indent'>".$KORN4."</td>
<td class='indent'>B:".$KORN6." S:".$KORN7." G:".$KORN8." P:".$KORN9."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#TOW2

$TOW2 = $data['players']['0']['vehicles']['TOW2']['name']; 
$TOW21 = $data['players']['0']['vehicles']['TOW2']['kills']; 
$TOW22 = $data['players']['0']['vehicles']['TOW2']['roadkills']; 
$TOW23 = round($data['players']['0']['vehicles']['TOW2']['distance'], 0); 
$secTOW24 = $data['players']['0']['vehicles']['TOW2']['seconds']; 
$TOW26 = $data['players']['0']['vehicles']['TOW2']['stars']['bron']; 
$TOW27 = $data['players']['0']['vehicles']['TOW2']['stars']['silv']; 
$TOW28 = $data['players']['0']['vehicles']['TOW2']['stars']['gold']; 
$TOW29 = $data['players']['0']['vehicles']['TOW2']['stars']['plat']; 

$hours = intval(intval($secTOW24) / 3600);
$minutes = bcmod((intval($secTOW24) / 60),60);
$seconds = bcmod(intval($secTOW24),60);
$TOW24 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$TOW2."</td>
<td class='indent'>".$TOW21."</td>
<td class='indent'><i>N/A</i></td>
<td class='indent'><i>N/A</i></td>
<td class='indent'>".$TOW24."</td>
<td class='indent'>B:".$TOW26." S:".$TOW27." G:".$TOW28." P:".$TOW29."</td>
</tr>";

//------------------------------------------------------
//--------------------------------#aav

$aav = $data['players']['0']['vehicles']['aav']['name']; 
$aav1 = $data['players']['0']['vehicles']['aav']['kills']; 
$aav2 = $data['players']['0']['vehicles']['aav']['roadkills']; 
$aav3 = round($data['players']['0']['vehicles']['aav']['distance'], 0);
$secaav4 = $data['players']['0']['vehicles']['aav']['seconds']; 
$aav6 = $data['players']['0']['vehicles']['aav']['stars']['bron']; 
$aav7 = $data['players']['0']['vehicles']['aav']['stars']['silv']; 
$aav8 = $data['players']['0']['vehicles']['aav']['stars']['gold']; 
$aav9 = $data['players']['0']['vehicles']['aav']['stars']['plat']; 

$hours = intval(intval($secaav4) / 3600);
$minutes = bcmod((intval($secaav4) / 60),60);
$seconds = bcmod(intval($secaav4),60);
$aav4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$aav."</td>
<td class='indent'>".$aav1."</td>
<td class='indent'><i>N/A</i></td>
<td class='indent'><i>N/A</i></td>
<td class='indent'>".$aav4."</td>
<td class='indent'>B:".$aav6." S:".$aav7." G:".$aav8." P:".$aav9."</td>
</tr>";

//------------------------------------------------------
$text .= "</table></div>";

?>
