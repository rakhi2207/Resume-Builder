<?php
// Connection to Database
$host="localhost";
$user="root";
$password="";
$db="User";
$connect=mysqli_connect($host,$user,$password,$db);
if(!$connect)
{
  die(mysqli_connect_error());
}
session_start();
$emailCheck=$_SESSION['email'];
if(isset($_POST['submit']))
{
        $pass="Select password from User where Email='$emailCheck'";
        $result=$connect->query($pass);
        $row=$result->fetch_array(MYSQLI_ASSOC);
        $password=$row['password'];
        echo $password;
        $sql="DELETE from User where Email='$emailCheck'";
        $connect->query($sql);
      	// Taking data into variables

      	$firstname=$_POST['inputFirstName'];
      	$lastname=$_POST['inputLastName'];
      	$school=$_POST['school'];
      	$per10=$_POST['Per10'];
      	$per12=$_POST['Per12'];
      	$university=$_POST['university'];
      	$graduation=$_POST['graduation'];
      	$html=$_POST['html'];
      	$css=$_POST['css'];
      	$java=$_POST['java'];
      	$bootstrap=$_POST['bootstrap'];
      	$c=$_POST['c'];

      // 	// Inserting values in the database 
      $sql="INSERT INTO `User`.`User` (`First Name`, `Last Name`,`Email`, `School`,`10th %`, `12th %`,`University`, `Graduation Course`,`html`, `css`,`java`, `bootstrap`,`c`, `Password`) VALUES ( '$firstname','$lastname','$emailCheck', '$school', '$per10', '$per12', '$university', '$graduation', '$html', '$css', '$java', '$bootstrap', '$c', '$password')"; 

      $connect->query($sql);
      header('location:UserPortfolio.php');

  }else{

    // Taking data into variables
    $sql="Select * from User where Email='$emailCheck'";
    $query=mysqli_query($connect,$sql);
    $passans=$query->fetch_array(MYSQLI_ASSOC);
     
    $fName=$passans['First Name'];
    $lName=$passans['Last Name'];
    $sc=$passans['School'];
    $p10=$passans['10th %'];
    $p12=$passans['12th %'];
    $uni=$passans['University'];
    $cou=$passans['Graduation Course'];
    $ht=$passans['html'];
    $cs=$passans['css'];
    $ja=$passans['java'];
    $boot=$passans['bootstrap'];
    $c1=$passans['c'];
 

  }
  $connect->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Portfolio Creater</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- CSS -->
<style>
body {
	color: #fff;
	background: #4c535d;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	min-height: 41px;
	box-shadow: none;
	border-color: #e1e4e5;
	font-size: 14px;
}
.form-control, .btn {        
	border-radius: 3px;
}    
.signup-form {
	width: 600px;
	margin: 0 auto;
	padding: 30px 0;
}	
.signup-form form {
	color: #9ba5a8;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2 {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr {
	margin: 0 -30px 20px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form label {
	font-weight: normal;
	font-size: 13px;
}
.signup-form .btn, .signup-form .btn:active {        
	font-size: 16px;
	font-weight: bold;
	background: #5fcaba !important;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #3fc0ad !important;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5fcaba;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}
</style>
</head>
<body>
<!-- Content -->

<?php

?>
<div class="signup-form">
    <form action="#" method="post">
		<h2>Come Let's create your Portfolio</h2>
		<p>It's free and only takes a minute.</p>
		<hr>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="inputFirstName" required placeholder="FirstName" value='<?php echo $fName ?>'>
                </div>
			</div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="inputLastName" required placeholder="LastName" value='<?php echo $lName ?>'>
                </div>
            </div>
        </div> 
        <div class="form-group">
        	<input type="text" class="form-control" name="school" placeholder="School" required="required" value='<?php echo $sc ?>'>
		</div>
		<div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="number" class="form-control" name="Per10" required placeholder="Xth %" value='<?php echo $p10 ?>'>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="number" class="form-control" name="Per12" required placeholder="XIIth %" value='<?php echo $p12 ?>'>
                </div>
            </div>
		</div> 
		<div class="form-group">
			<input type="text" class="form-control" name="university" placeholder="University" value='<?php echo $uni ?>'required="required">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="graduation" placeholder="Graduation Course" required="required" value='<?php echo $cou ?>'>
		</div>
		<h4 style="color:black;">Mention the knowledge of below given programming or Markup languages (in percentage)</h4>
		<div class="form-group">
            <input type="number" class="form-control" name="html" placeholder="HTML" required="required" min="0" max="100" value='<?php echo $ht ?>'> 
		</div>		
		<div class="form-group">
            <input type="number" class="form-control" name="css" placeholder="CSS" required="required" min="0" max="100" value='<?php echo $cs ?>'>
		</div>		
		<div class="form-group">
            <input type="number" class="form-control" name="java" placeholder="JAVA" required="required" min="0" max="100" value='<?php echo $ja ?>'>
		</div>		
		<div class="form-group">
            <input type="number" class="form-control" name="bootstrap" placeholder="BOOTSTRAP" required="required" min="0" max="100" value='<?php echo $boot ?>'>
		</div>
		<div class="form-group">
            <input type="number" class="form-control" name="c" placeholder="C" required="required" min="0" max="100" value='<?php echo $c1 ?>'>
        </div>
     <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Modify</button>
        </div>
    </form>
</div>
</body>
</html>