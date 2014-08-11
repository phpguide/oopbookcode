try
{
    $conn->exec("UPDATE tbl SET visits = visits + 1");
}
catch(\PDOException $ex) {}