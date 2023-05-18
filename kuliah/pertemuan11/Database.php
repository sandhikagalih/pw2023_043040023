<?php
require 'config.php';

class Database
{
  public $conn;

  public function __construct()
  {
    $config = [
      'host' => HOST,
      'port' => 3306,
      'dbname' => DB,
      'charset' => 'utf8mb4',
    ];

    // Data Source name
    // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

    $dsn = 'mysql:' . http_build_query($config, '', ';');

    // Create a PDO instance
    $this->conn = new PDO($dsn, USER, PASS, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query)
  {
    $statement = $this->conn->prepare($query);
    $statement->execute();
    return $statement;
  }
}
