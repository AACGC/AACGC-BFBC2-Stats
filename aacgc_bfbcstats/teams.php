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
<td class='forumheader3' colspan='4'><center><b><u>Team Stats</u></b></center></td>
</tr><tr>
<td style='width:25%'><u>Type</u></td>
<td style='width:25%'><u>Wins</u></td>
<td style='width:25%'><u>Losses</u></td>
<td style='width:25%'><u>W/L Ratio</u></td>
</tr></table>";

$text .= "<div style='height:".$pref['bfbc_secth_teams']."; overflow:auto' class=''><table style='width:100%'>";

//------------------------------------------------------

//--------------------------------#att

$att = $data['players']['0']['teams']['att']['name']; 
$att1 = number_format($data['players']['0']['teams']['att']['win']); 
$att2 = number_format($data['players']['0']['teams']['att']['loss']); 
$att3 = $att1/$att2; 
$att4 = round($att3, 2);

$text .= "<tr>
<td class='forumheader3' style='width:25%'>".$att."</td>
<td class='indent' style='width:25%'>".$att1."</td>
<td class='indent' style='width:25%'>".$att2."</td>
<td class='indent' style='width:25%'>".$att4."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#def

$def = $data['players']['0']['teams']['def']['name']; 
$def1 = number_format($data['players']['0']['teams']['def']['win']); 
$def2 = number_format($data['players']['0']['teams']['def']['loss']); 
$def3 = $def1/$def2;
$def4 = round($def3, 2);

$text .= "<tr>
<td class='forumheader3' style='width:25%'>".$def."</td>
<td class='indent' style='width:25%'>".$def1."</td>
<td class='indent' style='width:25%'>".$def2."</td>
<td class='indent' style='width:25%'>".$def4."</td>
</tr>";

//------------------------------------------------------

$text .= "</table></div>";

?>
