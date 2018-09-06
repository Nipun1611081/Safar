 <?php
if (isset($_POST['add']))
{
$server='localhost';
$username='root';
$password='';
$db='safar';
$conn = new mysqli($server,$username,$password,$db);
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
else
{
$name= $_POST["name"];
$email= $_POST["email"];
$locality= $_POST["locality"];
$gender= $_POST["gender"];
$sql="INSERT INTO customer(name,email,locality,gender) VALUES (".$name.",".$email.",".$locality.",".$gender.")";
if ($conn->query($sql))
{
echo "<script> alert('Account created') </script>";
}
}
}
 ?>