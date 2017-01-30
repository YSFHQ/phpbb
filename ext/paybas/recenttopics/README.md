Recent Topics for phpBB 3.2
============

Extension for phpBB 3.2 to display recent topics.
Based on NV Recent Topics for phpBB 3.0, by Joas Schilling ([nickvergessen](https://github.com/nickvergessen))

#### Version
v2.2.0-RC3 (22-01-2017)
[![Build Status](https://api.travis-ci.org/Sajaki/RecentTopics.svg)](https://travis-ci.org/Sajaki/RecentTopics)

#### Support
- [Support forum] (http://www.avathar.be/bbdkp/viewforum.php?f=65)

#### Requirements
- phpBB 3.2.0

#### Features
- Adds a list of recent (or unread) topics to the index page.
- UCP permissions and settings so users can choose their own preferences to override ACP.
    
- ACP / UCP Options:
  - Screen location : Top, bottom or Right.
  - sort by topic start time, instead of last post time
  - only show unread topics
- ACP Options  
  - number of topics to show
  - max. number of pages
  - set minimum topic type level to display (normal/sticky/announcement/global)
  - exclusion of topics (by ID)
  - display parent forum name in the row
- Inherits all styling from regular "viewforum" templates
- compatible with "Pre:fixed" Extension from imkingdavid and “Topic Prefix“ Extension from Stathis. 
- Tested on:
  - prosilver

![Screenshot](screenshot.png)

#### Languages supported
- English, German, French, Dutch, Spanish, Italian, Portuguese, Swedish, Danish, Czech
  
### Installation
1. [Download the latest release](https://github.com/sajaki/RecentTopics/releases) and unzip it.
2. Copy the entire contents from the unzipped folder to `/ext/paybas/recenttopics/`.
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Find `Recent Topics` under "Disabled Extensions" and click `Enable`.

#### Uninstallation
1. Navigate in the ACP to `Customise -> Manage extensions`.
2. Click the `Disable` link for `Recent Topics`.
3. To permanently uninstall, click `Delete Data`, then delete the `recenttopics` folder from `/ext/paybas/`.

### License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

© 2015 - PayBas
© 2017 - Sajaki

