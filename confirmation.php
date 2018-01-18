<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;
    charset=iso-8859-1" />
    <title>Sample Form Processing with PHP</title>
<link rel="stylesheet" type="text/css" href="confirmation.css" />
    

</head>


<body>
    <div class="fullscreen-bg">
    <nav>
      <a href="index.html">Home</a>
      <a href="index.html#Register">Register</a>
      <a href="index.html#Location">Location</a>
      <a href="index.html#contact">Contact</a>
    </nav>
<?php
echo <<<ENDBLOCK
    <h1>$params[0], thank you for registering.</h1>
    <table id="confirmation">
        <tr>
            <td>firstname:</td>
            <td>$params[0]</td>
        </tr>
        <tr>
            <td>lastname:</td>
            <td>$params[1]</td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>$params[3]</td>
        </tr>
        <tr>
            <td>ExperienceLevel:</td>
            <td>$params[4]</td>
        </tr>
        <tr>
            <td>Category:</td>
            <td>$params[5]</td>
        </tr>
        <tr>
            <td>Address1:</td>
            <td>$params[6]</td>
        </tr>
        <tr>
            <td>phone:</td>
            <td>$params[8]</td>
        </tr>
        <tr>
            <td>email:</td>
            <td>$params[9]</td>
        </tr>
        <tr>
            <td>City:</td>
            <td>$params[10]</td>
        </tr>
        <tr>
            <td>State:</td>
            <td>$params[11]</td>
        </tr>
        <tr>
            <td>Zip Code:</td>
            <td>$params[12]</td>
        </tr>
        <tr>
            <td>DoB:</td>
            <td>$params[13]</td>
        </tr>           
    </table>                          
ENDBLOCK;

?>
</div>
</body></html>