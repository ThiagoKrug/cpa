<?php

require_once 'config.php';

$ls = $config['limesurvey'];
try {
    $lsPdo = new PDO($ls['driver'] . 
                    ':host=' . $ls['host'] .
                    ';port=' . $ls['port'] . 
                    ';dbname=' . $ls['dbname'], $ls['user'], $ls['password']);
    $lsPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage() . " in " . $e->getFile() . " line " . $e->getLine();
    die;
}

$cpa = $config['cpa'];
try {
    $cpaPdo = new PDO($cpa['driver'] . 
                    ':host=' . $cpa['host'] .
                    ';port=' . $cpa['port'] . 
                    ';dbname=' . $cpa['dbname'], $cpa['user'], $cpa['password']);
    $cpaPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage() . " in " . $e->getFile() . " line " . $e->getLine();
    die;
}