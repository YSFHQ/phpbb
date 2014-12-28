# phpBB Board Announcements Extension

This is the repository for the development of the phpBB Board Announcements Extension.

[![Build Status](https://travis-ci.org/phpbb-extensions/boardannouncements.png)](https://travis-ci.org/phpbb-extensions/boardannouncements)

## Quick Install
You can install this on the latest release of phpBB 3.1 by following the steps below:

1. [Download the latest release](https://github.com/phpbb-extensions/boardannouncements/releases).
2. Unzip the downloaded release, and change the name of the folder to `boardannouncements`.
3. In the `ext` directory of your phpBB board, create a new directory named `phpbb` (if it does not already exist).
4. Copy the `boardannouncements` directory to `phpBB/ext/phpbb/` (if done correctly, you'll have the main composer JSON file at (your forum root)/ext/phpbb/boardannouncements/composer.json).
5. Navigate in the ACP to `Customise -> Manage extensions`.
6. Look for `Board Announcements` under the Disabled Extensions list, and click its `Enable` link.
7. Set up and configure Board Announcements by navigating in the ACP to `Extensions` -> `Board Announcements`.

## Uninstall

1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Board Announcements` under the Enabled Extensions list, and click its `Disable` link.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/phpbb/boardannouncements` directory.

## Support

* **Important: Only official release versions validated by the phpBB Extensions Team should be installed on a live forum. Pre-release (beta, RC) versions downloaded from this repository are only to be used for testing on offline/development forums and are not officially supported.**
* Report bugs and other issues to our [Issue Tracker](https://github.com/phpbb-extensions/boardannouncements/issues).
* Support requests should be posted and discussed in the [Board Announcements topic at phpBB.com](https://www.phpbb.com/customise/db/extension/boardannouncements/support).

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)
