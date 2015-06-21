$stmt = $conn->prepare('SELECT * FROM users WHERE firstName = ? AND pass = ?');
$statement->execute(['John', '123']);