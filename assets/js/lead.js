 $(document).ready(function() {

     $("#NTV").focus();

     var error_message = "Confirm or Unconfirm";

      $("#NTV").blur(function() {
          if ($(this).val() != 'N/A')
          {
              $("#NTVdate").removeAttr("disabled");    
              $("#message").html("");      
          }
     else {              
              $("#NTVdate").attr("disabled", "disabled");  
              $("#message").append(error_message);      
          }         

      });
 };​
