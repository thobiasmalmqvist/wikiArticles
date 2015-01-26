<?php

$tmpUrl = $_GET['selval'];
$baseUrl = "http://sv.wikipedia.org/wiki/";
$finUrl = $baseUrl.$tmpUrl;

echo $tmpUrl;

include ('getTitle.php');

$html = file_get_contents_curl($finUrl);

$doc = new DOMDocument();
@$doc->loadHTML($html);
$nodes = $doc->getElementsByTagName('p');

$bodyList = array();

foreach ($nodes as $node){
	$body = $node->textContent;
	$bodyList[] = $body;
}

?>
