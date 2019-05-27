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

# Credits
Layout was prepared by [PixelDuck](http://nyssa.me).

# Support
If you want to consider donation, please visit [this site](http://luki.net.pl/donate.html).
