<?php
//date_default_timezone_set('Prishtina,XK');
//https://home.openweathermap.org/api_keys
 $apiKey="77e602173d06fc1025e27cbb4f23b0c9";
 $cityId="786714";
 $googleApiUrl="https://api.openweathermap.org/data/2.5/weather?id=" .$cityId. "&lang=en&units=metrica&APPID=" .$apiKey;
 $ch=curl_init();
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_VERBOSE, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 $response=curl_exec($ch);
	curl_close($ch);
 $data=json_decode($response);
	// echo "<pre>";
   // print_r($data); 
 $currentTime=time();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Weather Api</title>
	<link rel="stylesheet" href="webapi.css">
</head>
<body>
	<div class="report-container">
	  <h2><?php $data->name; ?>Weather Status in Prishtina/Kosova</h2>
	    <div class="time">
			<div><?php echo date("l g:i a", $currentTime); ?></div>
			<div><?php echo date("jS F, Y", $currentTime); ?></div>
			<div><?php echo ucwords($data->weather[0]->description);?></div>
    	</div>
    	<div class="weather-forecast">
    	   <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"  class="weather-icon"/>
		   <?php echo "Max temperature: ".($data->main->temp_max - 273.15);?>&deg;C<span class="min-temperature"><?php echo "<br>Min Temperature: ".($data->main->temp_min - 273.15);?> &deg;C</span>
        </div>
        <div class="time">
    		<div>Humidity: <?php echo $data->main->humidity;?>%</div>
    		<div>Wind: <?php echo $data->wind->speed;?>km/h</div>
    	</div>
    </div>
    <div>
    	<button id="back" onclick="history.back()"> Go back </button>
    	</div>
</body>
</html>

