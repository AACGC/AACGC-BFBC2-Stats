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
<td class='forumheader3' colspan='5'><center><b><u>Kit Stats</u></b></center></td>
</tr><tr>
<td style='width:20%'><u>Type</u></td>
<td style='width:20%'><u>Kills</u></td>
<td style='width:20%'><u>Deaths</u></td>
<td style='width:20%'><u>Score</u></td>
<td style='width:20%'><u>K/D Ratio</u></td>
</tr></table>";

$text .= "<div style='height:".$pref['bfbc_secth_kits']."; overflow:auto' class=''><table style='width:100%'>";

//------------------------------------------------------

//--------------------------------#assault

$assault = $data['players']['0']['kits']['assault']['name']; 
$assault3 = number_format($data['players']['0']['kits']['assault']['score']); 
$assault1 = number_format($data['players']['0']['kits']['assault']['kills']); 
$assault2 = number_format($data['players']['0']['kits']['assault']['deaths']); 
$assault4 = $assault1/$assault2;
$assault5 = round($assault4, 2);

$text .= "<tr>
<td class='forumheader3' style='width:20%'>".$assault."</td>
<td class='indent' style='width:20%'>".$assault1."</td>
<td class='indent' style='width:20%'>".$assault2."</td>
<td class='indent' style='width:20%'>".$assault3."</td>
<td class='indent' style='width:20%'>".$assault5."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#demo

$demo = $data['players']['0']['kits']['demo']['name']; 
$demo3 = number_format($data['players']['0']['kits']['demo']['score']); 
$demo1 = number_format($data['players']['0']['kits']['demo']['kills']); 
$demo2 = number_format($data['players']['0']['kits']['demo']['deaths']); 
$demo4 = $demo1/$demo2;
$demo5 = round($demo4, 2);

$text .= "<tr>
<td class='forumheader3'>".$demo."</td>
<td class='indent'>".$demo1."</td>
<td class='indent'>".$demo2."</td>
<td class='indent'>".$demo3."</td>
<td class='indent'>".$demo5."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#support

$support = $data['players']['0']['kits']['support']['name']; 
$support3 = number_format($data['players']['0']['kits']['support']['score']); 
$support1 = number_format($data['players']['0']['kits']['support']['kills']); 
$support2 = number_format($data['players']['0']['kits']['support']['deaths']); 
$support4 = $support1/$support2;
$support5 = round($support4, 2);

$text .= "<tr>
<td class='forumheader3'>".$support."</td>
<td class='indent'>".$support1."</td>
<td class='indent'>".$support2."</td>
<td class='indent'>".$support3."</td>
<td class='indent'>".$support5."</td>
</tr>";

//------------------------------------------------------

//--------------------------------#recon

$recon = $data['players']['0']['kits']['recon']['name']; 
$recon3 = number_format($data['players']['0']['kits']['recon']['score']); 
$recon1 = number_format($data['players']['0']['kits']['recon']['kills']); 
$recon2 = number_format($data['players']['0']['kits']['recon']['deaths']); 
$recon4 = $recon1/$recon2;
$recon5 = round($recon4, 2);

$text .= "<tr>
<td class='forumheader3'>".$recon."</td>
<td class='indent'>".$recon1."</td>
<td class='indent'>".$recon2."</td>
<td class='indent'>".$recon3."</td>
<td class='indent'>".$recon5."</td>
</tr>";

//------------------------------------------------------

$text .= "</table></div>";

?>
