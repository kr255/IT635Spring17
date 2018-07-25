#!/usr/bin/php
<?php
function scrapebetween($data, $start, $end)
{
    $data = stristr($data, $start); // scrapes from the $start to EOF
    $data = substr($data, strlen($start)); //
    $stop = stripos($data, $end);
    $data = substr($data, 0, $stop);
    return $data;
}
function curlGET($url)
{
 
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
//$scraped_data = scrapebetween($packpage, "<table class=\"sc_courselist\" width=\"100%\">", "</table>");

//echo $scraped_data;
//echo $packpage;

function returnXPathObj($item)
{
    $xmlpagedoc = new DomDocument();
    //$xmlpagedoc->validateOnParse = false;
    @$xmlpagedoc->loadHTML($item);
    $xmlpageXpath = new DOMXPath($xmlpagedoc);
    return $xmlpageXpath;
}
//$packpage = curlGET('http://catalog.njit.edu/graduate/computing-sciences/information-technology/administration-security-ms/index.html');

$xmlDoc = new DomDocument();
@$xmlDoc->loadHTML(curlGET("http://catalog.njit.edu/graduate/computing-sciences/information-technology/administration-security-ms/index.html"));
//print_r($xmlDoc->saveXML());
$tables = $xmlDoc->getElementsByTagName('table');

$children = $tables->item(0);
foreach($children->childNodes as $child)
{
    var_dump( $child);
}

/*
$packpageXpath = returnXPathObj($packpage);
//print_r($packpageXpath);

$table = $packpageXpath->query('//table');

$newarr = array();

echo $table->item(0)->nodeValue . PHP_EOL;*/


?>