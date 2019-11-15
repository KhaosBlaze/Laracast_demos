<?php

class QueryBuilder
{
  protected $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table){
    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();

    return $statement->fetchALL(PDO::FETCH_CLASS);
  }

  public function insert($table, $data)
  {

    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table,
      implode(', ', array_keys($data)),
      ':'.implode(', :', array_keys($data))
    );

    die

    try{
      $submission = $this->pdo->prepare($sql);
      $submission->execute($data);
    } catch (Exception $e){
      die('Whoops; Something went wrong in the insert');
    }

  }
}
