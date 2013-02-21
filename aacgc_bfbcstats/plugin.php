<?php

if (!defined('e107_INIT'))
{exit;}

/*
#######################################
#     e107 website system plguin      #
#     AACGC BF BC2 Stats              #    
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/


$eplug_name = "AACGC BFBC2 Stats";
$eplug_version = "2.1";
$eplug_author = "M@CHIN3";
$eplug_url = "http://www.aacgc.com";
$eplug_email = "admin@aacgc.com";
$eplug_description = "Shows all users BF BC2 stats on a page, also comes with scolling menu. Option to show in forum post, option to show username and avatar above stats on list page.For Full Instructions On Setting Up This Plugin Please <a href='http://www.aacgc.com/SSGC/e107_plugins/faq/faq.php?0.cat.7.51' target='_blank'>Click Here</a> To Visit The AACGC FAQs.";
$eplug_compatible = "e107v7";
$eplug_readme = ""; 
$eplug_compliant = true;
$eplug_status = false;
$eplug_latest = false;

// Name of the plugin's folder -------------------------------------------------------------------------------------
$eplug_folder = "aacgc_bfbcstats";

// Main of menu item for plugin ----------------------------------------------------------------------------------
$eplug_menu_name = "";

// Name of the admin configuration file -----------------------------------------------------------------

$eplug_conffile = "admin_main.php";

// Icon image and caption text -----------------------------------------------------------------

$eplug_icon = $eplug_folder . "/images/icon_32.png";
$eplug_icon_small = $eplug_folder . "/images/icon_16.png";
$eplug_caption = "AACGC BFBC2 Stats";


// Preferences --------------
$eplug_prefs = array(
"bfbc_height" => "300",
"bfbc_speed" => "3",
"bfbc_mouseoverspeed" => "0",
"bfbc_mouseoutspeed" => "3",
"bfbc_avatar_size" => "25",
"bfbc_rendperpage" => "",
"bfbc_secth_weapons" => "auto",
"bfbc_secth_vehicles" => "auto",
"bfbc_secth_kits" => "auto",
"bfbc_secth_teams" => "auto",
"bfbc_secth_insig" => "auto",
"bfbc_secth_pins" => "auto",
"bfbc_secth_achs" => "auto",
"bfbc_enable_forum" => "1",
"bfbc_enable_profile" => "1",
"bfbc_enable_gold" => "0",
"bfbc_enable_avatar" => "1",
"bfbc_enable_username" => "1",
"bfbc_enable_platform" => "1",
"bfbc_enable_weaponstats" => "1",
"bfbc_enable_vehiclestats" => "1",
"bfbc_enable_kitstats" => "1",
"bfbc_enable_teamstats" => "1",
"bfbc_enable_insigstats" => "1",
"bfbc_enable_pinstats" => "1",
"bfbc_enable_achstats" => "1",
"bfbc_enable_globalpc" => "1",
"bfbc_enable_globalxbox" => "1",
"bfbc_enable_globalps" => "1",
"bfbc_enable_expandsections" => "1",
"bfbc_button_loc" => "Beside General Info",
"bfbc_enable_umrank" => "1",
"bfbc_enable_umscore" => "1",
"bfbc_enable_umlevel" => "1",
"bfbc_enable_umkills" => "1",
"bfbc_enable_umdeaths" => "1",
"bfbc_enable_umkdratio" => "1",
"bfbc_enable_umtime" => "1",
"bfbc_enable_umupdated" => "1",
);

// DB Tables ----------------

$eplug_table_names = "";
$eplug_tables = "";


// Create a link in main menu (yes=TRUE, no=FALSE) -------------------------------------------------------------
$eplug_link = true;
$eplug_link_name = "BFBC2 Stats";
$eplug_link_url = "".e_PLUGIN."aacgc_bfbcstats/Member_Stats.php";

// Text to display after plugin successfully installed -----------------------------------------------------------------

$eplug_done = "Install Complete!";


// upgrading ... //

$upgrade_add_prefs = "";
$upgrade_remove_prefs = "";
$upgrade_alter_tables = "";
$eplug_upgrade_done = "Upgrade Complete!";

?>
