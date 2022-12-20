<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $host ="localhost";
    $user ="root";
    $pass="";
    $dbname="devendra";
    $conn=mysqli_connect($host,$user,$pass,$dbname);
    if($conn==false)
    {
        echo " Sorry something is wrong ";
        die("Error :".mysqli_connect_error());

    }
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $pincode=$_POST['number'];
    $mobile=$_POST['phone'];
    // $photo=$_POST['pfile'];
    $query="INSERT INTO Information
    VALUES('$name','$gender','$email',$pincode,$mobile)";
    $status=mysqli_query($conn,$query);
    if($status==true)
    {
        echo"thank you";
    }
    else
    {
        echo " data cannot be submitted ";
        echo "Error:".mysqli_error($conn);
    }
    
}
else
{
    echo"Something went wrong <br>Go Back For Safe";
}
?>
