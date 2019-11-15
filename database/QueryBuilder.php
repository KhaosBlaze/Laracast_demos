<?php

class QueryBuilder
{
  protected $pdo;

  public fucntion __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table, $intoClass){
    $statement = $this->pdo->prepare('select * from ${table}');

    $statement-> execute();

    return $statement->fetchALL(PDO::FETCH_CLASS, $intoClass);
  }
}
