<?php


$fname = $_POST["fname"];
$lname=$_POST["lname"];
$email = $_POST["email"];
$phone =$_POST["phone"];
$salary=$_POST["salary"];

//var_dump($fname,$lname,$email,$trainer_name,$password);

$host ="localhost";
$dbname="dbms";
$username="root";
$password="";


$conn = mysqli_connect(hostname :$host ,username:$username , password : $password , database : $dbname );

if(mysqli_connect_errno())
    {
        die("Connection error : " . mysqli_connect_errno());
    }

//echo "Connection successfull";



$sql = "INSERT INTO trainers_tbl (fname ,lname , email , phone , salary )
        VALUES ( ? ,?,?,?,?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt , $sql))
    {
        die(mysqli_errno($conn));
    }

mysqli_stmt_bind_param($stmt , "sssis" , $fname , $lname , $email , $phone , $salary );

mysqli_stmt_execute($stmt);

session_start();
header("location: trainerlist.php");


?>
