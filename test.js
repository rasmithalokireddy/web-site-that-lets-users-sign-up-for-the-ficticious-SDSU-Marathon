
function myMap()
{
  myCenter=new google.maps.LatLng(32.775116, -117.070503);
  var mapOptions= {
    center:myCenter,
    zoom:15, scrollwheel: true, draggable: true,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}







function isEmpty(fieldValue) {
        return $.trim(fieldValue).length == 0;    
        } 
        
    function isValidState(state) {                                
        var stateList = new Array("AK","AL","AR","AZ","CA","CO","CT","DC",
        "DE","FL","GA","GU","HI","IA","ID","IL","IN","KS","KY","LA","MA",
        "MD","ME","MH","MI","MN","MO","MS","MT","NC","ND","NE","NH","NJ",
        "NM","NV","NY","OH","OK","OR","PA","PR","RI","SC","SD","TN","TX",
        "UT","VA","VT","WA","WI","WV","WY");
        for(var i=0; i < stateList.length; i++) 
            if(stateList[i] == $.trim(state))
                return true;
        return false;
        }  
        
       
    function isValidEmail(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
        } 
    
    function isValidDate(dob) {
        var numbers = new RegExp(/^[0-3]?[0-9]\/[01]?[0-9]\/[12][90][0-9][0-9]$/);
        return numbers.test(dob);
        
}

    function validatePicture() {


        var fileName = $('input[name="user_pic"]')[0].files[0].name;
        var fileSize = $('input[name="user_pic"]')[0].files[0].size;

       

        if (fileSize / 1000 > 1000) {
            $('#message_line').text("File is too big, 1 MB max");
            handler[12].focus();
            return false;
        }



        return true;
    }


    function dup_handler(response) {
    if(response == "dup"){
        $('#message_line').text("This user already exists");
    }
    else if(response == "OK") {
        $('form').serialize();
        $('form').submit();
        return true;
        }
    else{
        $('#message_line').text("DB error");
        return false;
    }
    }
                   
    $(document).ready( function() {
    // var handle = $('input[name="user_pic"]');
    var size;
    // $('input[name="user_pic"]').on('change',function(e) {
    // size = this.files[0].size;
    // });
    var errorStatusHandle = $('#message_line');
    var handler = new Array(13);
    handler[0] = $('[name="firstname"]');
    handler[1] = $('[name="lastname"]');
    handler[2] = $('[name="address1"]');
    handler[3] = $('[name="city"]');
    handler[4] = $('[name="state"]');
    handler[5] = $('[name="zip"]');
   
    handler[6] = $('[name="phone"]');
    handler[7] = $('[name="email"]');
    handler[8] = $('input[name="gender"]');
    
    handler[9] = $('[name="dob"]');
    handler[10] = $('input[name="experiencelevel"]');
    handler[11] = $('input[name="category"]');
    handler[12] = $('input[name="user_pic"]');
    
    function isValidData() {
        
        if(isEmpty(handler[0].val())) {
            handler[0].addClass("error");
            errorStatusHandle.text("Please enter your first name");
            handler[0].focus();
            return false;
            }
        if(isEmpty(handler[1].val())) {
            handler[1].addClass("error");
            errorStatusHandle.text("Please enter your last name");
            handler[1].focus();            
            return false;
            }
        if(isEmpty($('[name="gender"]:checked').val())) {
            errorStatusHandle.text("Please select a gender");      
            return false;
            }
        if(isEmpty($('[name="experiencelevel"]:checked').val())) {
            errorStatusHandle.text("Please select an experience level");           
            return false;
            } 
        if(isEmpty($('[name="category"]:checked').val())) {
            errorStatusHandle.text("Please select a category");        
            return false;
            }      
        if(isEmpty(handler[2].val())) {
            handler[2].addClass("error");
            errorStatusHandle.text("Please enter your address");
            handler[2].focus();            
            return false;
            }
        if(isEmpty(handler[6].val())) {
            handler[6].addClass("error");
            errorStatusHandle.text("Please enter your phone number");
            handler[6].focus();            
            return false;
            }            
        if(!$.isNumeric(handler[6].val())) {
            handler[6].addClass("error");
            errorStatusHandle.text("The phone number appears to be invalid, "+
            "numbers only please. ");
            handler[6].focus();            
            return false;
            }
        if(handler[6].val().length != 10) {
            handler[6].addClass("error");
            errorStatusHandle.text("The phone number must have exactly ten digits")
            handler[6].focus();            
            return false;
            }  
        if(isEmpty(handler[7].val())) {
            handler[7].addClass("error");
            errorStatusHandle.text("Please enter your email address");
            handler[7].focus();            
            return false;
            }            
        if(!isValidEmail(handler[7].val())) {
            handler[7].addClass("error");
            errorStatusHandle.text("The email address appears to be invalid");           
            return false;
            }
        if(isEmpty(handler[3].val())) {
            handler[3].addClass("error");
            errorStatusHandle.text("Please enter your city");
            handler[3].focus();            
            return false;
            }
        if(isEmpty(handler[4].val())) {
            handler[4].addClass("error");
            errorStatusHandle.text("Please enter your state");
            handler[4].focus();            
            return false;
            }
        if(!isValidState(handler[4].val())) {
            handler[4].addClass("error");
            errorStatusHandle.text("The state appears to be invalid, "+
            "please use the two letter state abbreviation");
            handler[4].focus();            
            return false;
            }
        if(isEmpty(handler[5].val())) {
            handler[5].addClass("error");
            errorStatusHandle.text("Please enter your zip code");
            handler[5].focus();            
            return false;
            }
        if(!$.isNumeric(handler[5].val())) {
            handler[5].addClass("error");
            errorStatusHandle.text("The zip code appears to be invalid, "+
            "numbers only please. ");
            handler[5].focus();            
            return false;
            }
        if(handler[5].val().length != 5) {
            handler[5].addClass("error");
            errorStatusHandle.text("The zip code must have exactly five digits")
            handler[5].focus();            
            return false;
            }
    
               
    
     if(!isValidDate(handler[9].val())) {
        handler[9].addClass("error");
            errorStatusHandle.text("Please enter a valid date");           
            return false;
            }
    if (handler[12].val() === '') {
            handler[12].addClass("error");
            errorStatusHandle.text("Please select a file");
            handler[12].focus();
            return false;
        }
    else if (!validatePicture()) {
            handler[12].addClass("error");
            errorStatusHandle.text("Please select a valid file of max 1MB");
            return false;
        }        
            return true;
            }   

   handler[0].focus();
   
    handler[0].on('blur', function() {
        if(isEmpty(handler[0].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });
    handler[1].on('blur', function() {
        if(isEmpty(handler[1].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });
    handler[2].on('blur', function() {
        if(isEmpty(handler[2].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });
    handler[3].on('blur', function() {
        if(isEmpty(handler[3].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });
    handler[4].on('blur', function() {
        if(isEmpty(handler[4].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });    
    handler[5].on('blur', function() {
        if(handler[5].val().length != 5)
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });  
  
    handler[7].on('blur', function() {
        if(isEmpty(handler[7].val()))
            return;
        if(isValidEmail(handler[7].val())) {
            $(this).removeClass("error");
            errorStatusHandle.text("");
            }
        });        
      
   
    handler[4].on('keyup', function() {
        handler[4].val(handler[4].val().toUpperCase());
        });
        
  
   
    $(':submit').on('click', function(e) {
        for(var i=0; i < 13; i++)
         handler[i].removeClass("error");
        errorStatusHandle.text("");
        var isValidA = isValidData();
        

      if(isValidA){
        e.preventDefault();
        var url = "Check_duplicates.php";
        var email = $('input:text[name=email]').val();
        var phone = $('input:text[name=phone]').val();
        url += "?email="+email+"&phone=" + phone;
        $.get(url, dup_handler);
        }
       return isValidA;
        });
        
    $(':reset').on('click', function() {
        for(var i=0; i < 13; i++)
            handler[i].removeClass("error");
        errorStatusHandle.text("");
        });                                       
});


