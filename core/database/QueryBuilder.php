<?php

class QueryBuilder
{
  protected $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table, $type){
    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();

    return $statement->fetchALL(PDO::FETCH_CLASS, $type);
  }

  public function submitName($data)
  {
    $submission = $this->pdo->prepare(
      "insert into names (name) values ($data);"
    );
    $submission->execute();
  }
}
