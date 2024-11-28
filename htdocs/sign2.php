
<?php

        

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "root", "", "amddasfood");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$oldpassword = $_REQUEST['oldpassword'];
$email = $_REQUEST['email'];
$newpassword = $_REQUEST['newpassword'];


// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO signtwo VALUES ('$oldpassword', '$email','$newpassword')";

if(mysqli_query($conn, $sql)){
  echo  "<script type='text/javascript'>alert(' Successful. ')</script>";


    echo nl2br("\n$oldpassword\n$email\n $newpassword");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);



?>

