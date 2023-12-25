<?php 

$FirstName=$_REQUEST['FirstName'];
$LastName=$_REQUEST['LastName'];
$Date=$_REQUEST['date'];
$Gender=$_REQUEST['gender'];
$Email=$_REQUEST['Email'];
$Password=$_REQUEST['Password'];
$MobileNumber=$_REQUEST['MobileNumber'];
$FavouriteLeague=$_REQUEST['FavouriteLeague'];
$FavouriteTeam=$_REQUEST['FavouriteTeam'];
$FavouritePlayer=$_REQUEST['FavouritePlayer'];

if(isset($_POST['submit']))

{

$host="localhost";
$user="root";
$Password="";
$db="football";

$conn = mysqli_connect($host,$user,$Password,$db);

$insert= "insert into fans values('$FirstName','$LastName','$Date','$Gender','$Email','$Password','$MobileNumber','$FavouriteLeague','$FavouriteTeam','$FavouritePlayer')";

$mysqli_query($conn,$insert);

if ($conn){
    echo("<h1 style='color:green;'> Your Registration Is DONE ! </h1>");
}
else{
    echo("<h1 style='color:green;'> Your Registration Is Failed ! </h1>"); 
}

}







?>