<?php
function validate_data($params) {
    $msg = "";
    if(strlen($params[0]) == 0)
        $msg .= "Please enter the firstname<br />";
    if(strlen($params[1]) == 0)
        $msg .= "Please enter the lastname<br />";
    if(strlen($params[3]) == 0)
        $msg .= "Please enter the gender<br />"; 
    if(strlen($params[4]) == 0)
        $msg .= "Please enter the experiencelevel<br />";
    if(strlen($params[5]) == 0)
        $msg .= "Please enter the category<br />";
    if(strlen($params[6]) == 0)
        $msg .= "Please enter the address1<br />"; 
    if(strlen($params[8]) == 0)
        $msg .= "Please enter the phone<br />";
    elseif(!is_numeric($params[8])) 
        $msg .= "phone may contain only numeric digits<br />";
    if(strlen($params[9]) == 0)
        $msg .= "Please enter email<br />";
    elseif(!filter_var($params[9], FILTER_VALIDATE_EMAIL))
        $msg .= "Your email appears to be invalid<br/>";     
    if(strlen($params[10]) == 0)
        $msg .= "Please enter the city<br />"; 
    if(strlen($params[11]) == 0)
        $msg .= "Please enter the state<br />";                        
    if(strlen($params[12]) == 0)
        $msg .= "Please enter the zip<br />";
    elseif(!is_numeric($params[12])) 
        $msg .= "Zip may contain only numeric digits<br />";
    if(strlen($params[13]) == 0)
        $msg .= "Please enter the date of birth<br />";
    if(strlen($params[15]) == 0)
        $msg .= "Please upload user pic <br />";   
    if($msg) {
        write_form_error_page($msg);
        exit;
        }
    }
  
function write_form_error_page($msg) {
    write_header();
    echo "<h2>Sorry, an error occurred<br />",
    $msg,"</h2>";
    write_form();
    write_footer();
    }  
    
function write_form() {
    print <<<ENDBLOCK
    <fieldset>
        <legend>Personal Information</legend>
        <form name="personal_info" 
              action="process_request.php"
              method="post"
              enctype="multipart/form-data">
        <ul>
            
            <li><label for="firstname">First Name :<span>*</span></label>
                <input type="text" name="firstname"  value="$_POST[firstname]" id="firstname" size="25" autofocus /></li>                     
            <li><label for="lastname">Last Name :<span>*</span></label>
                <input type="text" name="lastname"  value="$_POST[lastname]" id="lastname" size="25" /></li> 
            <li><label for="mname">Middle Name :</label>
                <input type="text" name="mname"  value="$_POST[mname]" id="mname" size="25" /></li> 
            <li><label>Gender :<span>*</span></label>
                <label for="male">Male</label>
                <input type="radio" name="gender" value="$_POST[gender]" id="male">
                <label for="female">Female</label>
                <input type="radio" name="gender" value="$_POST[gender]" id="female">
                <label for="other">other</label>
                <input type="radio" name="gender" value="$_POST[gender]" id="other"></li>
            <li><label>Experience Level :<span>*</span></label>
                <label for="expert">Expert</label>
                <input type="radio" name="experiencelevel" value="$_POST[experiencelevel]" id="expert">
                <label for="experienced">Experienced</label>
                <input type="radio" name="experiencelevel" value="$_POST[experiencelevel]" id="experienced">
                <label for="novice">Novice</label>
                <input type="radio" name="experiencelevel" value="$_POST[experiencelevel]" id="novice"></li>
            <li><label>Category :<span>*</span></label>
                <label for="expert">Teen</label>
                <input type="radio" name="category" value="$_POST[category]" id="teen">
                <label for="expert">Adult</label>
                <input type="radio" name="category" value="$_POST[category]" id="adult">
                <label for="expert">Senior</label>
                <input type="radio" name="category" value="$_POST[category]" id="senior"></li>
            <li><label for="address1">Address Line 1 :<span>*</span></label>
                <input type="text" name="address1" value="$_POST[address1]" id="address1" size="55" /></li>  
            <li><label for="address2">Address Line 2 :</label>
                <input type="text" name="address2" value="$_POST[address2]" id="address2" size="55" /></li>
            <li><label for="phone">Phone :<span>*</span></label>
                <input type="text" name="phone" value="$_POST[phone]" id="phone" size="15" maxlength="10" /></li>
            <li><label for="email">Email :<span>*</span></label>
                <input type="text" name="email" value="$_POST[email]" id="email" size="32" /></li>  
            <li><label for="city">City :<span>*</span></label>
                <input type="text" name="city" value="$_POST[city]" id="city" size="25" /> 
                <label for="state">State :<span>*</span></label>
                <input type="text" name="state" value="$_POST[state]" id="state" size="7" />                     
                <label for="zip">Zip :</label>
                <input type="text" name="zip" value="$_POST[zip]" id="zip" size="10" maxlength="5" /></li>      
            <li><label for="dob"> Date of birth :<span>*</span></label>
                <input type="text" name="dob" value="$_POST[dob]" id="dob" size="15" maxlength="10" placeholder="MM/DD/YYYY"/></li>
            <li><label for="MedicalConditions">Medical Conditions :</label>
                <textarea name="MedicalConditions" value="$_POST[MedicalConditions]" cols="40" rows="4" id="medical"> </textarea></li>
            
            
            <li> <label for="user_pic">Upload your picture :<span>*</span></label>
                 <input type="file" name="user_pic" value="$_POST[user_pic]" id ="user_pic" accept="image/*"/>
        </ul>
        <div id=button_panel>  
            <input type="reset" value="Clear Data" class="button" />
            <input type="submit" value="Submit Data" id="submit_button" class="button" /> 
        </div>       
        </form>
        <div id="message_line">&nbsp;</div>
        </fieldset> 
ENDBLOCK;
}                        
?>   