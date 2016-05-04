/**
 * Created by Bielecki on 4/24/2016.
 */
$(document).ready(function() {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    $('#add_meetup_form').validate({
        //set the error class to bootstrap class
        errorClass:"text-custom",
        //set the rules
        rules: {
            date:{required:true},
            time:{required:true},
        },
        //custom messages
        messages: {
            date: "Please select a date.",
            time: "Please select a time."
        }
    });
});
