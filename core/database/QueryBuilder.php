<?php

class QueryBuilder {

    protected $pdo; // property

    public function __construct ( PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll ($table) {

        $stmt = $this->pdo->prepare("SELECT * FROM {$table};");
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }



    public function insert ($table, $parameters) {
        
        $sql = sprintf ( 
            'INSERT INTO %s (%s) values (%s);',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters)),
        );
        //values (:name, :email)
    
        //s=placeholder

        try {
            $stmt = $this -> pdo -> prepare($sql);
            $stmt -> execute($parameters);
        } catch (Exception $e) {
            die('Midagi läks valesti...');
        }

    }



}


// insert table INSERT INTO table (cd, cd cd3)