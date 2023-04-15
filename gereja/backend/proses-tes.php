<?php
// Connection to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_serdam";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get selected category from POST request
$kategori = $_POST['kategori'];

// Query to get data from database based on selected category
$sql = "SELECT COUNT(*) as total_pendaftaran FROM pendaftaran WHERE kategori = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $kategori);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$totalPendaftaran = $row['total_pendaftaran'];

// Close database connection
$conn->close();
?>

<!-- Display report result on the page -->
<h3>Hasil Laporan</h3>
<p>Kategori: <?php echo $kategori; ?></p>
<p>Total Pendaftaran: <?php echo $totalPendaftaran; ?></p>
