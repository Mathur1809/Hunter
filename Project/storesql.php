<?php 
  session_start();
  extract($_POST);

  if($fname=="")
  {
    $errors['fname'] = true;
    $iserror = true;
  }
  if($lname=="")
  {
    $errors['lname'] = true;
    $iserror = true;
  }
  /*if(!preg_match("^[a-zA-Z]+@[a-zA-Z]+.com $", $email))
  {
    $errors['email'] = true;
    $iserror = true;
  }
  if(!preg_match("^[0-9]{10}$", $phone))
  {
    $errors['phone'] = true;
    $iserror = true;
  }*/
  $query = "INSERT INTO info "."(FNAME, LNAME, EMAIL, PHONE) "."VALUES "."('$fname', '$lname', '$email', '$phone')";
	$servername = "localhost";
	$user = "root";
	$pass = "";
	$conn = new mysqli($servername, $user, $pass);
	if ($conn->connect_error)
	{
    die("Connection failed: ".$conn->connect_error);
  }
  $usequery = "USE info";
  $conn->query($query);
	$query = "INSERT INTO info "."(FNAME, LNAME, EMAIL, PHONE) "."VALUES "."('$fname', '$lname', '$email', '$phone')";

	if(($conn->query($query))){
    print("Query error");
    die("Error");
  }
  $conn->close();
  
?>
<!DOCType html>
<html>
<head>
<style type="">
  p{font-size: 30px; color: #b59146; text-align: center;text-shadow: 5px 5px 10px #000000;-webkit-text-stroke: 1px #b59146; -webkit-text-fill-color: #FFFFFF;}
</style>
</head>
<body style="background-image: url('Backgrounds/Fantasy.jpg');">
  <p> The Hunter Fantasy League will be up and running shortly. You have registered succesfully. Check regularly to get notified about the League. </p>
</body>
