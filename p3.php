<?php
$UPLOAD_DIR = './css/sollu/';
    $COMPUTER_DIR = '/home/jadrn032/public_html/proj3/css/sollu/';
    $fname = $_FILES['user_pic']['name'];
    $exist = $_POST['phone'];
    

    if(file_exists("$UPLOAD_DIR".$exist))  {
        echo "<b>Error, the file $fname already exists on the server</b><br />\n";
        }
    elseif($_FILES['user_pic']['error'] > 0) {
        $err = $_FILES['user_pic']['error'];    
        echo "Error Code: $err ";
    if($err == 1)
        echo "The file was too big to upload, the limit is 2MB<br />";
        } 
    // elseif(exif_imagetype($_FILES['file']['tmp_name']) != IMAGETYPE_JPEG) {
    //     echo "ERROR, not a jpg file<br />";   
    //     }
## file is valid, copy from /tmp to your directory.        
    else { 
        $temp = explode(".", $_FILES["user_pic"]["name"]);
        $newfilename = $_POST['phone'];
        move_uploaded_file($_FILES['user_pic']['tmp_name'], "$UPLOAD_DIR".$newfilename);
        echo "Success";
        }

// $allowedExts = array("gif", "jpeg", "jpg", "png");
//       $temp = explode(".", $_FILES["file"]["name"]);
//       $extension = end($temp);
//       if ((($_FILES["file"]["type"] == "image/gif")
//       || ($_FILES["file"]["type"] == "image/jpeg")
//       || ($_FILES["file"]["type"] == "image/jpg")
//       || ($_FILES["file"]["type"] == "image/pjpeg")
//       || ($_FILES["file"]["type"] == "image/x-png")
//       || ($_FILES["file"]["type"] == "image/png"))
//       && ($_FILES["file"]["size"] < 100000)
//       && in_array($extension, $allowedExts))
//         {
//         if ($_FILES["file"]["error"] > 0)
//           {
//           echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
//           }
//         else 
//           {

//             $fileName = $temp[0].".".$temp[1];
//             $temp[0] = rand(0, 3000); //Set to random number
//             $fileName;

//           if (file_exists("../images/imageDirectory/" . $_FILES["file"]["name"]))
//             {
//             echo $_FILES["file"]["name"] . " already exists. ";
//             }
//           else
//             {
//             $temp = explode(".", $_FILES["file"]["name"]);
//             $newfilename = $_POST['phone'];
//             move_uploaded_file($_FILES["file"]["tmp_name"], "../images/imageDirectory/" . $newfilename);
//             echo "Stored in: " . "../images/imageDirectory/" . $_FILES["file"]["name"];
//             }
//           }
//         }
//       else
//         {
//         echo "Invalid file";
//         }
// function validate_data($params) {
//     $msg = "";
//     if(strlen($params[0]) == 0)
//         $msg .= "Please enter the firstname<br />";
//     if(strlen($params[1]) == 0)
//         $msg .= "Please enter the lastname<br />";
//     if(strlen($params[3]) == 0)
//         $msg .= "Please enter the gender<br />"; 
//     if(strlen($params[4]) == 0)
//         $msg .= "Please enter the experiencelevel<br />";
//     if(strlen($params[5]) == 0)
//         $msg .= "Please enter the category<br />";
//     if(strlen($params[6]) == 0)
//         $msg .= "Please enter the address1<br />"; 
//     if(strlen($params[7]) == 0)
//         $msg .= "Please enter the address2<br />";
//     if(strlen($params[8]) == 0)
//         $msg .= "Please enter the phone<br />";
//     elseif(!is_numeric($params[8])) 
//         $msg .= "phone may contain only numeric digits<br />";
//     f(strlen($params[9]) == 0)
//         $msg .= "Please enter email<br />";
//     elseif(!filter_var($params[9], FILTER_VALIDATE_EMAIL))
//         $msg .= "Your email appears to be invalid<br/>";     
//     if(strlen($params[10]) == 0)
//         $msg .= "Please enter the city<br />"; 
//     if(strlen($params[11]) == 0)
//         $msg .= "Please enter the state<br />";                        
//     if(strlen($params[12]) == 0)
//         $msg .= "Please enter the zip<br />";
//     elseif(!is_numeric($params[12])) 
//         $msg .= "Zip may contain only numeric digits<br />";
//     if(strlen($params[13]) == 0)
//         $msg .= "Please enter the date of birth<br />";
//     if(strlen($params[15]) == 0)
//         $msg .= "Please upload user pic <br />";   
//     if($msg) {
//         write_form_error_page($msg);
//         exit;
//         }
//     }
  
// function write_form_error_page($msg) {
//     write_header();
//     echo "<h2>Sorry, an error occurred<br />",
//     $msg,"</h2>";
//     write_form();
//     write_footer();
//     }  
    
// function write_form() {
//     print <<<ENDBLOCK
//     <fieldset>
//     <legend>Personal Information</legend>
//         <form  
//         name="registration"
//         action="http://jadran.sdsu.edu/~jadrn032/proj3/process_request.php" 
//         method="post">
//         <table>
            
//                 <tr>        
//                     <td><label for="firstname">First Name:</label></td>
//                     <td colspan="2"><input type="text" name="firstname" value="$_POST[firstname]" id="firstname" size="20"  required /></td>                  
//                 </tr>
//                 <tr>
//                     <td><label for="lastname">Last Name:</label></td>
//                     <td colspan="2"><input type="text" name="lastname" value="$_POST[lastname]" id="lastname" size="20"  required /></td> 
//                 </tr>
//                 <tr>
//                     <td><label for="mname">Middle Name:</label></td>
//                     <td colspan="2"><input type="url" name="mname" value="$_POST[mname]" id="mname" size="20" placeholder="optional" /></td> 
//                 </tr>
//                     <tr><td><label>Gender:</label></td>
//                     <td><input type="radio" name="gender" value="$_POST[gender]" id="male" required> Male
//                           <input type="radio" name="gender" value="$_POST[gender]" id="female"> Female
//                           <input type="radio" name="gender" value="$_POST[gender]" id="other"> Other  </td></tr>
//                           <tr>
//                     <td><label for="experiencelevel">Experience Level:</label></td>
//                     <td><select name="experiencelevel" id="experiencelevel" required>
//                         <option label="select"></option>
//                         <option value="$_POST[experiencelevel]">Expert</option>
//                         <option value="$_POST[experiencelevel]">Experienced</option> 
//                         <option value="$_POST[experiencelevel]">Novice</option>                                   
//                     </select></td>
//                     <td><label for="category">Category:</label></td>
//                     <td><select name="category" id="category" required>
//                         <option label="select"></option>
//                         <option value="$_POST[category]">Teen</option>
//                         <option value=$_POST[category]">Adult</option> 
//                         <option value="$_POST[category]">Senior</option>                                   
//                     </select></td>
//                     </tr> 
//                 <tr>        
//                     <td><label for="address1">Address Line 1:</label></td>
//                     <td colspan="5"><input type="text" name="address1" value="$_POST[address1]" id="address1" size="60"/></td>
//                 </tr> 
//                 <tr>        
//                     <td><label for="address2">Address Line 2:</label></td>
//                     <td colspan="5"><input type="url" name="address2" value="$_POST[address2]" id="address2" size="60" placeholder="optional" /></td>
//                 </tr> 
//                 <tr>
//                     <td><label for="phone">Phone:</label></td>
//                     <td>
//                         <input type="text" name="phone" size="20" maxlength="10" value="$_POST[phone]" id="phone" placeholder="Enter 10 digit number" />
//                     </td>
//                     <td><label for="email">Email:</label></td>
//                     <td><input type="text" name="email" value="$_POST[email]" id="email" size="30" /></td>
//                 </tr>                 
//                 <tr>        
//                     <td><label for="city">City:</label></td>
//                     <td><input type="text" name="city" value="$_POST[city]" id="city" size="20" required /></td>
//                     <td><label for="state">State:</label></td>
//                     <td><input type="text" name="state" value="$_POST[state]" id="state" size="15" maxlength="2" placeholder="Ex: CA" /></td>

//                     <td><label for="zip" class="lname">Zipcode:</label></td>
//                     <td><input type="text" name="zip" value="$_POST[zip]" id="zip" size="15" maxlength="5" /></td>                                        
//                 </tr>
//                 <tr>

//                     <td><label for="dob">Date of Birth:</label></td>
//                     <td><input id="dob" name = "dob" value="$_POST[dob]" type="text" placeholder="MM/DD/YYYY"></td>
//                 </tr>  
//                 <tr>
//                     <td><label>Medical Conditions:</label></td>
//                     <td><textarea name="MedicalConditions" value="$_POST[MedicalConditions]"></textarea></td>
//                 </tr> 
//                 <tr>
//                 <td><label>Upload Photo:</label></td>
//                 <td><input type="file" name="user_pic" value="$_POST[user_pic]" accept="image/*" required id="fileupload"></td>
//             </tr>
                                          
//             </table>
            
//             <div class="buttons">
//                 <input type="reset" />
//                 <input type="submit" value="Submit" id="fbutton" />
//             </div>        
//         </form>   
//     </fieldset> 
// ENDBLOCK;
// }                        

function process_parameters($params) {
    global $bad_chars;
    $params = array();
    $params[] = trim(str_replace($bad_chars, "",$_POST['firstname']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['lastname']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['mname']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['gender']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['experiencelevel']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['category']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['address1']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['address2']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['phone']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['email']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['city']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['state']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['zip']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['dob']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['MediacalConditions']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['phone']));
    
    return $params;
    }
    
function store_data_in_db($params) {
    # get a database connection
    $db = get_db_handle();  ## method in helpers.php
    ##############################################################
    // $sql = "SELECT * FROM person WHERE phone='$params[8]'";
//     "firstname='$params[0]' AND ".
//     "lastname='$params[1]' AND ".
//     "mname='$params[2]' AND ".
//     "gender='$params[3]' AND ".
//     "experiencelevel='$params[4]' AND ".
//     "category='$params[5]' AND ".
//     "address1='$params[6]' AND ".
//     "address2= '$params[7]' AND ".
    
//     "email='$params[9]' AND ".
//     "city = '$params[10]' AND ".
//     "state = '$params[11]' AND ".
//     "zip = '$params[12]' AND ".
//     "dob='$params[13]' AND ".
//     "MediacalConditions='$params[14]' AND ".
//     "user_pic = '$params[15]';";
// ##echo "The SQL statement is ",$sql;    
    // $result = mysqli_query($db, $sql);
    // if(mysqli_num_rows($result) > 0) {
    //     write_form_error_page('This record appears to be a duplicate');
    //     exit;
    //     }
// ##OK, duplicate check passed, now insert
    $sql = "INSERT INTO person(lastname,firstname,mname,gender,experiencelevel,category,address1,address2,phone,email,city,state,zip,dob,MedicalConditions,user_pic) ".
    "VALUES('$params[1]','$params[0]','$params[2]','$params[3]','$params[4]','$params[5]','$params[6]','$params[7]','$params[8]','$params[9]','$params[10]','$params[11]','$params[12]','$params[13]','$params[14]','$params[15]');";
##echo "The SQL statement is ",$sql;    
    mysqli_query($db,$sql);
    $how_many = mysqli_affected_rows($db);
    echo("There were $how_many rows affected");
    close_connector($db);
    }
        
?>   