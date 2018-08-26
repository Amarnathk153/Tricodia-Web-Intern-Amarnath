<html>
<title>form</title>
<head><link rel="stylesheet" href="./css/bootstrap.min.css">
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
    <big>HELLO <?php echo $_GET["first_name"]; ?> <?php echo $_GET["last_name"]; ?>
<br>Please check your details before joining</big></b></p>
<br><br> 
<p><b>
Gender: <?php echo $_GET["Gender"]; ?><br><br>
Email address: <?php echo $_GET["email"]; ?><br><br>
Phone: <?php echo $_GET["phone"]; ?><br><br>
Address: <?php echo $_GET["address"]; ?><br><br>
City: <?php echo $_GET["city"]; ?><br><br>
State/Union Territory: <?php echo $_GET["state"]; ?><br><br>
Zip Code: <?php echo $_GET["zip"]; ?><br><br>
Website or domain name: <?php echo $_GET["website"]; ?><br><br>
</b>
</p>
<form class="well form-horizontal" action="data.php" method="get"  id="join_form">
    <div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</form>
</body>
</html>