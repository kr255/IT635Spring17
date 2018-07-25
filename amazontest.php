<?php
require_once 'vendor/autoload.php';
require_once("studentDB.inc");
require_once("test1.php");

$param = $_GET['course_name'];
$db = new StudentAccess("Courses");
$mongo = new mongo();
$results = $db->selectcourse($param, null, null, null, "class_table");
$isbn = $results[0]['isbn'];
//echo $isbn;
// The region you are interested in
$endpoint = "webservices.amazon.com";

$uri = "/onca/xml";

$params = array(
    "Service" => "AWSECommerceService",
    "Operation" => "ItemSearch",
    "AWSAccessKeyId" => "",
    "AssociateTag" => "kr255-20",
    "SearchIndex" => "Books",
    "Keywords" => "$isbn",
    "ResponseGroup" => "Images,ItemAttributes,Offers"
);

// Set current timestamp if not set
if (!isset($params["Timestamp"])) {
    $params["Timestamp"] = gmdate('Y-m-d\TH:i:s\Z');
}

// Sort the parameters by key
ksort($params);

$pairs = array();

foreach ($params as $key => $value) {
    array_push($pairs, rawurlencode($key)."=".rawurlencode($value));
}

// Generate the canonical query
$canonical_query_string = join("&", $pairs);

// Generate the string to be signed
$string_to_sign = "GET\n".$endpoint."\n".$uri."\n".$canonical_query_string;

// Generate the signature required by the Product Advertising API
$signature = base64_encode(hash_hmac("sha256", $string_to_sign, $aws_secret_key, true));

// Generate the signed URL
$request_url = 'http://'.$endpoint.$uri.'?'.$canonical_query_string.'&Signature='.rawurlencode($signature);

//echo "Signed URL: \"".$request_url."\"";
$repos = file_get_contents($request_url);

$parsed_xml = simplexml_load_string($repos);
//print_r($request_url); //for the original xml
// foreach($parsed_xml->Items->Item->MediumImage->URL as $obj)
// {
//     echo "<img src=\"$obj\">";
//     //echo $obj . "\n";
// }

foreach($parsed_xml->Items->Item->MediumImage->URL as $obj => $val)
{
    echo "<br><img src=\"$val\"><br><br>";
    //echo $parsed_xml->Items->Item->DetailPageURL;
}

foreach($parsed_xml->Items->Item->ItemAttributes as $obj)
{
    echo "Title => " . $obj->Title . "<br>";
    echo "Edition => " . $obj->Edition . "<br>";
    echo "Publisher => " . $obj->Publisher . "<br>";
    
}
foreach($parsed_xml->Items->Item->OfferSummary as $obj)
{
    echo "Lowest New Price => " . $obj->LowestNewPrice->FormattedPrice . "<br>";
    echo "Lowest Used Price => " . $obj->LowestUsedPrice->FormattedPrice . "<br>";
}
foreach($parsed_xml->Items->Item->DetailPageURL as $obj)
{
    echo "<br><a href=\"$obj\">BUY</a><br><br>";
    //echo $parsed_xml->Items->Item->DetailPageURL;
}
echo "<br><br><fieldset> <legend> USED BOOK OFFERS </legend>";
echo "<table><th>ObjectID</th><th>ClassID</th><th>isbn</th><th>Name</th><th>Price</th><th>Contact Info</th>";
if(!empty($mongo->getonedata($isbn)))
{
    $mongo->getonedata($isbn);
}
echo "";
echo "<br>";
echo "</fieldset>";


//var_dump($parsed_xml->OperationRequest->Errors);
//var_dump($parsed_xml->Items->Item->MediumImage->URL);
//echo "<a href=\"$parsed_xml->Items->Item->MediumImage->URL\">";
//var_dump($parsed_xml->Items->Item->ItemAttributes->Author);
?>