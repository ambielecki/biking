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
            time:{required:true, time12h:true}
        },
        //custom messages
        messages: {
            date: "Please select a date.",
            time: {
                required: "Please select a time.",
                time12h: "Time must be in the format 2:00 PM"
            }
        }
    });
});
