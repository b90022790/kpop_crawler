# KPOP_CRAWLER

## Description

A php project that can get latest **K-POP song's Hyperlink** on YOUTUBE.

You can quickly listen to the latest K-POP songs.

## Dependencies

- php

- composer

- phantomjs


## Source


A list which sorted by [愛低音的國王](%5Bhttps://www.youtube.com/channel/UC21nz3_MesPLqtDqwdvnoxA%5D(https://www.youtube.com/channel/UC21nz3_MesPLqtDqwdvnoxA)) ：  [2019 韓語最新單曲](https://www.youtube.com/watch?v=5CcVngv5ALw&list=PLsyOSbh5bs167CNITCeKwDG-1OofQcINS).

All songs are from YOUTUBE.



## Usage


Clone this repository

```
git clone https://github.com/snsd0805/kpop_crawler.git
```

Install composer dependencies

```
composer install
```

Install Phantomjs

[https://phantomjs.org/download.html](https://phantomjs.org/download.html)



Change **lib/config.php**

change CONFIG::**$PATH** to your <u>correct path</u>

```
class CONFIG
{
    public static $PATH="/usr/bin/phantomjs";   //change $PATH to your correct path.
    public static $URL="https://www.youtube.com/playlist?list=PLsyOSbh5bs167CNITCeKwDG-1OofQcINS";  //You don't need to change it
}
```

Then, open your browser to connect to `localhost/kpop_crawler`OR type `php index.php`in your terminal.

## Future


Here is something I will do in the future.

I will use MySQL/MariaDB to do these projects.

- [ ] make a **DONE** list to note which song you have listened

- [ ] make a **LIKED** list to note which song you loved

- [ ] Get **more information** about the song

- [ ] Linked to **Spotify** , find LIKED list's songs and add them into **Spotify's playlist**(While it is difficult for me)

## HAVE FUN!!!
