<?php
// Database Connection
$host = 'localhost';
$username = 'root';  // Replace with your database username
$password = '';  // Replace with your database password
$dbname = 'store.sql';  // The name of your database

$conn = new mysqli($host, $username, $password, $dbname);

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search query from the URL
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Sanitize the query to prevent SQL injection
$query = $conn->real_escape_string($query);

// SQL Query to search the 'products' table for matches
$sql = "SELECT * FROM products WHERE product_name LIKE '%$query%' OR description LIKE '%$query%'";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    echo "<h2>Search Results:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row['product_name'] . "</h3>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<p>Price: $" . $row['price'] . "</p>";
        echo "</div><hr>";
    }
} else {
    echo "<p>No results found for '$query'.</p>";
}

// Close the database connection
$conn->close();
?>
