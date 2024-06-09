<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "studentDB";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM Student WHERE FirstName = 'Nimal'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    
    
    $sql_select = "SELECT Id, FirstName, Email, Telephone FROM Student";
    $result = $conn->query($sql_select);
    
    
    if ($result->num_rows > 0) {
        echo "<br><br>Remaining Records:<br>";
        echo "<table border='1'>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["Id"] . "</td>
                    <td>" . $row["FirstName"] . "</td>
                    <td>" . $row["Email"] . "</td>
                    <td>" . $row["Telephone"] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found";
    }
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close connection
$conn->close();
?>
