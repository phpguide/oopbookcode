$statement = $conn->prepare('SELECT * FROM tbl WHERE user = ? AND pass = ?');
$statement->execute(['John','123']);