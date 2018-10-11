<!DOCTYPE HTML>
<html>
<head>
<title> Safar: Your comfort drives us! </title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2018.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>


#homepage
{

  height: 100px;
}
#darshan {
color: black;

}
#reason {
  height: 25%;
}
#help {
  padding-right:20px;
}
.carousel-indicators {
  bottom:0;
}
img {
  display: block;
  max-width:500px;
  max-height:500px;
  width: auto;
  height: auto;
}

input
{
  width: 20%;
}

#form1 {
  padding: 20px;
  margin: 0px;
  height: 450px;
}

#form2 {
  height: 470px;
  padding-top: 100px;
}

.tree {
  height: 540px;
  overflow-y: scroll;
}

.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}

/* Create a custom checkbox */
.checkmarks {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmarks {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmarks {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmarks:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmarks:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmarks:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

#photo {
	max-height: 400px;
	max-width: 250px;
	padding-top: 20px;
	padding-left: 20px;
}

#adv {
	border-left: 6px solid white ;
}

#footer {
	background-color: #e3f2fd;
	 height: 50px;
    font-family: 'Verdana', sans-serif;
    padding: 20px;
}
</style>
</head>
<body style="background-color: powderblue;">

<!--navbar-->
  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <div class= "navbar-header">
        <button type= "button" class="navbar-toggle" data-toggle= "collapse" data-tarPOST= "#bs-safar-navbar-collapse-1">
          <span class= "sr-only"> Toggle navigation </span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         </button>
      <a class="navbar-brand" href="#"> Safar </a> 
    </div>
  <div class= "collapse navbar-collapse navbar-right" id="bs-safar-navbar-collapse-1">
    <ul class= "nav navbar-nav">
      <li> <a href="homepage_safar.html"> Home </a> </li>
      <li> <a href="#"> Contacts </a> </li>
      <li> <a href="about.html"> About </a> </li>
       <li class="dropdown">
        <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"> <b class= "caret"></b>
          Dropdown link
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
      </li>
    </ul>
    </div>  
  </div>
</nav>

<!--end of navbar-->
<div class= "container-fluid">
  <div class="col-md-4 w3-animate-left" id="darshan" align="center"> 
      <div class= "bg-light text-dark">
  
    <div class= "panel panel-info" style="overflow-y: scroll;">
      <div class= "panel-heading">
        <h4 class= "panel-title"> Sign-up with Safar </h4>
      </div> 

    <div class= "panel panel-body">
<form id="form1" action="#" method="POST">
    <div class="form-group has-feedback">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" id= "name" placeholder="Name">
    <i class="glyphicon glyphicon-user form-control-feedback"></i>
</div>
  <div class="form-group has-feedback">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
     <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
  </div>
  <div class="form-group has-feedback">
    <label for="locality">Locality:</label>
    <input type="text" class="form-control" id="locality" name="locality" placeholder="Address">
    <i class="glyphicon glyphicon-home form-control-feedback"></i>
  </div>
<!--  <div class="form-group has-feedback">
    <label for="age">Age:</label>
    <input type="number" class="form-control" id="age" name="age" placeholder="age">
    <i class="glyphicon glyphicon-cloud form-control-feedback"></i>
  </div> -->

<label class="container">Male
  <input type="radio" checked="checked" name="radio" id="gender" value="male">
  <span class="checkmark"></span>
</label>
<label class="container">Female
  <input type="radio" name="radio" id="gender" value="female">
  <span class="checkmark"></span>
</label>
<label class="container">Other
  <input type="radio" name="radio" id="gender" value="other">
  <span class="checkmark"></span>
</label>

<label required class="container">I accept to the terms and conditions
  <input type="checkbox">
  <span class="checkmarks"></span>
</label>

  <button name="add" type="submit" value="add" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
</div>
</div>
 <div class="col-md-4 w3-animate-top" align="center">
        <div class= "bg-light text-dark">
          <div class= "panel panel-success">
      <div class= "panel-heading">
        <h4 class= "panel-title"> Get Fare Estimate </h4>
      </div> 
   
    <div class= "panel-body">
 <!-- <form id = "form2">
    <div class="form-group has-feedback">
    <label for="source">Source:</label>
    <input type="text" class="form-control" id= "source" placeholder="Enter Source Location">
    <i class="glyphicon glyphicon-map-marker form-control-feedback"></i>
</div>
      <div class="form-group has-feedback">
    <label for="destination">Destination:</label>
    <input type="text" class="form-control" id= "destination" placeholder="Enter Destination Location">
    <i class="glyphicon glyphicon-map-marker form-control-feedback"></i>
</div>


<button type="submit" class="btn btn-primary">Get Estimate</button>-->

<a href="./source-distance-finder-google-maps.html">To get distance estimate click here</a>
</form>
</div>
</div>
</div>
</div>
<div class="col-md-4 w3-animate-right">
<div class="panel panel-info tree">
      <div class="panel-heading">Latest Discount and Offers!</div>
      <div class="panel-body notice">
              <ul>
          <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis vulputate diam, et congue nibh lacinia vel. Pellentesque tempus nunc. </li>
          <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis vulputate diam, et congue nibh lacinia vel. Pellentesque tempus nunc. </li>
          <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis vulputate diam, et congue nibh lacinia vel. Pellentesque tempus nunc. </li>
          <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis vulputate diam, et congue nibh lacinia vel. Pellentesque tempus nunc. </li>
          <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis vulputate diam, et congue nibh lacinia vel. Pellentesque tempus nunc. </li>
          <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis vulputate diam, et congue nibh lacinia vel. Pellentesque tempus nunc. </li>
          <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis vulputate diam, et congue nibh lacinia vel. Pellentesque tempus nunc. </li>
         </ul> 
      </div>
    </div>
   </div>
   <div class="container-fluid">
   	<div class="col-md-12">
   		<div class= "jumbotron" align="center">
   			<h2> Reasons to use Safar </h2>
   		</div>
   	</div>
   </div>
   <!--carousel type content-->
</div>
<div class="container-fluid">
<div class="col-md-3">
<div class="w3-container w3-2018-sailor-blue w3-hover-black w3-animate-bottom" id="adv">
  <img id="photo" src="C:/xampp/htdocs/Safar-master/images/doorstep.jpg">	
  <h2>London</h2>
  <p>London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</p>
</div>
</div>
<div class="col-md-3">
<div class="w3-container w3-2018-sailor-blue w3-hover-black w3-animate-bottom" id="adv">
  <img id="photo" src="C:/xampp/htdocs/Safar-master/images/doorstep.jpg">	
  <h2>London</h2>
  <p>London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</p>
</div>
</div>
<div class="col-md-3">
<div class="w3-container w3-2018-sailor-blue w3-hover-black w3-animate-bottom" id="adv">
  <img id="photo" src="C:/xampp/htdocs/Safar-master/images/doorstep.jpg">	
  <h2>London</h2>
  <p>London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</p>
</div>
</div>
<div class="col-md-3" >
<div class="w3-container w3-2018-sailor-blue w3-hover-black w3-animate-bottom" id="adv">
  <img id="photo" src="C:/xampp/htdocs/Safar-master/images/doorstep.jpg">	
  <h2>London</h2>
  <p>London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.</p>
</div>
</div>
</div>
 
   </div>
 <!--end of carousel type content-->
<!-- footer-->
<footer id="footer">
    <span class="pull-right"><strong>Version</strong> 1.0.0</span>
    <p><b>Copyright&nbsp;</b>&copy; Somaiya Vidyavihar | Design and Development. All Rights Reserved.</p>
</footer>


<!-- footer ends -->   
 
<?php
if(isset($_POST['add']))
{
$n= $_POST['name'];
$e= $_POST['email'];
$l= $_POST['locality'];
$g= $_POST['radio'];
$server="localhost";
$username="root";
$password="";
$db="safar";
$conn = new mysqli($server,$username,$password,$db);
if($conn->connect_error){
    die("Connection failed".mysqli_connect_error());
}
else
{
echo 'successful';
echo $n;
echo $e;
echo $l;
echo $g;
$conn->query ("INSERT INTO customer(name,email,locality,gender) VALUES ('$n','$e','$l','$g')");
unset ($_POST['add']);
}
}
 ?>


</body>
</html>