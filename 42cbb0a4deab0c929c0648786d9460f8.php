$statement = $conn->prepare('SELECT * FROM users WHERE firstName = :firstName AND pass = :pass');
$statement->execute([':firstName' => 'John', ':pass' => '123']);