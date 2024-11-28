<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book-a-table";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
$query = "SELECT * FROM smtp";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo "<table border=1 style='border-collapse:collapse;'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["time"] . "</td>";
        echo "<td>" . $row["people"] . "</td>";
        echo "<td>" . $row["message"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No result found";
}
mysqli_close($conn);
?>