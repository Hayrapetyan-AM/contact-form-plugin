$(document).ready(function(){               // when the html document is ready

$("#contactMe").click(function() {          // when contact me button is clicked 


 let email = $("#email").val().trim();      // getting data from email input
 let text = $("#text").val().trim();        // geting data from textarea input
 let error = false;                         // creating error variable

validate(email, text);                      // passing email and text as an arguments to our validate function, see 35th line

if (error == false)                         // if error variable is still false
{
        $.ajax({                                    // opening ajax query
     url: 'contactMe.php',                          // url - our php script
     type: 'POST',                                  // passing data by post
     cache: false,                                  // no cache
     data: {'email': email, 'text': text},          // passing our email and text variables
     dataType: 'text',                              // mensioning that we passing simple text
     beforeSend: function(){                        // before ajax query is send 
         $("#danger").prop("hidden", true);         // hidding error section
         $("#contactMe").prop("disabled", true);    // disabling our contact form button
     },
     success: function(data){                       // when query is successfully sended                        
         $("#contactMe").prop("disabled", false);   // activating our contact form button
         $("#contactForm").trigger("reset");        // reseting our contact form, cs we need it to be clear after clicking the button
         $("#success").prop("hidden", false);       // showing our success div
         $("#success").text("success!!");           // showing success message 
     }
    });
}


    function validate(v_email, v_text)                                                          // creating validate function, that have two arguments v_email and v_text
    {
            if (v_email.length < 10 || v_email.length > 50)                                     // if email length is less than 10 or more than 50 symbols
        {   
            $("#success").prop("hidden", true);                                                 // hidding our success div
            $("#danger").prop("hidden", false);                                                 // showing our error div
            $("#danger").text("wrong email adress :(" );                                        // showing our error message
            error = true;                                                                       // setting our error variable true
        }

            if (v_text.length < 10 || v_text.length > 500)                                      // if text length is less than 10 or mroe than 500 symbols
        {   
            $("#success").prop("hidden", true);                                                 // hidding our success div
            $("#danger").prop("hidden", false);                                                 // showing our error div
            $("#danger").text("text have to be more than 10 symbols and less than 500 :(" );    // showing our error message
            error = true;                                                                       // setting our error variable true
        }

    }


});



});