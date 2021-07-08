<?php

$pdo=new PDO("mysql:host=localhost;dbname=dbivoire_banque;charset=UTF8", "root", "BaazZ");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$pdo->exec('CREATE TABLE sexe (
    idsexe SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    libsexe CHAR(1),
    PRIMARY KEY (idsexe)
)
ENGINE=INNODB;');

