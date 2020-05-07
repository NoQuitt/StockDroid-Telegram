<?php

if($bot->msg){
	$key = '';  //inserire key di api.tenor.com
	$urlArticles = file_get_contents('https://api.tenor.com/v1/search?q=gerryscotti&key='.$key.'&limit=8');
    $urlArticlesArray = json_decode($urlArticles, true);
	$next = $urlArticlesArray['next'];
	$l = rand(1, $next-1);
    $results = $urlArticlesArray['results'];
	$tan = $results["$l"];
    $media = $tan['media'];
	$tank = $media['0'];
	$gif = $tank['gif'];
	$url = $gif['url'];
	$bot->sendVideo($chatID, $url, "Bot creato da @NoQuitt per StockDroid.");
}