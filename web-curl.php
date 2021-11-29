<?php

$curl = curl_init();

//$search_string = "pc video games 2016";
$url = "https://nobowa.com/major-chicken-diseases/";

curl_setopt($curl, CURLOPT_URL, $url) ;
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);
//preg_match_all("class=_lwptoc_items-visible>", $result, $matches);
//$items = array_unique($matches[1]);
//print_r($items);
echo $result;

curl_close($curl )

?>