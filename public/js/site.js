/**
 * Created by Bielecki on 4/12/2016.
 */

/*
Code from http://totalprogus.blogspot.com.br/2013/12/bootstrap-add-active-class-to-li.html to add active to li for bootstrap
 */

$(document).ready(function() {
    $('a[href="' + this.location.pathname + '"]').parent().addClass('active');
    console.log(this.location.pathname);
});
