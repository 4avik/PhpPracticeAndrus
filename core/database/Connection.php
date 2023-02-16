<?php
 //Klassi failid kirjutatakse suure algustähega

class Connection {
    public static function make( $config ) {

        try {
                return new PDO (
                    "mysql:host={$config['host']};dbname={$config['db']};charset={$config['charset']}",
                    $config['user'],
                    $config['passwd']
                );

            } catch(\PDOEexception $e) {
            throw new \PROException ($e->Message(), (int)$e->getCode());
        }

        // die("Ei saanud ühendada andmebaasiga! :(");
    }
}