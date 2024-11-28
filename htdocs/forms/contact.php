
<?php

        

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "root", "", "book-a-table");

// Check connection
if($conn === false){
  die("ERROR: Could not connect. "
    . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];


// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO usr VALUES ('$name', 
  '$email','$subject','$message')";

if(mysqli_query($conn, $sql)){
  echo "Send data successfully"; 

  echo nl2br("\n$name\n $email\n "
    . "$subject\n $message");
} else{
  echo "ERROR: Hush! Sorry $sql. "
    . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);


    
?>
