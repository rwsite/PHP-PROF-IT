<?php


try {
    $db = new PDO('mysql:host=mysql;dbname=mysql', 'user', 'user');
    $result = $db->exec(
        "CREATE TABLE books (
        id SERIAL,
        title varchar(255) NOT NULL,
        year int NOT NULL,
        author varchar(255) NOT NULL,
        genre varchar(255),
        price decimal,
        PRIMARY KEY (id)
    );"
    );
    echo 'Соединение c mysql установлено. База создана.';
} catch (Exception $e) {
    print "Error!: " . $e->getMessage();
    die();
}