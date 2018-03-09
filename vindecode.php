<?php
$apiPrefix = "https://api.vindecoder.eu/2.0";
$apikey = "7faaef90b983";   // Your API key
$secretkey = "a3396cb5ac";  // Your secret key
//$vin = "WAUZZZ4L0BD004645"; // Requested VIN
$vin = ($_SERVER['VIN']) ? $_SERVER['VIN'] : "WAUZZZ4L0BD004645"; // Requested VIN
echo "result for VIN: ".$vin;


if($_SERVER['GET']==1) {

  $id = $vin;
  $controlsum = substr(sha1("{$id}|{$apikey}|{$secretkey}"), 0, 10);
  $data = file_get_contents("{$apiPrefix}/{$apikey}/{$controlsum}/decode/{$vin}.json", false);

} else {

  $id = "info-".$vin;
  $controlsum = substr(sha1("{$id}|{$apikey}|{$secretkey}"), 0, 10);
  $data = file_get_contents("{$apiPrefix}/{$apikey}/{$controlsum}/decode/info/{$vin}.json", false);

}

$result = json_decode($data, true);

echo "";
echo print_r($result["decode"]);
//echo print_r($result,true);
echo "";


?>
