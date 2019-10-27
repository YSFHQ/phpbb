### Changelog


- 2.2.8 (12/08/2018)
  - [FIX] #82 special page fix
  - [FIX] #108 poll layout issue
  - [FIX] #107 registration issue
  - [FIX] #109 make curl https compatible

- 2.2.7 (25/02/2018) 
  - [NEW] #82 recent topics is now available on a special page http://url/app.php/rt
  - [CHG] now uses phpbb 3.2 language class
  - [CHG] #77 moved setting for number of recent topics per page to ucp
  - [FIX] fix potential nullreference error in $start
  - [FIX] languge nl, de (missing variables)
  - [ADD] language ar (@alhitary), ru (@SiavaRu), pt (@borgesjoaquim)
   
- 2.2.6 (28/10/2017) 
  - [NEW] #43 Supports Collapsable categories extension for prosilver.   
  - [CHG] #76 Switched to Twig syntax
  - [FIX] #72, #19 clickable topic icon
  - [FIX] #75 remove quoted integer value 
  
- 2.2.5 (30/09/2017) 
  - [FIX] #68 fixed unescaped line in acp
  - [FIX] #67 fixed overflow links in paging for unread and alltopics mode.

- 2.2.4 (18/09/2017)
  - [FIX] Fix bug with pagination (Tatiana5)

- 2.2.3 (17/09/2017)
  - [FIX] Add template event handler for recenttopics_mchat_side in index_body_markforums_after.html event. 

- 2.2.2 (16/09/2017)
  - [FIX] Corrected confusing ACP labels regarding the number of pages.
  - [FIX] Fixed the number of pages limitation option in ACP. Now the number of recent topic pages can be limited. 
  - [FIX] Fixed the override the maximum number of pages shown ACP checkbox.
  - [FIX] Jump to page fix. If a user selects a page outside the range, the last page will be displayed.
  - [FIX] removed double pagination in horizontal view
  - [FIX] u_rt_view, rt_unreadonly was still present in database after full uninstall.
  - [FIX] Fixed an error in PostgreSQL/Mssql installation (usage of from_unixtime) 
  - [NEW] Added placeholder feature if no new Topics.
  - [NEW] Added support for pbWoW 3.2 style
  - [NEW] Added Paypal donation link 
  - [NEW] Added version checking in ACP page

- 2.2.1 (14/06/2017)
  - [UPD] add paging limit

- 2.2.0 (22/01/2017)
  - [UPD] Update for phpbb 3.2.0 
  - [FIX] #20 Adjust 3.2 pagination css 

- 2.1.3 (22/01/2017)
  - [UPD] new language files ar/es/es-x-tu/pt/ru
  - [FIX] fixed placement post status-icons. parent li should be relative.  
  - [FIX] #17 #18 fixed permission issues
  - [NEW] Added a user preference resetbutton in ACP.
  - [CHG] 2.1.3 migration resets all positions to top.  
  - [NEW] add support for pre:fixed extension from imkingdavid. using a new event paybas.recenttopics.modify_topictitle, and fallback if no listener was found
  
- 2.1.2 (22/10/2016)
  - [FIX] Permission u_rt_view changed to registered users
  - [FIX] Migration file Recent topics 2.0.0 fixed. as of 3.1.10, root path must exist in module.exists. see PHPBB3-14703 and commit https://github.com/phpbb/phpbb/commit/5eb493fa86
  - [NEW] Czech translation by @R3gi

- 2.1.1 (03/07/2016)
  - [FIX] sideview responsive css not working in prosilver
  - [CHG] merged small & wide html
  - [CHG] removed H2 from recent topics window header in prosilver  
  - [CHG] changed default recent topics location to the right side
     
- 2.1.0 (19/06/2016)
  - [NEW] alternative locations changed to 3-option dropdown to enable 3 display locations (top, bottom, right side) which depends on events, and isn’t hardcoded in the style. 
  - [NEW] Removed custom code for pbWoW & pbTech as all styles now follow the same standard.     
  - [CHG] ACP topic level changed to pulldown menu. 
  - [FIX] Other improvements and fixes.
  - [CHG] Feature release, so version number increased.
  - [CHG] Language added: Portuguese. 
  - [DEL] Languages I couldn't complete were removed. please submit your language packs.       
     
- 2.0.6 (12/03/2016)
  - [NEW] Croatian translation (Ancica) 
  - [NEW] Hungarian translation (aszilagyi)
  - [NEW] Estonian translation (phpBBeesti)
  - [NEW] Arabic translation (Alhitary)  
  - [NEW] Turkish translation (edipdincer)   
  - [NEW] Italian translation (Mauron)     
  - [FIX] Danish translation (jensz12)       
  - [UPD] French translation (Galixte)      
  - [FIX] #17 Mark topics as read when using the forum AJAX function, fixes issue (Kasimi)
  - [UPD] Japanese translation (momo-i)     
  - [FIX] #1 topic icons show also when logged out 
  - [NEW] compatible with Topic Prefix Extension from Stathis
