<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database server address
$username = "username"; // Change this to your database username
$password = "password"; // Change this to your database password
$dbname = "database"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform a query
$sql = "SELECT * FROM your_table"; // Change this to your table name
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Display results in a table
    echo "<h2>Results displayed in a table:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td></tr>";
    }
    echo "</table>";

    // Display results in a list
    echo "<h2>Results displayed in a list:</h2>";
    echo "<ul>";
    $result->data_seek(0); // Reset result pointer to start
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["name"] . "</li>";
    }
}