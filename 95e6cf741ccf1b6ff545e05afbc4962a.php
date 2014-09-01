try
{
    $statement = $conn->prepare('SELECT * FROM users');
    $statement->execute();

    while($user = $statement->fetchObject("\\PHPGuide\\User"))
    {
        echo $user->id, ' - ', $user->name, ' - ', $user->lastVisit, "\r\n";
    }

}
catch(\PDOException $ex) {}