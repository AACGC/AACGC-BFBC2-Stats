First: 
Unzip the aacgc_bfbcstats folder to your desktop, then upload that folder to your e107_plugins folder thru FTP. After it's uploaded go to your Plugin Manager and click Install next to the AACGC BFBC2 Stats Plugin.

Second:
Create 2 extended user fields (user_bfbc2 , user_bfbc2type), to do this go to your e107 admin area (NOT the BFBC2 plugin area) and you should see an icon named "Extended User Fields". In there on the menu to your right you should have an option "Add New Field". once you click that you need to fill in the options as follows:

for the first user field (user_bfbc2):

Field name: user_bfbc2 (note is already has user_ added for you so all you need to type is bfbc2)
Field text: Battlefield BC2 Username
Field Type: text box 
Required: No - Show on signup page 
Applicable: Members 
Read access: Everyone (public) 
Write access: Members 
Allow user to hide: No 

for the second user field (user_bfbc2type):

Field name: user_bfbc2type (note is already has user_ added for you so all you need to type is bfbc2type) 
Field text: Battlefield BC2 Type
Field Type: Radio Buttons
Values: 
Windows
PS3
Xbox360

(make sure you have a Captol letters like shown for each value)

Required: No - Show on signup page 
Applicable: Members 
Read access: Everyone (public) 
Write access: Members 
Allow user to hide: No 


Once you have created both extended user fileds user can then add the BFBC2 names in their profiles as well as select what platform the play on. 


