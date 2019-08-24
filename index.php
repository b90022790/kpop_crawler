<?php
require_once("vendor/autoload.php");
ini_set('display_errors',0);

echo "<meta charset='utf-8'>";
$action=new Crawler(CONFIG::$URL);
$output=$action->curl_url();
$dom = new DOMDocument();
@$dom->loadHTML(mb_convert_encoding($output, 'HTML-ENTITIES', 'UTF-8'));

$ps=$dom->getElementsByTagName("a");
foreach($ps as $row){
    if($row->getAttribute("class")=="pl-video-title-link yt-uix-tile-link yt-uix-sessionlink  spf-link "){
        $web_url="https://www.youtube.com";
        $web_url.=$row->getAttribute("href");
        echo "<a href='$web_url'>".$row->nodeValue."</a><br><br>";
    }

}
?>
