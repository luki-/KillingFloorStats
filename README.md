Copyright (C) 2012, Luki
http://luki.net.pl | luki at luki.net.pl
Original layout by [PixelDuck](http://nyssa.me), a member of [Sykosis](http://sykosis.co.uk) clan, modified by [Luki](http://luki.net.pl).

This script is distributed under the GNU General Public License version 3.
Please do not remove link to the original author's website and above informations about author/contributors.

# Installation
## Server Requirements
  * PHP 5 with *cURL* extension
  * (optional) MySQL database for caching purposes

## SQL query for cache table
```
CREATE TABLE kfstats_cache (
  id VARCHAR(255) NOT NULL PRIMARY KEY,
  data_stats LONGTEXT NOT NULL,
  lastupdate INT(11) NOT NULL
) ENGINE=InnoDB CHARACTER SET utf8 COLLATE utf8_unicode_ci;
```

## Setup
Open kf.php and read the comments ;)

# Support
If you want to consider donation, please visit [this site](http://luki.net.pl/donate.html).