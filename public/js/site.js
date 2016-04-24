/**
 * Created by Bielecki on 4/12/2016.
 */

/*
Code from http://totalprogus.blogspot.com.br/2013/12/bootstrap-add-active-class-to-li.html to add active to li for bootstrap
 */

$(document).ready(function() {
    $('a[href="' + this.location.pathname + '"]').parent().addClass('active');
    console.log(this.location.pathname);

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
            default:
                w_class = '';
                break;
        }
        //add new class to w_icon div
        $("#w_icon").addClass(w_class);
    }
});


