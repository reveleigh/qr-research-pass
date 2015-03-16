<?php
function getTitle($Url){
	
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $Url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   // some websites like Facebook need a user agent to be set.
   curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36');
   $html = curl_exec($ch);
   curl_close($ch);

   $dom  = new DOMDocument;
   @$dom->loadHTML($html);

   $title = $dom->getElementsByTagName('title')->item('0')->nodeValue;
   return $title;	
	
}

function getFavicon($host) {
	$file_headers = @get_headers($host);
	if($file_headers[0] == 'HTTP/1.0 200 OK' or 'HTTP/1.1 200 OK') {
	//Return favicon 
    return $host;
	
	}
	else {
	//place default image
    return  "globe.jpg";
}	
	
	
}

function ridHash($string) {
    $entities = array('#', '&');
    $replacements = array('ppp', 'zzz');
    return str_replace($entities, $replacements, $string);
}

function deRidHash($string) {
    $entities = array('ppp', ' ', 'zzz');
    $replacements = array('#', '%20', '&');
    return str_replace($entities, $replacements, $string);
}





?>