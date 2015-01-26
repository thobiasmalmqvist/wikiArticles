<?php
function file_get_contents_curl($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
$titleList = array();

for ($i=0; $i<10; $i++) {
$html = file_get_contents_curl("http://sv.wikipedia.org/wiki/Special:Slumpsida");

	$doc = new DOMDocument();
	@$doc->loadHTML($html);
	$nodes = $doc->getElementsByTagName('h1');
	$title = $nodes->item(0)->nodeValue;
	
	array_push($titleList, $title);
	
}

?>
