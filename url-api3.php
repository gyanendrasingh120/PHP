 <?php
$longUrl = 'http://www.gyanendrasingh.com';

// Get API key from : http://code.google.com/apis/console/
$apiKey = 'AIzaSyA8u1UUhdCMTS6yM8HL4XnNVpvWgiZIcO0';

$postData = array('longUrl' => $longUrl, 'key' => $apiKey);
 $jsonData = json_encode($postData);

  $curlObj = curl_init();

curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url');
curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curlObj, CURLOPT_HEADER, 0);
curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
curl_setopt($curlObj, CURLOPT_POST, 1);
curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);

  echo $response = curl_exec($curlObj);

// Change the response json string to object
 $json = json_decode($response);
echo 'Shortened URL is: '.$json->id;
curl_close($curlObj);


?>