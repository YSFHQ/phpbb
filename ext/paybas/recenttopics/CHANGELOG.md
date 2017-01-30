
### Changelog

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
