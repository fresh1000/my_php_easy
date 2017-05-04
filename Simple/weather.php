<?php
//<city id="33345" region="20544" head="1" type="3" country="Украина" part="" resort="0" climate="">Киев</city>
	header('Content-Type: text/html; charset=utf-8');
	$city_id = 33345;
	$city_id1 = 33135;
	$data_file = "http://export.yandex.ru/weather-ng/forecasts/$city_id.xml";
	$data_file1 = "http://export.yandex.ru/weather-ng/forecasts/$city_id1.xml";
	
	$xml = simplexml_load_file($data_file);
	$xml1 = simplexml_load_file($data_file1);
	
	$city = $xml->fact->station;
	$temp = $xml->fact->temperature;
	$pic = $xml->fact->image;
	$type_weather = $xml->fact->weather_type;

	$city1 = $xml1->fact->station;
	$temp1 = $xml1->fact->temperature;
	$pic1 = $xml1->fact->image;
	$type_weather1 = $xml1->fact->weather_type;
	
	if($temp>0){
		$temp = '+'.$temp;
	}

	if($temp1>0){
		$temp1 = '+'.$temp1;
	}

?>
<div id="weather">
<?php
echo ("<a href=\"http://pogoda.yandex.ru/$city_id/\">$city</a>");
echo ("<img src=\"http://img.yandex.net/i/wiz$pic.png\" alt=\"$type\" title=\"$type\">$temp<sup>o</sup>C")."<br />";

echo ("<a href=\"http://pogoda.yandex.ru/$city_id1/\">$city1</a>");
echo ("<img src=\"http://img.yandex.net/i/wiz$pic.png\" alt=\"$type\" title=\"$type\">$temp1<sup>o</sup>C");
?>
</div>