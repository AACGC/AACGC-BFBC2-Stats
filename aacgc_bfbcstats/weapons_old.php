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
<td class='forumheader3' colspan='7'><center>
<b><u>Weapon Stats</u></b>
</center></td>
</tr><tr>
<td style='width:25%'><u>Weapon</u></td>
<td style='width:10%'><u>Kills</u></td>
<td style='width:10%'><u>Shots Fired</u></td>
<td style='width:10%'><u>Shots Hit</u></td>
<td style='width:15%'><u>Time</u></td>
<td style='width:10%'><u>Headshots</u></td>
<td style='width:20%'><u>Stars</u></td>
</tr></table>";



$text .= "<div style='height:".$pref['bfbc_secth_weapons']."; overflow:auto' class=''><table style='width:100%'>";



//--------------------------------#AEK

$aek = $data['players']['0']['weapons']['aek']['name']; 
$aek1 = $data['players']['0']['weapons']['aek']['kills']; 
$aek2 = $data['players']['0']['weapons']['aek']['shots_fired']; 
$aek3 = $data['players']['0']['weapons']['aek']['shots_hit']; 
$secondsaek = $data['players']['0']['weapons']['aek']['seconds']; 
$aek5 = $data['players']['0']['weapons']['aek']['headshots']; 
$aek6 = $data['players']['0']['weapons']['aek']['stars']['bron']; 
$aek7 = $data['players']['0']['weapons']['aek']['stars']['silv']; 
$aek8 = $data['players']['0']['weapons']['aek']['stars']['gold']; 
$aek9 = $data['players']['0']['weapons']['aek']['stars']['plat']; 

$hours = intval(intval($secondsaek) / 3600);
$minutes = bcmod((intval($secondsaek) / 60),60);
$seconds = bcmod(intval($secondsaek),60);

$aek4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3' style='width:25%'>".$aek."</td>
<td class='indent' style='width:10%'>".$aek1."</td>
<td class='indent' style='width:10%'>".$aek2."</td>
<td class='indent' style='width:10%'>".$aek3."</td>
<td class='indent' style='width:15%'>".$aek4."</td>
<td class='indent' style='width:10%'>".$aek5."</td>
<td class='indent' style='width:20%'>B:".$aek6." S:".$aek7." G:".$aek8." P:".$aek9."</td>
</tr>";

//----------------------------------#xm8

$xm8 = $data['players']['0']['weapons']['xm8']['name']; 
$xm81 = $data['players']['0']['weapons']['xm8']['kills']; 
$xm82 = $data['players']['0']['weapons']['xm8']['shots_fired']; 
$xm83 = $data['players']['0']['weapons']['xm8']['shots_hit']; 
$secondsxm84 = $data['players']['0']['weapons']['xm8']['seconds']; 
$xm85 = $data['players']['0']['weapons']['xm8']['headshots']; 
$xm86 = $data['players']['0']['weapons']['xm8']['stars']['bron']; 
$xm87 = $data['players']['0']['weapons']['xm8']['stars']['silv']; 
$xm88 = $data['players']['0']['weapons']['xm8']['stars']['gold']; 
$xm89 = $data['players']['0']['weapons']['xm8']['stars']['plat']; 

$hours = intval(intval($secondsxm84) / 3600);
$minutes = bcmod((intval($secondsxm84) / 60),60);
$seconds = bcmod(intval($secondsxm84),60);
$xm84 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$xm8."</td>
<td class='indent'>".$xm81."</td>
<td class='indent'>".$xm82."</td>
<td class='indent'>".$xm83."</td>
<td class='indent'>".$xm84."</td>
<td class='indent'>".$xm85."</td>
<td class='indent'>B:".$xm86." S:".$xm87." G:".$xm88." P:".$xm89."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#f2000

$f2000 = $data['players']['0']['weapons']['f2000']['name']; 
$f20001 = $data['players']['0']['weapons']['f2000']['kills']; 
$f20002 = $data['players']['0']['weapons']['f2000']['shots_fired']; 
$f20003 = $data['players']['0']['weapons']['f2000']['shots_hit']; 
$secondsf20004 = $data['players']['0']['weapons']['f2000']['seconds']; 
$f20005 = $data['players']['0']['weapons']['f2000']['headshots']; 
$f20006 = $data['players']['0']['weapons']['f2000']['stars']['bron']; 
$f20007 = $data['players']['0']['weapons']['f2000']['stars']['silv']; 
$f20008 = $data['players']['0']['weapons']['f2000']['stars']['gold']; 
$f20009 = $data['players']['0']['weapons']['f2000']['stars']['plat']; 

$hours = intval(intval($secondsf20004) / 3600);
$minutes = bcmod((intval($secondsf20004) / 60),60);
$seconds = bcmod(intval($secondsf20004),60);
$f20004 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$f2000."</td>
<td class='indent'>".$f20001."</td>
<td class='indent'>".$f20002."</td>
<td class='indent'>".$f20003."</td>
<td class='indent'>".$f20004."</td>
<td class='indent'>".$f20005."</td>
<td class='indent'>B:".$f20006." S:".$f20007." G:".$f20008." P:".$f20009."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#aug

$aug = $data['players']['0']['weapons']['aug']['name']; 
$aug1 = $data['players']['0']['weapons']['aug']['kills']; 
$aug2 = $data['players']['0']['weapons']['aug']['shots_fired']; 
$aug3 = $data['players']['0']['weapons']['aug']['shots_hit']; 
$secondsaug4 = $data['players']['0']['weapons']['aug']['seconds']; 
$aug5 = $data['players']['0']['weapons']['aug']['headshots']; 
$aug6 = $data['players']['0']['weapons']['aug']['stars']['bron']; 
$aug7 = $data['players']['0']['weapons']['aug']['stars']['silv']; 
$aug8 = $data['players']['0']['weapons']['aug']['stars']['gold']; 
$aug9 = $data['players']['0']['weapons']['aug']['stars']['plat']; 

$hours = intval(intval($secondsaug4) / 3600);
$minutes = bcmod((intval($secondsaug4) / 60),60);
$seconds = bcmod(intval($secondsaug4),60);
$aug4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$aug."</td>
<td class='indent'>".$aug1."</td>
<td class='indent'>".$aug2."</td>
<td class='indent'>".$aug3."</td>
<td class='indent'>".$aug4."</td>
<td class='indent'>".$aug5."</td>
<td class='indent'>B:".$aug6." S:".$aug7." G:".$aug8." P:".$aug9."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#an94

$an94 = $data['players']['0']['weapons']['an94']['name']; 
$an941 = $data['players']['0']['weapons']['an94']['kills']; 
$an942 = $data['players']['0']['weapons']['an94']['shots_fired']; 
$an943 = $data['players']['0']['weapons']['an94']['shots_hit']; 
$secondsan944 = $data['players']['0']['weapons']['an94']['seconds']; 
$an945 = $data['players']['0']['weapons']['an94']['headshots']; 
$an946 = $data['players']['0']['weapons']['an94']['stars']['bron']; 
$an947 = $data['players']['0']['weapons']['an94']['stars']['silv']; 
$an948 = $data['players']['0']['weapons']['an94']['stars']['gold']; 
$an949 = $data['players']['0']['weapons']['an94']['stars']['plat']; 

$hours = intval(intval($secondsan944) / 3600);
$minutes = bcmod((intval($secondsan944) / 60),60);
$seconds = bcmod(intval($secondsan944),60);
$an944 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$an94."</td>
<td class='indent'>".$an941."</td>
<td class='indent'>".$an942."</td>
<td class='indent'>".$an943."</td>
<td class='indent'>".$an944."</td>
<td class='indent'>".$an945."</td>
<td class='indent'>B:".$an946." S:".$an947." G:".$an948." P:".$an949."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#m416

$m416 = $data['players']['0']['weapons']['m416']['name']; 
$m4161 = $data['players']['0']['weapons']['m416']['kills']; 
$m4162 = $data['players']['0']['weapons']['m416']['shots_fired']; 
$m4163 = $data['players']['0']['weapons']['m416']['shots_hit']; 
$secm4164 = $data['players']['0']['weapons']['m416']['seconds']; 
$m4165 = $data['players']['0']['weapons']['m416']['headshots']; 
$m4166 = $data['players']['0']['weapons']['m416']['stars']['bron']; 
$m4167 = $data['players']['0']['weapons']['m416']['stars']['silv']; 
$m4168 = $data['players']['0']['weapons']['m416']['stars']['gold']; 
$m4169 = $data['players']['0']['weapons']['m416']['stars']['plat']; 

$hours = intval(intval($secm4164) / 3600);
$minutes = bcmod((intval($secm4164) / 60),60);
$seconds = bcmod(intval($secm4164),60);
$m4164 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$m416."</td>
<td class='indent'>".$m4161."</td>
<td class='indent'>".$m4162."</td>
<td class='indent'>".$m4163."</td>
<td class='indent'>".$m4164."</td>
<td class='indent'>".$m4165."</td>
<td class='indent'>B:".$m4166." S:".$m4167." G:".$m4168." P:".$m4169."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#m16

$m16 = $data['players']['0']['weapons']['m16']['name']; 
$m161 = $data['players']['0']['weapons']['m16']['kills']; 
$m162 = $data['players']['0']['weapons']['m16']['shots_fired']; 
$m163 = $data['players']['0']['weapons']['m16']['shots_hit']; 
$secm164 = $data['players']['0']['weapons']['m16']['seconds']; 
$m165 = $data['players']['0']['weapons']['m16']['headshots']; 
$m166 = $data['players']['0']['weapons']['m16']['stars']['bron']; 
$m167 = $data['players']['0']['weapons']['m16']['stars']['silv']; 
$m168 = $data['players']['0']['weapons']['m16']['stars']['gold']; 
$m169 = $data['players']['0']['weapons']['m16']['stars']['plat']; 

$hours = intval(intval($secm164) / 3600);
$minutes = bcmod((intval($secm164) / 60),60);
$seconds = bcmod(intval($secm164),60);
$m164 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$m16."</td>
<td class='indent'>".$m161."</td>
<td class='indent'>".$m162."</td>
<td class='indent'>".$m163."</td>
<td class='indent'>".$m164."</td>
<td class='indent'>".$m165."</td>
<td class='indent'>B:".$m166." S:".$m167." G:".$m168." P:".$m169."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#9a91

$a9a91 = $data['players']['0']['weapons']['9a91']['name']; 
$a9a911 = $data['players']['0']['weapons']['9a91']['kills']; 
$a9a912 = $data['players']['0']['weapons']['9a91']['shots_fired']; 
$a9a913 = $data['players']['0']['weapons']['9a91']['shots_hit']; 
$seca9a914 = $data['players']['0']['weapons']['9a91']['seconds']; 
$a9a915 = $data['players']['0']['weapons']['9a91']['headshots']; 
$a9a916 = $data['players']['0']['weapons']['9a91']['stars']['bron']; 
$a9a917 = $data['players']['0']['weapons']['9a91']['stars']['silv']; 
$a9a918 = $data['players']['0']['weapons']['9a91']['stars']['gold']; 
$a9a919 = $data['players']['0']['weapons']['9a91']['stars']['plat']; 

$hours = intval(intval($seca9a914) / 3600);
$minutes = bcmod((intval($seca9a914) / 60),60);
$seconds = bcmod(intval($seca9a914),60);
$a9a914 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$a9a91."</td>
<td class='indent'>".$a9a911."</td>
<td class='indent'>".$a9a912."</td>
<td class='indent'>".$a9a913."</td>
<td class='indent'>".$a9a914."</td>
<td class='indent'>".$a9a915."</td>
<td class='indent'>B:".$a9a916." S:".$a9a917." G:".$a9a918." P:".$a9a919."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#scar

$scar = $data['players']['0']['weapons']['scar']['name']; 
$scar1 = $data['players']['0']['weapons']['scar']['kills']; 
$scar2 = $data['players']['0']['weapons']['scar']['shots_fired']; 
$scar3 = $data['players']['0']['weapons']['scar']['shots_hit']; 
$secscar4 = $data['players']['0']['weapons']['scar']['seconds']; 
$scar5 = $data['players']['0']['weapons']['scar']['headshots']; 
$scar6 = $data['players']['0']['weapons']['scar']['stars']['bron']; 
$scar7 = $data['players']['0']['weapons']['scar']['stars']['silv']; 
$scar8 = $data['players']['0']['weapons']['scar']['stars']['gold']; 
$scar9 = $data['players']['0']['weapons']['scar']['stars']['plat']; 

$hours = intval(intval($secscar4) / 3600);
$minutes = bcmod((intval($secscar4) / 60),60);
$seconds = bcmod(intval($secscar4),60);
$scar4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$scar."</td>
<td class='indent'>".$scar1."</td>
<td class='indent'>".$scar2."</td>
<td class='indent'>".$scar3."</td>
<td class='indent'>".$scar4."</td>
<td class='indent'>".$scar5."</td>
<td class='indent'>B:".$scar6." S:".$scar7." G:".$scar8." P:".$scar9."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#xm8c

$xm8c = $data['players']['0']['weapons']['xm8c']['name']; 
$xm8c1 = $data['players']['0']['weapons']['xm8c']['kills']; 
$xm8c2 = $data['players']['0']['weapons']['xm8c']['shots_fired']; 
$xm8c3 = $data['players']['0']['weapons']['xm8c']['shots_hit']; 
$secxm8c4 = $data['players']['0']['weapons']['xm8c']['seconds']; 
$xm8c5 = $data['players']['0']['weapons']['xm8c']['headshots']; 
$xm8c6 = $data['players']['0']['weapons']['xm8c']['stars']['bron']; 
$xm8c7 = $data['players']['0']['weapons']['xm8c']['stars']['silv']; 
$xm8c8 = $data['players']['0']['weapons']['xm8c']['stars']['gold']; 
$xm8c9 = $data['players']['0']['weapons']['xm8c']['stars']['plat']; 

$hours = intval(intval($secxm8c4) / 3600);
$minutes = bcmod((intval($secxm8c4) / 60),60);
$seconds = bcmod(intval($secxm8c4),60);
$xm8c4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$xm8c."</td>
<td class='indent'>".$xm8c1."</td>
<td class='indent'>".$xm8c2."</td>
<td class='indent'>".$xm8c3."</td>
<td class='indent'>".$xm8c4."</td>
<td class='indent'>".$xm8c5."</td>
<td class='indent'>B:".$xm8c6." S:".$xm8c7." G:".$xm8c8." P:".$xm8c9."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#aks74u

$aks74u = $data['players']['0']['weapons']['aks74u']['name']; 
$aks74u1 = $data['players']['0']['weapons']['aks74u']['kills']; 
$aks74u2 = $data['players']['0']['weapons']['aks74u']['shots_fired']; 
$aks74u3 = $data['players']['0']['weapons']['aks74u']['shots_hit']; 
$secaks74u4 = $data['players']['0']['weapons']['aks74u']['seconds']; 
$aks74u5 = $data['players']['0']['weapons']['aks74u']['headshots']; 
$aks74u6 = $data['players']['0']['weapons']['aks74u']['stars']['bron']; 
$aks74u7 = $data['players']['0']['weapons']['aks74u']['stars']['silv']; 
$aks74u8 = $data['players']['0']['weapons']['aks74u']['stars']['gold']; 
$aks74u9 = $data['players']['0']['weapons']['aks74u']['stars']['plat']; 

$hours = intval(intval($secaks74u4) / 3600);
$minutes = bcmod((intval($secaks74u4) / 60),60);
$seconds = bcmod(intval($secaks74u4),60);
$aks74u4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$aks74u."</td>
<td class='indent'>".$aks74u1."</td>
<td class='indent'>".$aks74u2."</td>
<td class='indent'>".$aks74u3."</td>
<td class='indent'>".$aks74u4."</td>
<td class='indent'>".$aks74u5."</td>
<td class='indent'>B:".$aks74u6." S:".$aks74u7." G:".$aks74u8." P:".$aks74u9."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#uzi

$uzi = $data['players']['0']['weapons']['uzi']['name']; 
$uzi1 = $data['players']['0']['weapons']['uzi']['kills']; 
$uzi2 = $data['players']['0']['weapons']['uzi']['shots_fired']; 
$uzi3 = $data['players']['0']['weapons']['uzi']['shots_hit']; 
$secuzi4 = $data['players']['0']['weapons']['uzi']['seconds']; 
$uzi5 = $data['players']['0']['weapons']['uzi']['headshots']; 
$uzi6 = $data['players']['0']['weapons']['uzi']['stars']['bron']; 
$uzi7 = $data['players']['0']['weapons']['uzi']['stars']['silv']; 
$uzi8 = $data['players']['0']['weapons']['uzi']['stars']['gold']; 
$uzi9 = $data['players']['0']['weapons']['uzi']['stars']['plat']; 

$hours = intval(intval($secuzi4) / 3600);
$minutes = bcmod((intval($secuzi4) / 60),60);
$seconds = bcmod(intval($secuzi4),60);
$uzi4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$uzi."</td>
<td class='indent'>".$uzi1."</td>
<td class='indent'>".$uzi2."</td>
<td class='indent'>".$uzi3."</td>
<td class='indent'>".$uzi4."</td>
<td class='indent'>".$uzi5."</td>
<td class='indent'>B:".$uzi6." S:".$uzi7." G:".$uzi8." P:".$uzi9."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#pp2

$pp2 = $data['players']['0']['weapons']['pp2']['name']; 
$pp21 = $data['players']['0']['weapons']['pp2']['kills']; 
$pp22 = $data['players']['0']['weapons']['pp2']['shots_fired']; 
$pp23 = $data['players']['0']['weapons']['pp2']['shots_hit']; 
$secpp24 = $data['players']['0']['weapons']['pp2']['seconds']; 
$pp25 = $data['players']['0']['weapons']['pp2']['headshots']; 
$pp26 = $data['players']['0']['weapons']['pp2']['stars']['bron']; 
$pp27 = $data['players']['0']['weapons']['pp2']['stars']['silv']; 
$pp28 = $data['players']['0']['weapons']['pp2']['stars']['gold']; 
$pp29 = $data['players']['0']['weapons']['pp2']['stars']['plat']; 

$hours = intval(intval($secpp24) / 3600);
$minutes = bcmod((intval($secpp24) / 60),60);
$seconds = bcmod(intval($secpp24),60);
$pp24 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$pp2."</td>
<td class='indent'>".$pp21."</td>
<td class='indent'>".$pp22."</td>
<td class='indent'>".$pp23."</td>
<td class='indent'>".$pp24."</td>
<td class='indent'>".$pp25."</td>
<td class='indent'>B:".$pp26." S:".$pp27." G:".$pp28." P:".$pp29."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#ump

$ump = $data['players']['0']['weapons']['ump']['name']; 
$ump1 = $data['players']['0']['weapons']['ump']['kills']; 
$ump2 = $data['players']['0']['weapons']['ump']['shots_fired']; 
$ump3 = $data['players']['0']['weapons']['ump']['shots_hit']; 
$secump4 = $data['players']['0']['weapons']['ump']['seconds']; 
$ump5 = $data['players']['0']['weapons']['ump']['headshots']; 
$ump6 = $data['players']['0']['weapons']['ump']['stars']['bron']; 
$ump7 = $data['players']['0']['weapons']['ump']['stars']['silv']; 
$ump8 = $data['players']['0']['weapons']['ump']['stars']['gold']; 
$ump9 = $data['players']['0']['weapons']['ump']['stars']['plat']; 

$hours = intval(intval($secump4) / 3600);
$minutes = bcmod((intval($secump4) / 60),60);
$seconds = bcmod(intval($secump4),60);
$ump4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$ump."</td>
<td class='indent'>".$ump1."</td>
<td class='indent'>".$ump2."</td>
<td class='indent'>".$ump3."</td>
<td class='indent'>".$ump4."</td>
<td class='indent'>".$ump5."</td>
<td class='indent'>B:".$ump6." S:".$ump7." G:".$ump8." P:".$ump9."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#pkm

$pkm = $data['players']['0']['weapons']['pkm']['name']; 
$pkm1 = $data['players']['0']['weapons']['pkm']['kills']; 
$pkm2 = $data['players']['0']['weapons']['pkm']['shots_fired']; 
$pkm3 = $data['players']['0']['weapons']['pkm']['shots_hit']; 
$secpkm4 = $data['players']['0']['weapons']['pkm']['seconds']; 
$pkm5 = $data['players']['0']['weapons']['pkm']['headshots']; 
$pkm6 = $data['players']['0']['weapons']['pkm']['stars']['bron']; 
$pkm7 = $data['players']['0']['weapons']['pkm']['stars']['silv']; 
$pkm8 = $data['players']['0']['weapons']['pkm']['stars']['gold']; 
$pkm9 = $data['players']['0']['weapons']['pkm']['stars']['plat']; 

$hours = intval(intval($secpkm4) / 3600);
$minutes = bcmod((intval($secpkm4) / 60),60);
$seconds = bcmod(intval($secpkm4),60);
$pkm4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$pkm."</td>
<td class='indent'>".$pkm1."</td>
<td class='indent'>".$pkm2."</td>
<td class='indent'>".$pkm3."</td>
<td class='indent'>".$pkm4."</td>
<td class='indent'>".$pkm5."</td>
<td class='indent'>B:".$pkm6." S:".$pkm7." G:".$pkm8." P:".$pkm9."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#m249

$m249 = $data['players']['0']['weapons']['m249']['name']; 
$m2491 = $data['players']['0']['weapons']['m249']['kills']; 
$m2492 = $data['players']['0']['weapons']['m249']['shots_fired']; 
$m2493 = $data['players']['0']['weapons']['m249']['shots_hit']; 
$secm2494 = $data['players']['0']['weapons']['m249']['seconds']; 
$m2495 = $data['players']['0']['weapons']['m249']['headshots']; 
$m2496 = $data['players']['0']['weapons']['m249']['stars']['bron']; 
$m2497 = $data['players']['0']['weapons']['m249']['stars']['silv']; 
$m2498 = $data['players']['0']['weapons']['m249']['stars']['gold']; 
$m2499 = $data['players']['0']['weapons']['m249']['stars']['plat']; 

$hours = intval(intval($secm2494) / 3600);
$minutes = bcmod((intval($secm2494) / 60),60);
$seconds = bcmod(intval($secm2494),60);
$m2494 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$m249."</td>
<td class='indent'>".$m2491."</td>
<td class='indent'>".$m2492."</td>
<td class='indent'>".$m2493."</td>
<td class='indent'>".$m2494."</td>
<td class='indent'>".$m2495."</td>
<td class='indent'>B:".$m2496." S:".$m2497." G:".$m2498." P:".$m2499."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#qju88

$qju88 = $data['players']['0']['weapons']['qju88']['name']; 
$qju881 = $data['players']['0']['weapons']['qju88']['kills']; 
$qju882 = $data['players']['0']['weapons']['qju88']['shots_fired']; 
$qju883 = $data['players']['0']['weapons']['qju88']['shots_hit']; 
$secqju884 = $data['players']['0']['weapons']['qju88']['seconds']; 
$qju885 = $data['players']['0']['weapons']['qju88']['headshots']; 
$qju886 = $data['players']['0']['weapons']['qju88']['stars']['bron']; 
$qju887 = $data['players']['0']['weapons']['qju88']['stars']['silv']; 
$qju888 = $data['players']['0']['weapons']['qju88']['stars']['gold']; 
$qju889 = $data['players']['0']['weapons']['qju88']['stars']['plat']; 

$hours = intval(intval($secqju884) / 3600);
$minutes = bcmod((intval($secqju884) / 60),60);
$seconds = bcmod(intval($secqju884),60);
$qju884 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$qju88."</td>
<td class='indent'>".$qju881."</td>
<td class='indent'>".$qju882."</td>
<td class='indent'>".$qju883."</td>
<td class='indent'>".$qju884."</td>
<td class='indent'>".$qju885."</td>
<td class='indent'>B:".$qju886." S:".$qju887." G:".$qju888." P:".$qju889."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#m60

$m60 = $data['players']['0']['weapons']['m60']['name']; 
$m601 = $data['players']['0']['weapons']['m60']['kills']; 
$m602 = $data['players']['0']['weapons']['m60']['shots_fired']; 
$m603 = $data['players']['0']['weapons']['m60']['shots_hit']; 
$secm604 = $data['players']['0']['weapons']['m60']['seconds']; 
$m605 = $data['players']['0']['weapons']['m60']['headshots']; 
$m606 = $data['players']['0']['weapons']['m60']['stars']['bron']; 
$m607 = $data['players']['0']['weapons']['m60']['stars']['silv']; 
$m608 = $data['players']['0']['weapons']['m60']['stars']['gold']; 
$m609 = $data['players']['0']['weapons']['m60']['stars']['plat']; 

$hours = intval(intval($secm604) / 3600);
$minutes = bcmod((intval($secm604) / 60),60);
$seconds = bcmod(intval($secm604),60);
$m604 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$m60."</td>
<td class='indent'>".$m601."</td>
<td class='indent'>".$m602."</td>
<td class='indent'>".$m603."</td>
<td class='indent'>".$m604."</td>
<td class='indent'>".$m605."</td>
<td class='indent'>B:".$m606." S:".$m607." G:".$m608." P:".$m609."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#xm8lmg

$xm8lmg = $data['players']['0']['weapons']['xm8lmg']['name']; 
$xm8lmg1 = $data['players']['0']['weapons']['xm8lmg']['kills']; 
$xm8lmg2 = $data['players']['0']['weapons']['xm8lmg']['shots_fired']; 
$xm8lmg3 = $data['players']['0']['weapons']['xm8lmg']['shots_hit']; 
$secxm8lmg4 = $data['players']['0']['weapons']['xm8lmg']['seconds']; 
$xm8lmg5 = $data['players']['0']['weapons']['xm8lmg']['headshots']; 
$xm8lmg6 = $data['players']['0']['weapons']['xm8lmg']['stars']['bron']; 
$xm8lmg7 = $data['players']['0']['weapons']['xm8lmg']['stars']['silv']; 
$xm8lmg8 = $data['players']['0']['weapons']['xm8lmg']['stars']['gold']; 
$xm8lmg9 = $data['players']['0']['weapons']['xm8lmg']['stars']['plat']; 

$hours = intval(intval($secxm8lmg4) / 3600);
$minutes = bcmod((intval($secxm8lmg4) / 60),60);
$seconds = bcmod(intval($secxm8lmg4),60);
$xm8lmg4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$xm8lmg."</td>
<td class='indent'>".$xm8lmg1."</td>
<td class='indent'>".$xm8lmg2."</td>
<td class='indent'>".$xm8lmg3."</td>
<td class='indent'>".$xm8lmg4."</td>
<td class='indent'>".$xm8lmg5."</td>
<td class='indent'>B:".$xm8lmg6." S:".$xm8lmg7." G:".$xm8lmg8." P:".$xm8lmg9."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#mg36

$mg36 = $data['players']['0']['weapons']['mg36']['name']; 
$mg361 = $data['players']['0']['weapons']['mg36']['kills']; 
$mg362 = $data['players']['0']['weapons']['mg36']['shots_fired']; 
$mg363 = $data['players']['0']['weapons']['mg36']['shots_hit']; 
$secmg364 = $data['players']['0']['weapons']['mg36']['seconds']; 
$mg365 = $data['players']['0']['weapons']['mg36']['headshots']; 
$mg366 = $data['players']['0']['weapons']['mg36']['stars']['bron']; 
$mg367 = $data['players']['0']['weapons']['mg36']['stars']['silv']; 
$mg368 = $data['players']['0']['weapons']['mg36']['stars']['gold']; 
$mg369 = $data['players']['0']['weapons']['mg36']['stars']['plat']; 

$hours = intval(intval($secmg364) / 3600);
$minutes = bcmod((intval($secmg364) / 60),60);
$seconds = bcmod(intval($secmg364),60);
$mg364 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$mg36."</td>
<td class='indent'>".$mg361."</td>
<td class='indent'>".$mg362."</td>
<td class='indent'>".$mg363."</td>
<td class='indent'>".$mg364."</td>
<td class='indent'>".$mg365."</td>
<td class='indent'>B:".$mg366." S:".$mg367." G:".$mg368." P:".$mg369."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#mg36

$mg3 = $data['players']['0']['weapons']['mg3']['name']; 
$mg31 = $data['players']['0']['weapons']['mg3']['kills']; 
$mg32 = $data['players']['0']['weapons']['mg3']['shots_fired']; 
$mg33 = $data['players']['0']['weapons']['mg3']['shots_hit']; 
$secmg34 = $data['players']['0']['weapons']['mg3']['seconds']; 
$mg35 = $data['players']['0']['weapons']['mg3']['headshots']; 
$mg36 = $data['players']['0']['weapons']['mg3']['stars']['bron']; 
$mg37 = $data['players']['0']['weapons']['mg3']['stars']['silv']; 
$mg38 = $data['players']['0']['weapons']['mg3']['stars']['gold']; 
$mg39 = $data['players']['0']['weapons']['mg3']['stars']['plat']; 

$hours = intval(intval($secmg34) / 3600);
$minutes = bcmod((intval($secmg34) / 60),60);
$seconds = bcmod(intval($secmg34),60);
$mg34 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$mg3."</td>
<td class='indent'>".$mg31."</td>
<td class='indent'>".$mg32."</td>
<td class='indent'>".$mg33."</td>
<td class='indent'>".$mg34."</td>
<td class='indent'>".$mg35."</td>
<td class='indent'>B:".$mg36." S:".$mg37." G:".$mg38." P:".$mg39."</td>
</tr>";


//------------------------------------------------------

//----------------------------------#m24

$m24 = $data['players']['0']['weapons']['m24']['name']; 
$m241 = $data['players']['0']['weapons']['m24']['kills']; 
$m242 = $data['players']['0']['weapons']['m24']['shots_fired']; 
$m243 = $data['players']['0']['weapons']['m24']['shots_hit']; 
$secm244 = $data['players']['0']['weapons']['m24']['seconds']; 
$m245 = $data['players']['0']['weapons']['m24']['headshots']; 
$m246 = $data['players']['0']['weapons']['m24']['stars']['bron']; 
$m247 = $data['players']['0']['weapons']['m24']['stars']['silv']; 
$m248 = $data['players']['0']['weapons']['m24']['stars']['gold']; 
$m249 = $data['players']['0']['weapons']['m24']['stars']['plat']; 

$hours = intval(intval($secm244) / 3600);
$minutes = bcmod((intval($secm244) / 60),60);
$seconds = bcmod(intval($secm244),60);
$m244 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$m24."</td>
<td class='indent'>".$m241."</td>
<td class='indent'>".$m242."</td>
<td class='indent'>".$m243."</td>
<td class='indent'>".$m244."</td>
<td class='indent'>".$m245."</td>
<td class='indent'>B:".$m246." S:".$m247." G:".$m248." P:".$m249."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#qbu88

$qbu88 = $data['players']['0']['weapons']['qbu88']['name']; 
$qbu881 = $data['players']['0']['weapons']['qbu88']['kills']; 
$qbu882 = $data['players']['0']['weapons']['qbu88']['shots_fired']; 
$qbu883 = $data['players']['0']['weapons']['qbu88']['shots_hit']; 
$secqbu884 = $data['players']['0']['weapons']['qbu88']['seconds']; 
$qbu885 = $data['players']['0']['weapons']['qbu88']['headshots']; 
$qbu886 = $data['players']['0']['weapons']['qbu88']['stars']['bron']; 
$qbu887 = $data['players']['0']['weapons']['qbu88']['stars']['silv']; 
$qbu888 = $data['players']['0']['weapons']['qbu88']['stars']['gold']; 
$qbu889 = $data['players']['0']['weapons']['qbu88']['stars']['plat']; 

$hours = intval(intval($secqbu884) / 3600);
$minutes = bcmod((intval($secqbu884) / 60),60);
$seconds = bcmod(intval($secqbu884),60);
$qbu884 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$qbu88."</td>
<td class='indent'>".$qbu881."</td>
<td class='indent'>".$qbu882."</td>
<td class='indent'>".$qbu883."</td>
<td class='indent'>".$qbu884."</td>
<td class='indent'>".$qbu885."</td>
<td class='indent'>B:".$qbu886." S:".$qbu887." G:".$qbu888." P:".$qbu889."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#sv98

$sv98 = $data['players']['0']['weapons']['sv98']['name']; 
$sv981 = $data['players']['0']['weapons']['sv98']['kills']; 
$sv982 = $data['players']['0']['weapons']['sv98']['shots_fired']; 
$sv983 = $data['players']['0']['weapons']['sv98']['shots_hit']; 
$secsv984 = $data['players']['0']['weapons']['sv98']['seconds']; 
$sv985 = $data['players']['0']['weapons']['sv98']['headshots']; 
$sv986 = $data['players']['0']['weapons']['sv98']['stars']['bron']; 
$sv987 = $data['players']['0']['weapons']['sv98']['stars']['silv']; 
$sv988 = $data['players']['0']['weapons']['sv98']['stars']['gold']; 
$sv989 = $data['players']['0']['weapons']['sv98']['stars']['plat']; 

$hours = intval(intval($secsv984) / 3600);
$minutes = bcmod((intval($secsv984) / 60),60);
$seconds = bcmod(intval($secsv984),60);
$sv984 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$sv98."</td>
<td class='indent'>".$sv981."</td>
<td class='indent'>".$sv982."</td>
<td class='indent'>".$sv983."</td>
<td class='indent'>".$sv984."</td>
<td class='indent'>".$sv985."</td>
<td class='indent'>B:".$sv986." S:".$sv987." G:".$sv988." P:".$sv989."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#svu

$svu = $data['players']['0']['weapons']['svu']['name']; 
$svu1 = $data['players']['0']['weapons']['svu']['kills']; 
$svu2 = $data['players']['0']['weapons']['svu']['shots_fired']; 
$svu3 = $data['players']['0']['weapons']['svu']['shots_hit']; 
$secsvu4 = $data['players']['0']['weapons']['svu']['seconds']; 
$svu5 = $data['players']['0']['weapons']['svu']['headshots']; 
$svu6 = $data['players']['0']['weapons']['svu']['stars']['bron']; 
$svu7 = $data['players']['0']['weapons']['svu']['stars']['silv']; 
$svu8 = $data['players']['0']['weapons']['svu']['stars']['gold']; 
$svu9 = $data['players']['0']['weapons']['svu']['stars']['plat']; 

$hours = intval(intval($secsvu4) / 3600);
$minutes = bcmod((intval($secsvu4) / 60),60);
$seconds = bcmod(intval($secsvu4),60);
$svu4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$svu."</td>
<td class='indent'>".$svu1."</td>
<td class='indent'>".$svu2."</td>
<td class='indent'>".$svu3."</td>
<td class='indent'>".$svu4."</td>
<td class='indent'>".$svu5."</td>
<td class='indent'>B:".$svu6." S:".$svu7." G:".$svu8." P:".$svu9."</td>
</tr>";


//------------------------------------------------------

//----------------------------------#gol

$gol = $data['players']['0']['weapons']['gol']['name']; 
$gol1 = $data['players']['0']['weapons']['gol']['kills']; 
$gol2 = $data['players']['0']['weapons']['gol']['shots_fired']; 
$gol3 = $data['players']['0']['weapons']['gol']['shots_hit']; 
$secgol4 = $data['players']['0']['weapons']['gol']['seconds']; 
$gol5 = $data['players']['0']['weapons']['gol']['headshots']; 
$gol6 = $data['players']['0']['weapons']['gol']['stars']['bron']; 
$gol7 = $data['players']['0']['weapons']['gol']['stars']['silv']; 
$gol8 = $data['players']['0']['weapons']['gol']['stars']['gold']; 
$gol9 = $data['players']['0']['weapons']['gol']['stars']['plat']; 

$hours = intval(intval($secgol4) / 3600);
$minutes = bcmod((intval($secgol4) / 60),60);
$seconds = bcmod(intval($secgol4),60);
$gol4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$gol."</td>
<td class='indent'>".$gol1."</td>
<td class='indent'>".$gol2."</td>
<td class='indent'>".$gol3."</td>
<td class='indent'>".$gol4."</td>
<td class='indent'>".$gol5."</td>
<td class='indent'>B:".$gol6." S:".$gol7." G:".$gol8." P:".$gol9."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#vss

$vss = $data['players']['0']['weapons']['vss']['name']; 
$vss1 = $data['players']['0']['weapons']['vss']['kills']; 
$vss2 = $data['players']['0']['weapons']['vss']['shots_fired']; 
$vss3 = $data['players']['0']['weapons']['vss']['shots_hit']; 
$secvss4 = $data['players']['0']['weapons']['vss']['seconds']; 
$vss5 = $data['players']['0']['weapons']['vss']['headshots']; 
$vss6 = $data['players']['0']['weapons']['vss']['stars']['bron']; 
$vss7 = $data['players']['0']['weapons']['vss']['stars']['silv']; 
$vss8 = $data['players']['0']['weapons']['vss']['stars']['gold']; 
$vss9 = $data['players']['0']['weapons']['vss']['stars']['plat']; 

$hours = intval(intval($secvss4) / 3600);
$minutes = bcmod((intval($secvss4) / 60),60);
$seconds = bcmod(intval($secvss4),60);
$vss4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$vss."</td>
<td class='indent'>".$vss1."</td>
<td class='indent'>".$vss2."</td>
<td class='indent'>".$vss3."</td>
<td class='indent'>".$vss4."</td>
<td class='indent'>".$vss5."</td>
<td class='indent'>B:".$vss6." S:".$vss7." G:".$vss8." P:".$vss9."</td>
</tr>";


//------------------------------------------------------

//----------------------------------#m95

$m95 = $data['players']['0']['weapons']['m95']['name']; 
$m951 = $data['players']['0']['weapons']['m95']['kills']; 
$m952 = $data['players']['0']['weapons']['m95']['shots_fired']; 
$m953 = $data['players']['0']['weapons']['m95']['shots_hit']; 
$secm954 = $data['players']['0']['weapons']['m95']['seconds']; 
$m955 = $data['players']['0']['weapons']['m95']['headshots']; 
$m956 = $data['players']['0']['weapons']['m95']['stars']['bron']; 
$m957 = $data['players']['0']['weapons']['m95']['stars']['silv']; 
$m958 = $data['players']['0']['weapons']['m95']['stars']['gold']; 
$m959 = $data['players']['0']['weapons']['m95']['stars']['plat']; 

$hours = intval(intval($secm954) / 3600);
$minutes = bcmod((intval($secm954) / 60),60);
$seconds = bcmod(intval($secm954),60);
$m954 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$m95."</td>
<td class='indent'>".$m951."</td>
<td class='indent'>".$m952."</td>
<td class='indent'>".$m953."</td>
<td class='indent'>".$m954."</td>
<td class='indent'>".$m955."</td>
<td class='indent'>B:".$m956." S:".$m957." G:".$m958." P:".$m959."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#m9

$m9 = $data['players']['0']['weapons']['m9']['name']; 
$m91 = $data['players']['0']['weapons']['m9']['kills']; 
$m92 = $data['players']['0']['weapons']['m9']['shots_fired']; 
$m93 = $data['players']['0']['weapons']['m9']['shots_hit']; 
$secm94 = $data['players']['0']['weapons']['m9']['seconds']; 
$m95 = $data['players']['0']['weapons']['m9']['headshots']; 
$m96 = $data['players']['0']['weapons']['m9']['stars']['bron']; 
$m97 = $data['players']['0']['weapons']['m9']['stars']['silv']; 
$m98 = $data['players']['0']['weapons']['m9']['stars']['gold']; 
$m99 = $data['players']['0']['weapons']['m9']['stars']['plat']; 

$hours = intval(intval($secm94) / 3600);
$minutes = bcmod((intval($secm94) / 60),60);
$seconds = bcmod(intval($secm94),60);
$m94 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$m9."</td>
<td class='indent'>".$m91."</td>
<td class='indent'>".$m92."</td>
<td class='indent'>".$m93."</td>
<td class='indent'>".$m94."</td>
<td class='indent'>".$m95."</td>
<td class='indent'>B:".$m96." S:".$m97." G:".$m98." P:".$m99."</td>
</tr>";


//------------------------------------------------------

//----------------------------------#mcs

$mcs = $data['players']['0']['weapons']['mcs']['name']; 
$mcs1 = $data['players']['0']['weapons']['mcs']['kills']; 
$mcs2 = $data['players']['0']['weapons']['mcs']['shots_fired']; 
$mcs3 = $data['players']['0']['weapons']['mcs']['shots_hit']; 
$secmcs4 = $data['players']['0']['weapons']['mcs']['seconds']; 
$mcs5 = $data['players']['0']['weapons']['mcs']['headshots']; 
$mcs6 = $data['players']['0']['weapons']['mcs']['stars']['bron']; 
$mcs7 = $data['players']['0']['weapons']['mcs']['stars']['silv']; 
$mcs8 = $data['players']['0']['weapons']['mcs']['stars']['gold']; 
$mcs9 = $data['players']['0']['weapons']['mcs']['stars']['plat']; 

$hours = intval(intval($secmcs4) / 3600);
$minutes = bcmod((intval($secmcs4) / 60),60);
$seconds = bcmod(intval($secmcs4),60);
$mcs4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$mcs."</td>
<td class='indent'>".$mcs1."</td>
<td class='indent'>".$mcs2."</td>
<td class='indent'>".$mcs3."</td>
<td class='indent'>".$mcs4."</td>
<td class='indent'>".$mcs5."</td>
<td class='indent'>B:".$mcs6." S:".$mcs7." G:".$mcs8." P:".$mcs9."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#s12k

$s12k = $data['players']['0']['weapons']['s12k']['name']; 
$s12k1 = $data['players']['0']['weapons']['s12k']['kills']; 
$s12k2 = $data['players']['0']['weapons']['s12k']['shots_fired']; 
$s12k3 = $data['players']['0']['weapons']['s12k']['shots_hit']; 
$secs12k4 = $data['players']['0']['weapons']['s12k']['seconds']; 
$s12k5 = $data['players']['0']['weapons']['s12k']['headshots']; 
$s12k6 = $data['players']['0']['weapons']['s12k']['stars']['bron']; 
$s12k7 = $data['players']['0']['weapons']['s12k']['stars']['silv']; 
$s12k8 = $data['players']['0']['weapons']['s12k']['stars']['gold']; 
$s12k9 = $data['players']['0']['weapons']['s12k']['stars']['plat']; 

$hours = intval(intval($secs12k4) / 3600);
$minutes = bcmod((intval($secs12k4) / 60),60);
$seconds = bcmod(intval($secs12k4),60);
$s12k4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$s12k."</td>
<td class='indent'>".$s12k1."</td>
<td class='indent'>".$s12k2."</td>
<td class='indent'>".$s12k3."</td>
<td class='indent'>".$s12k4."</td>
<td class='indent'>".$s12k5."</td>
<td class='indent'>B:".$s12k6." S:".$s12k7." G:".$s12k8." P:".$s12k9."</td>
</tr>";


//------------------------------------------------------

//----------------------------------#mp443

$mp443 = $data['players']['0']['weapons']['mp443']['name']; 
$mp4431 = $data['players']['0']['weapons']['mp443']['kills']; 
$mp4432 = $data['players']['0']['weapons']['mp443']['shots_fired']; 
$mp4433 = $data['players']['0']['weapons']['mp443']['shots_hit']; 
$secmp4434 = $data['players']['0']['weapons']['mp443']['seconds']; 
$mp4435 = $data['players']['0']['weapons']['mp443']['headshots']; 
$mp4436 = $data['players']['0']['weapons']['mp443']['stars']['bron']; 
$mp4437 = $data['players']['0']['weapons']['mp443']['stars']['silv']; 
$mp4438 = $data['players']['0']['weapons']['mp443']['stars']['gold']; 
$mp4439 = $data['players']['0']['weapons']['mp443']['stars']['plat']; 

$hours = intval(intval($secmp4434) / 3600);
$minutes = bcmod((intval($secmp4434) / 60),60);
$seconds = bcmod(intval($secmp4434),60);
$mp4434 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$mp443."</td>
<td class='indent'>".$mp4431."</td>
<td class='indent'>".$mp4432."</td>
<td class='indent'>".$mp4433."</td>
<td class='indent'>".$mp4434."</td>
<td class='indent'>".$mp4435."</td>
<td class='indent'>B:".$mp4436." S:".$mp4437." G:".$mp4438." P:".$mp4439."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#m1911

$m1911 = $data['players']['0']['weapons']['m1911']['name']; 
$m19111 = $data['players']['0']['weapons']['m1911']['kills']; 
$m19112 = $data['players']['0']['weapons']['m1911']['shots_fired']; 
$m19113 = $data['players']['0']['weapons']['m1911']['shots_hit']; 
$secm19114 = $data['players']['0']['weapons']['m1911']['seconds']; 
$m19115 = $data['players']['0']['weapons']['m1911']['headshots']; 
$m19116 = $data['players']['0']['weapons']['m1911']['stars']['bron']; 
$m19117 = $data['players']['0']['weapons']['m1911']['stars']['silv']; 
$m19118 = $data['players']['0']['weapons']['m1911']['stars']['gold']; 
$m19119 = $data['players']['0']['weapons']['m1911']['stars']['plat']; 

$hours = intval(intval($secm19114) / 3600);
$minutes = bcmod((intval($secm19114) / 60),60);
$seconds = bcmod(intval($secm19114),60);
$m19114 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$m1911."</td>
<td class='indent'>".$m19111."</td>
<td class='indent'>".$m19112."</td>
<td class='indent'>".$m19113."</td>
<td class='indent'>".$m19114."</td>
<td class='indent'>".$m19115."</td>
<td class='indent'>B:".$m19116." S:".$m19117." G:".$m19118." P:".$m19119."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#m1a1

$m1a1 = $data['players']['0']['weapons']['m1a1']['name']; 
$m1a11 = $data['players']['0']['weapons']['m1a1']['kills']; 
$m1a12 = $data['players']['0']['weapons']['m1a1']['shots_fired']; 
$m1a13 = $data['players']['0']['weapons']['m1a1']['shots_hit']; 
$secm1a14 = $data['players']['0']['weapons']['m1a1']['seconds']; 
$m1a15 = $data['players']['0']['weapons']['m1a1']['headshots']; 
$m1a16 = $data['players']['0']['weapons']['m1a1']['stars']['bron']; 
$m1a17 = $data['players']['0']['weapons']['m1a1']['stars']['silv']; 
$m1a18 = $data['players']['0']['weapons']['m1a1']['stars']['gold']; 
$m1a19 = $data['players']['0']['weapons']['m1a1']['stars']['plat']; 

$hours = intval(intval($secm1a14) / 3600);
$minutes = bcmod((intval($secm1a14) / 60),60);
$seconds = bcmod(intval($secm1a14),60);
$m1a14 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$m1a1."</td>
<td class='indent'>".$m1a11."</td>
<td class='indent'>".$m1a12."</td>
<td class='indent'>".$m1a13."</td>
<td class='indent'>".$m1a14."</td>
<td class='indent'>".$m1a15."</td>
<td class='indent'>B:".$m1a16." S:".$m1a17." G:".$m1a18." P:".$m1a19."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#mp412

$mp412 = $data['players']['0']['weapons']['mp412']['name']; 
$mp4121 = $data['players']['0']['weapons']['mp412']['kills']; 
$mp4122 = $data['players']['0']['weapons']['mp412']['shots_fired']; 
$mp4123 = $data['players']['0']['weapons']['mp412']['shots_hit']; 
$secmp4124 = $data['players']['0']['weapons']['mp412']['seconds']; 
$mp4125 = $data['players']['0']['weapons']['mp412']['headshots']; 
$mp4126 = $data['players']['0']['weapons']['mp412']['stars']['bron']; 
$mp4127 = $data['players']['0']['weapons']['mp412']['stars']['silv']; 
$mp4128 = $data['players']['0']['weapons']['mp412']['stars']['gold']; 
$mp4129 = $data['players']['0']['weapons']['mp412']['stars']['plat']; 

$hours = intval(intval($secmp4124) / 3600);
$minutes = bcmod((intval($secmp4124) / 60),60);
$seconds = bcmod(intval($secmp4124),60);
$mp4124 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$mp412."</td>
<td class='indent'>".$mp4121."</td>
<td class='indent'>".$mp4122."</td>
<td class='indent'>".$mp4123."</td>
<td class='indent'>".$mp4124."</td>
<td class='indent'>".$mp4125."</td>
<td class='indent'>B:".$mp4126." S:".$mp4127." G:".$mp4128." P:".$mp4129."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#m93r

$m93r = $data['players']['0']['weapons']['m93r']['name']; 
$m93r1 = $data['players']['0']['weapons']['m93r']['kills']; 
$m93r2 = $data['players']['0']['weapons']['m93r']['shots_fired']; 
$m93r3 = $data['players']['0']['weapons']['m93r']['shots_hit']; 
$secm93r4 = $data['players']['0']['weapons']['m93r']['seconds']; 
$m93r5 = $data['players']['0']['weapons']['m93r']['headshots']; 
$m93r6 = $data['players']['0']['weapons']['m93r']['stars']['bron']; 
$m93r7 = $data['players']['0']['weapons']['m93r']['stars']['silv']; 
$m93r8 = $data['players']['0']['weapons']['m93r']['stars']['gold']; 
$m93r9 = $data['players']['0']['weapons']['m93r']['stars']['plat']; 

$hours = intval(intval($secm93r4) / 3600);
$minutes = bcmod((intval($secm93r4) / 60),60);
$seconds = bcmod(intval($secm93r4),60);
$m93r4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$m93r."</td>
<td class='indent'>".$m93r1."</td>
<td class='indent'>".$m93r2."</td>
<td class='indent'>".$m93r3."</td>
<td class='indent'>".$m93r4."</td>
<td class='indent'>".$m93r5."</td>
<td class='indent'>B:".$m93r6." S:".$m93r7." G:".$m93r8." P:".$m93r9."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#spas12

$spas12 = $data['players']['0']['weapons']['spas12']['name']; 
$spas121 = $data['players']['0']['weapons']['spas12']['kills']; 
$spas122 = $data['players']['0']['weapons']['spas12']['shots_fired']; 
$spas123 = $data['players']['0']['weapons']['spas12']['shots_hit']; 
$secspas124 = $data['players']['0']['weapons']['spas12']['seconds']; 
$spas125 = $data['players']['0']['weapons']['spas12']['headshots']; 
$spas126 = $data['players']['0']['weapons']['spas12']['stars']['bron']; 
$spas127 = $data['players']['0']['weapons']['spas12']['stars']['silv']; 
$spas128 = $data['players']['0']['weapons']['spas12']['stars']['gold']; 
$spas129 = $data['players']['0']['weapons']['spas12']['stars']['plat']; 

$hours = intval(intval($secspas124) / 3600);
$minutes = bcmod((intval($secspas124) / 60),60);
$seconds = bcmod(intval($secspas124),60);
$spas124 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$spas12."</td>
<td class='indent'>".$spas121."</td>
<td class='indent'>".$spas122."</td>
<td class='indent'>".$spas123."</td>
<td class='indent'>".$spas124."</td>
<td class='indent'>".$spas125."</td>
<td class='indent'>B:".$spas126." S:".$spas127." G:".$spas128." P:".$spas129."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#mk14ebr

$mk14ebr = $data['players']['0']['weapons']['mk14ebr']['name']; 
$mk14ebr1 = $data['players']['0']['weapons']['mk14ebr']['kills']; 
$mk14ebr2 = $data['players']['0']['weapons']['mk14ebr']['shots_fired']; 
$mk14ebr3 = $data['players']['0']['weapons']['mk14ebr']['shots_hit']; 
$secmk14ebr4 = $data['players']['0']['weapons']['mk14ebr']['seconds']; 
$mk14ebr5 = $data['players']['0']['weapons']['mk14ebr']['headshots']; 
$mk14ebr6 = $data['players']['0']['weapons']['mk14ebr']['stars']['bron']; 
$mk14ebr7 = $data['players']['0']['weapons']['mk14ebr']['stars']['silv']; 
$mk14ebr8 = $data['players']['0']['weapons']['mk14ebr']['stars']['gold']; 
$mk14ebr9 = $data['players']['0']['weapons']['mk14ebr']['stars']['plat']; 

$hours = intval(intval($secmk14ebr4) / 3600);
$minutes = bcmod((intval($secmk14ebr4) / 60),60);
$seconds = bcmod(intval($secmk14ebr4),60);
$mk14ebr4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$mk14ebr."</td>
<td class='indent'>".$mk14ebr1."</td>
<td class='indent'>".$mk14ebr2."</td>
<td class='indent'>".$mk14ebr3."</td>
<td class='indent'>".$mk14ebr4."</td>
<td class='indent'>".$mk14ebr5."</td>
<td class='indent'>B:".$mk14ebr6." S:".$mk14ebr7." G:".$mk14ebr8." P:".$mk14ebr9."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#g3

$g3 = $data['players']['0']['weapons']['g3']['name']; 
$g31 = $data['players']['0']['weapons']['g3']['kills']; 
$g32 = $data['players']['0']['weapons']['g3']['shots_fired']; 
$g33 = $data['players']['0']['weapons']['g3']['shots_hit']; 
$secg34 = $data['players']['0']['weapons']['g3']['seconds']; 
$g35 = $data['players']['0']['weapons']['g3']['headshots']; 
$g36 = $data['players']['0']['weapons']['g3']['stars']['bron']; 
$g37 = $data['players']['0']['weapons']['g3']['stars']['silv']; 
$g38 = $data['players']['0']['weapons']['g3']['stars']['gold']; 
$g39 = $data['players']['0']['weapons']['g3']['stars']['plat']; 

$hours = intval(intval($secg34) / 3600);
$minutes = bcmod((intval($secg34) / 60),60);
$seconds = bcmod(intval($secg34),60);
$g34 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$g3."</td>
<td class='indent'>".$g31."</td>
<td class='indent'>".$g32."</td>
<td class='indent'>".$g33."</td>
<td class='indent'>".$g34."</td>
<td class='indent'>".$g35."</td>
<td class='indent'>B:".$g36." S:".$g37." G:".$g38." P:".$g39."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#u12

$u12 = $data['players']['0']['weapons']['u12']['name']; 
$u121 = $data['players']['0']['weapons']['u12']['kills']; 
$u122 = $data['players']['0']['weapons']['u12']['shots_fired']; 
$u123 = $data['players']['0']['weapons']['u12']['shots_hit']; 
$secu124 = $data['players']['0']['weapons']['u12']['seconds']; 
$u125 = $data['players']['0']['weapons']['u12']['headshots']; 
$u126 = $data['players']['0']['weapons']['u12']['stars']['bron']; 
$u127 = $data['players']['0']['weapons']['u12']['stars']['silv']; 
$u128 = $data['players']['0']['weapons']['u12']['stars']['gold']; 
$u129 = $data['players']['0']['weapons']['u12']['stars']['plat']; 

$hours = intval(intval($secu124) / 3600);
$minutes = bcmod((intval($secu124) / 60),60);
$seconds = bcmod(intval($secu124),60);
$u124 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$u12."</td>
<td class='indent'>".$u121."</td>
<td class='indent'>".$u122."</td>
<td class='indent'>".$u123."</td>
<td class='indent'>".$u124."</td>
<td class='indent'>".$u125."</td>
<td class='indent'>B:".$u126." S:".$u127." G:".$u128." P:".$u129."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#m1

$m1 = $data['players']['0']['weapons']['m1']['name']; 
$m11 = $data['players']['0']['weapons']['m1']['kills']; 
$m12 = $data['players']['0']['weapons']['m1']['shots_fired']; 
$m13 = $data['players']['0']['weapons']['m1']['shots_hit']; 
$secm14 = $data['players']['0']['weapons']['m1']['seconds']; 
$m15 = $data['players']['0']['weapons']['m1']['headshots']; 
$m16 = $data['players']['0']['weapons']['m1']['stars']['bron']; 
$m17 = $data['players']['0']['weapons']['m1']['stars']['silv']; 
$m18 = $data['players']['0']['weapons']['m1']['stars']['gold']; 
$m19 = $data['players']['0']['weapons']['m1']['stars']['plat']; 

$hours = intval(intval($secm14) / 3600);
$minutes = bcmod((intval($secm14) / 60),60);
$seconds = bcmod(intval($secm14),60);
$m14 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$m1."</td>
<td class='indent'>".$m11."</td>
<td class='indent'>".$m12."</td>
<td class='indent'>".$m13."</td>
<td class='indent'>".$m14."</td>
<td class='indent'>".$m15."</td>
<td class='indent'>B:".$m16." S:".$m17." G:".$m18." P:".$m19."</td>
</tr>";


//------------------------------------------------------


//----------------------------------#n2k

$n2k = $data['players']['0']['weapons']['n2k']['name']; 
$n2k1 = $data['players']['0']['weapons']['n2k']['kills']; 
$n2k2 = $data['players']['0']['weapons']['n2k']['shots_fired']; 
$n2k3 = $data['players']['0']['weapons']['n2k']['shots_hit']; 
$secn2k4 = $data['players']['0']['weapons']['n2k']['seconds']; 
$n2k5 = $data['players']['0']['weapons']['n2k']['headshots']; 
$n2k6 = $data['players']['0']['weapons']['n2k']['stars']['bron']; 
$n2k7 = $data['players']['0']['weapons']['n2k']['stars']['silv']; 
$n2k8 = $data['players']['0']['weapons']['n2k']['stars']['gold']; 
$n2k9 = $data['players']['0']['weapons']['n2k']['stars']['plat']; 

$hours = intval(intval($secn2k4) / 3600);
$minutes = bcmod((intval($secn2k4) / 60),60);
$seconds = bcmod(intval($secn2k4),60);
$n2k4 = "".$hours."h ".$minutes."m ".$seconds."s";

$text .= "<tr>
<td class='forumheader3'>".$n2k."</td>
<td class='indent'>".$n2k1."</td>
<td class='indent'>".$n2k2."</td>
<td class='indent'>".$n2k3."</td>
<td class='indent'>".$n2k4."</td>
<td class='indent'>".$n2k5."</td>
<td class='indent'>B:".$n2k6." S:".$n2k7." G:".$n2k8." P:".$n2k9."</td>
</tr>";


//------------------------------------------------------

$text .= "</table></div>";



?>