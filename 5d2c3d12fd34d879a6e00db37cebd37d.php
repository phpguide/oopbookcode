try {
    $options = [
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'",
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
    ];

    $dsn = "mysql:host=localhost;dbname=db1;charset=utf8";
    $conn = new \PDO($dsn, "user", "pass", $options);
}
catch(\PDOException $ex) {}