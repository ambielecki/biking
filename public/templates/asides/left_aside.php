<?php

/*I am using the OpenWeatherMaps API to get data using the cmfcmf/OpenWeatherMap-PHP-Api package located at
https://github.com/cmfcmf/OpenWeatherMap-PHP-Api, the package is installed with Composer
*/
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;

//config locally
if($_SERVER['SERVER_NAME'] == 'biking.loc'){
    //autoload for the weather api
    require('/xampp/htdocs/school/biking/vendor/autoload.php');
    //my config file holding the API Key
    include('/xampp/htdocs/school/biking/dbconfig.php');
//production config
}else{
    require('/var/www/html/biking/vendor/autoload.php');
    include('/var/www/html/biking/dbconfig.php');
}

$lang = 'en';
$units = 'imperial';
$city = '4930956';

$owm = new OpenWeatherMap($OWMAPIKey);
//from the API example
try {
    $weather = $owm->getWeather($city, $units, $lang);
} catch(OWMException $e) {
    echo 'OpenWeatherMap exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
} catch(\Exception $e) {
    echo 'General exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
}
?>
<div class="col-sm-2 hidden-sm hidden-xs">
    <aside id="aside_left">
        <div class="row">
            <div class="col-sm-12">
                <h4>Current Boston Weather</h4>
            </div>
        </div><br>
        <?php if($weather){?>
            <div class="row">
                <i id="w_icon" class="col-sm-12 text-center wi"></i>
            </div><br>
            <div class="row">
                <div class="col-sm-6">Temperature: </div>
                <div class="col-sm-6" id="w_temp"><?php echo $weather->temperature; ?></div>
            </div>
            <div class="row">
                <div class="col-sm-6">Wind Speed:  </div>
                <div class="col-sm-6" id="w_wind_speed"><?php echo $weather->wind->speed; ?></div>
            </div>
            <div class="row">
                <div class="col-sm-6">Direction: </div>
                <div class="col-sm-6" id="w_wind_direction"><?php echo $weather->wind->direction->getDescription(); ?></div>
            </div>
            <div class="row">
                <div class="col-sm-6">Cloud Cover: </div>
                <div class="col-sm-6" id="w_clouds"><?php echo $weather->clouds->getDescription(); ?></div>
            </div>
            <div class="row">
                <div class="col-sm-6">Precipitation: </div>
                <div class="col-sm-6" id="w_precip"><?php echo $weather->precipitation->getDescription(); ?></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <span class="attribution">Data from <a href="http://openweathermap.org/">OpenWeatherMap</a> via <a href="https://github.com/cmfcmf/OpenWeatherMap-PHP-Api"> OpenWeatherMap-PHP-Api</a></span>
                </div>
            </div>
        <?php }else { echo "Weather currently unavailable"; } ?>
    </aside>
</div>