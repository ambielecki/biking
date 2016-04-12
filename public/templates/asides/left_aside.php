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
        <p>
            <?php echo $weather->temperature ?>
            <br>
            <?php echo $weather->wind->speed ?>
            <br>
            <?php echo $weather->wind->direction->getDescription() ?>
            <br>
            <?php echo 'Clouds: '.$weather->clouds->getDescription() ?>
            <br>
            <?php echo $weather->precipitation->getDescription() ?>
        </p>
    </aside>
</div>