try
{
    $stmt = $conn->prepare('SELECT * FROM users');
    $stmt->execute();

    while($user = $stmt->fetchObject("\\PHPGuide\\User"))
    {
        echo $user->id, ' - ', $user->name, ' - ', $user->lastVisit, "\r\n";
    }

}
catch(\PDOException $e) {}