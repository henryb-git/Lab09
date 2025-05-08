$host = "localhost";
$username = "root";
$password = "";
$database = "exhibition_db";

$dbconnection = mysqli_connect($host, $username, $password, $database);

if (!$dbconnection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>