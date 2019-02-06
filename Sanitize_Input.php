<?php 
$conn = new mysqli("127.0.0.1", "MYSQL_USERNAME", "MYSQL_PASSWORD", "MYSQL_DBNAME");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

function sanitize($data, $conn){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = $conn->real_escape_string($data);
    return $data;
}
# SANITIZE USER INPUT LIKE SO:

$raw_input = '"; SELECT * FROM information_schema <script>alert("XSS")</script>';
# THIS STRING IS BOTH AN SQL INJECTION AND XSS VULNERABILITY

$raw_input = sanitize($raw_input, $conn);
# STRING IS NOW HARMLESS AND GOOD TO PASS EITHER TO THE DB OR IN THE HTML TEMPLATE

echo $raw_input; ?>