<?php

class QueryBuilder
{
    protected $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, User::class);
    }
    public function selectOne($table, $id)
    {
        $statement = $this->pdo->prepare("select * from {$table} where id = ?");
        $statement->execute([$id]);
        return $statement->fetch(PDO::FETCH_OBJ);
    }
    public function insert($table, $name)
   {
       return $this->pdo->prepare(
           "INSERT INTO $table (name) VALUES (?)"
       )->execute([$name]);  
   }
   public function delete($table, $id)
  {
      return $this->pdo->prepare(
          "DELETE FROM $table WHERE id = ?"
      )->execute([$id]);  
  }
  public function update($table, $name, $id)
  {
      return $this->pdo->prepare(
          "UPDATE $table SET name = ? WHERE id = ?"
      )->execute([$name,$id]);  
  }
}
