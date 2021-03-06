/**
 * Created by Bielecki on 4/12/2016.
 */

/*
Code from http://totalprogus.blogspot.com.br/2013/12/bootstrap-add-active-class-to-li.html to add active to li for bootstrap
 */

//modified iamhere code. We have to get the body classes so we can handle dropdowns
$(document).ready(function() {
    //nav active
    var bodyClasses = document.getElementsByTagName('body')[0].classList;
    for(var i= 0; i<bodyClasses.length; i++){
        var active = document.getElementById(bodyClasses[i]);
        if(active){
            active.classList.add('active');
        }
    }

    //adds icon to weather report
    if($("#w_precip")){
        //declare variable
        var weather;
        //check if there is precip, if not set weather to cloud cover
        if(($("#w_precip").html())=='no'){
            weather = $("#w_clouds").html();
        }else{
            weather = $("#w_precip").html();
        }
        //declare variable for weather class
        var w_class;
        //set w_class depending on weather
        switch (weather){
            case "clear sky":
                w_class = 'wi-day-sunny';
                break;
            case "rain":
                w_class = 'wi-rain';
                break;
            case "overcast clouds":
                w_class = 'wi-cloudy';
                break;
            case "broken clouds":
                w_class = 'wi-cloud';
                break;
            case "few clouds":
                w_class = 'wi-day-cloudy-high';
                break;
            case "scattered clouds":
                w_class = 'wi-day-cloudy-high';
                break;
            default:
                w_class = 'wi-na';
                break;
        }
        //add new class to w_icon div
        $("#w_icon").addClass(w_class);
    }
});


