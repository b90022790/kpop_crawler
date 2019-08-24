<?php
require_once("vendor/autoload.php");
use JonnyW\PhantomJs\Client;

class Crawler
{
    private $url;

    public function __construct($url){
        $this->url=$url;
    }
/*
*
* use phantomjs to curl YOUTUBE'S html.
* And using phantomjs is that we should convert JS to HTML
*
*/
    public function curl_url(){
        $client = Client::getInstance();
        $client->getEngine()->setPath(CONFIG::$PATH);
        $client->isLazy();
        $request  = $client->getMessageFactory()->createRequest();
        $request->setTimeout(50000);
        $response = $client->getMessageFactory()->createResponse();
        $request->setMethod('GET');
        $request->setUrl($this->url);
        $client->send($request, $response);
        if($response->getStatus() === 200) {
            return $response->getContent();
        }else{
            return false;
        }
    }
}
?>
