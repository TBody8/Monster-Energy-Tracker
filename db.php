<?php
// db.php
$host = "mysql.railway.internal";
$dbname = "Monster";
$username = "root";
$password = "GbwREStobCNIIQHnIabXqgzSZNqYlsur";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>