<?php
class bitly {
    /* make a URL small */
  function shorten_url($url) {
    $login = Configure::read('bitly.login');
    $appkey = Configure::read('bitly.key');
    $format = 'xml';
    $version = '2.0.1';

    //create the URL
    $bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$login.'&apiKey='.$appkey.'&format='.$format;

    //get the url
    //could also use cURL here
    $response = file_get_contents($bitly);

    //parse depending on desired format
    if(strtolower($format) == 'json')
    {
      $json = @json_decode($response,true);
      return $json['results'][$url]['shortUrl'];
    }
    else //xml
    {
      $xml = simplexml_load_string($response);
      return 'http://bit.ly/'.$xml->results->nodeKeyVal->hash;
    }
  }
}