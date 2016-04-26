/**
 * Created by Bielecki on 4/26/2016.
 */
$(document).ready(function(){
    //chose id to validate form
    $('#signup_form').validate({
        //set the error class to bootstrap class
        errorClass:"text-danger",
        //set the rules
        rules: {
            first_name:{required:true},
            last_name:{required:true},
            email:{required:true, email: true},
            password:{required:true, minlength:6},
            password_confirmation:{equalTo:'#password'}
        },
        //custom messages
        messages: {
            first_name: "Please enter your first name.",
            last_name: "Please enter your last name",
            email: {
                required: "Please enter a valid email address, it is required to log in to the site",
                email: "We don't recognize that as a valid email address, could you try again?"
            },
            password: {
                required: "Please enter a password",
                min: "Password must be at least 6 characters"
            },
            password_confirmation: "Passwords do not match"
        }
    });
});