<?php
include 'koneksi.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$sql = "SELECT title, content FROM blogs WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Blog not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($row['title']); ?></title>
<link rel="stylesheet" href="styleblog.css">
</head>
<body>
    <h1><?php echo htmlspecialchars($row['title']); ?></h1>
    <div>
       <h3><?php echo nl2br(htmlspecialchars($row['content'])); ?></h3>
    </div>
    <div class="tombol">
        <ul>
          <li><a href="index.php">back</a></li>
        </ul>
      </div>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
