<?

$zip = $_GET['zip'];

$ch = curl_init("http://services.sunlightlabs.com/api/legislators.allForZip.json?apikey=__ENTER API KEY HERE__&zip=" . $zip);

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$return = curl_exec($ch);

if ( $return == "") { echo "Sorry, that zip code is invalid."; } else {echo $return;}

curl_close($ch);
?>