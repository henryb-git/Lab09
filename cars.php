<?php
require_once 'settings.php';
$dbconection = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($dbconection) {
    $query = "SELECT * FROM cars";
    $result = mysqli_query($dbconection, $query);
    if ($result) {
        echo "<table border='1'>";
        echo "<tr><th>Car ID</th><th>Make</th><th>Model</th><th>Year</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['car_id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['make']) . "</td>";
            echo "<td>" . htmlspecialchars($row['model']) . "</td>";
            echo "<td>" . htmlspecialchars($row['year']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Error there are no cars to display.";
    }
    mysqli_close($dbconection);
} else {
    die("Database connection failed: " . mysqli_connect_error());
}   
?>