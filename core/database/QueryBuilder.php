<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    /*The PDO instance.*/

    protected $pdo;

    /*Create a new QueryBuilder instance.*/

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /*Select all records from a database table */

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectOneId($table,$id)
        {
            $statement = $this->pdo->prepare("select id_{$table} from {$table} where id_{$table} ={$id}");

            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

    public function selectOne($table,$id)
        {
            $statement = $this->pdo->prepare("select * from {$table} where id_{$table} ={$id}");

            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);
        }

}
