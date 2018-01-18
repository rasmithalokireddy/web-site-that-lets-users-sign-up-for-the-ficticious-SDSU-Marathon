<?php
session_start();
if($_SESSION['loading']=='yes'){

}
else{
	header('location: report.php');
}
$_SESSION['loading']='';
// $pattern = $_POST['phone'];
// echo $pattern;
// echo "loo";
// $dirname = "./imageDirectory/";
// $images = glob($dirname."$_POST['phone']");
// glob(pattern)

// foreach($images as $image) {
//     echo '<img src="'.$image.'" /><br />';
// }
// $url = "report.php"
// if ($_SERVER['HTTP_REFERER'] != $url ) {
// 	header('location: report.php');
// 	exit();
// }
// session_start();
// if(isset($_SESSION['login'])){
// 	$_SESSION['RedirectKe'] = $_SERVER['REQUEST_URI'];
// 	header('location: report.php');
// }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Runners Report</title>
    <link rel="stylesheet" href="roaster.css"/> 

</head>
<body>
    <div class="fullscreen-bg">
    <nav>
      <a href="index.html">Home</a>
      <a href="index.html#Register">Register</a>
      <a href="index.html#Location">Location</a>
      <a href="index.html#contact">Contact</a>
    </nav>
    <h1>Runners Report</h1>
<?php
$server = 'opatija.sdsu.edu:3306';
$user = 'jadrn032';
$password = 'pipe';
$database = 'jadrn032';
if(!($db = mysqli_connect($server,$user,$password,$database)))
    echo "ERROR in connection ".mysqli_error($db);
else {

    $sql = "select phone, dob, lastname, firstname, experiencelevel from person where category = 'teen' order by lastname;";    
    $result = mysqli_query($db, $sql); 
    if(!result)
        echo "ERROR in query".mysqli_error($db);
    echo "<table id='person'>\n";
    echo "<h2>Teens</h2>";
    echo "<tr><th>User Pic</th><th>Last Name</th><th>First Name</th><th>Experience Level</th><th>Age</th></tr>";
    while($row=mysqli_fetch_row($result)) {
        echo "<tr>";
        $test =  array_slice($row, 0, 1);
        $birthDate = array_slice($row, 1, 2);
  $birthYear = explode("/", $birthDate[0]);
  $age = date("Y") - $birthYear[2];
        echo "<td><img src = './css/sollu/".$test[0]."'  width='100'/></td>";
        foreach(array_slice($row,2) as $item) 
            echo "<td>$item</td>";
        	echo "<td>$age</td>";
        echo "</tr>\n";
        }
    mysqli_close($db);
    }
if(!($db = mysqli_connect($server,$user,$password,$database)))
    echo "ERROR in connection ".mysqli_error($db);
else {
	$sql1 = "select phone, dob, lastname, firstname, experiencelevel from person where category = 'adult' order by lastname;";
	$result1 = mysqli_query($db, $sql1);
	if(!result)
        echo "ERROR in query".mysqli_error($db);
    echo "<table id='person'>\n";
    echo "<h2>Adults</h2>";
    echo "<tr><th>User Pic</th><th>Last Name</th><th>First Name</th><th>Experience Level</th><th>Age</th></tr>";
    while($row1=mysqli_fetch_row($result1)) {
        echo "<tr>";
        $test1 =  array_slice($row1, 0, 1);
        $birthDate1 = array_slice($row1, 1, 2);
  $birthYear1 = explode("/", $birthDate1[0]);
  $age1 = date("Y") - $birthYear1[2];
        echo "<td><img src = './css/sollu/".$test1[0]."' width='100'/></td>";
        foreach(array_slice($row1,2) as $item1) 
            echo "<td>$item1</td>";
        	echo "<td>$age1</td>";
        echo "</tr>\n";
        }
    mysqli_close($db);
    }
if(!($db = mysqli_connect($server,$user,$password,$database)))
    echo "ERROR in connection ".mysqli_error($db);
else {
	$sql2 = "select phone, dob, lastname, firstname, experiencelevel from person where category = 'senior' order by lastname;";
	$result2 = mysqli_query($db, $sql2);
	if(!result)
        echo "ERROR in query".mysqli_error($db);
    echo "<table id='person'>\n";
	echo "<h2>Seniors</h2>";
    echo "<tr><th>User Pic</th><th>Last Name</th><th>First Name</th><th>Experience Level</th><th>Age</th></tr>";
    while($row2=mysqli_fetch_row($result2)) {

        echo "<tr>";
        $test2 =  array_slice($row2, 0, 1);
        $birthDate2 = array_slice($row2, 1, 2);
  $birthYear2 = explode("/", $birthDate2[0]);
  $age2 = date("Y") - $birthYear2[2]; 
        echo "<td><img src = './css/sollu/".$test2[0]."'  width='100'/></td>";
        
        foreach(array_slice($row2,2) as $item2) 
            echo "<td>$item2</td>";
        	echo "<td>$age2</td>";	
        echo "</tr>\n";
        }
    mysqli_close($db);
    }
?>
</table>
</div>
</body>
</html>