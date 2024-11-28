
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
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];


// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO signone VALUES ('$name', '$email','$password')";

if(mysqli_query($conn, $sql)){
  echo  "<script type='text/javascript'>alert(' Successful. ')</script>";


    echo nl2br("\n$name\n$email\n $password");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);






?><br><br>











