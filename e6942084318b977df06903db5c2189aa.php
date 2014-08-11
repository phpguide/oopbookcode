$statement = $conn->prepare('SELECT * FROM tbl WHERE user = :username AND pass = :pass');
$statement->execute([':username' => 'John', ':pass' => '123']);