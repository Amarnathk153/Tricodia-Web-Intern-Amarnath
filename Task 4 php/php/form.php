<?php 

$user="root";
$password="";
$server="localhost";
$database="accessDB";
$sql = "CREATE DATABASE $database";
$first_name=$_POST["first_name"];
$Gender=$_POST["Gender"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$zip=$_POST["zip"];
$website=$_POST["website"];



//connecting to mysql database server
$db_handle=mysqli_connect($server,$user,$password);
mysqli_query($db_handle,'DROP DATABASE accessDB');

    if(!$db_handle)
    {
        die(mysql_error());

    }
    

    // Create database


    
    if ($db_handle->query($sql) === TRUE) 
    {
    
    } else 
    {
    echo  $db_handle->error;
    }
    
$db_handle->close();
$db_handle=mysqli_connect($server,$user,$password,$database);
    



// sql to create table
$tdrp="DROP TABLE Mytable";
mysqli_query($db_handle,$tdrp);
$sqlt = "CREATE TABLE Mytable (
first_name VARCHAR(40) NOT NULL,
last_name VARCHAR(40) NOT NULL,
Gender VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
phone VARCHAR(50) NOT NULL,
address VARCHAR(50) NOT NULL,
city VARCHAR(50) NOT NULL,
state VARCHAR(50) NOT NULL,
zip VARCHAR(50) NOT NULL,
website VARCHAR(30) NOT NULL)";


if ($db_handle->query($sqlt) === TRUE) {
    
} else {
    echo  $db_handle->error;
}

$sqli = "INSERT INTO Mytable (first_name,last_name, Gender,  email, phone, address, city,  state, zip, website)
VALUES ( '$first_name', '$last_name', '$Gender',  '$email', '$phone', '$address', '$city',  '$state', '$zip', '$website')";

if ($db_handle->query($sqli) === TRUE) {
    
} else {
    echo "Error: " . $sqli . "<br>" . $db_handle->error;
}


$sqls = "SELECT first_name,last_name, Gender,  email, phone, address, city,  state, zip, website FROM Mytable";
$result = $db_handle->query($sqls);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<html>
        <head>
<title>form</title>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 6px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>
    
<div class="container">
<legend>Join Us Today!</legend>
<div align=right>
<a href="index.html" class=button>Home</a></div><br>
<p align="center"><b>
    <big>HELLO <?php echo $_POST["first_name"]; ?> <?php echo $_POST["last_name"]; ?>
<br>Please check your details before joining</big></b></p>
<br><br> 
<p><b>
    First name: " . $row["first_name"]. "<br><br>
    Last name: " . $row["last_name"]. "<br><br>
Gender: " . $row["Gender"]. "<br><br>
Email address: " . $row["email"]. "<br><br>
Phone: " . $row["phone"]. "<br><br>
Address: " . $row["address"]. "<br><br>
City: " . $row["city"]. "<br><br>
State/Union Territory: " . $row["state"]. "<br><br>
Zip Code: " . $row["zip"]. "<br><br>
Website or domain name: " . $row["website"]. "<br><br>
</b>
</p>
<form class="well form-horizontal" action="data.php" method="POST"  id="join_form">
    <div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</form>
</body>
</html>";
    }
} else {
    echo "0 results";
}




$db_handle->close();

 ?>