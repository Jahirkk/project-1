

<?php



// Configuration for database connection
$servername = "127.0.0.1";
$username = "root";
$password = "Jahir123@"; 
$dbname = "search";


// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get search query from the URL
$search_query = $_GET['query'] ?? '';

if ($search_query) {
    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM hobbies WHERE hobby_name LIKE CONCAT('%', ?, '%') OR description LIKE CONCAT('%', ?, '%')");
    $stmt->bind_param("ss", $search_query, $search_query);
    $stmt->execute();

    // Fetch results
    $result = $stmt->get_result();

    // Display the results
    if ($result->num_rows > 0) {
        echo "<h2>Search Results for '$search_query':</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li><strong>" . $row['hobby_name'] . "</strong>: " . $row['description'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No results found for '$search_query'</p>";
    }

    $stmt->close();
} else {
    echo "<p>Please enter a search query.</p>";
}

$conn->close();
?>
