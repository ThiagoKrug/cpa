<?php

if (!isset($_POST['segmentos'])) {
    echo "Não foi informado nenhum segmento. Por favor, informe ao menos 1 segmento ao qual o questionário pertence.";
    die;
}

require_once 'connection.php';

$sql1 = "INSERT INTO cpa.questionario (nome) VALUES (:nome);";
$stmt = $cpaPdo->prepare($sql1);
$stmt->bindValue(':nome', $_POST['questionario']);
$stmt->execute();
$idQuestionario = $cpaPdo->lastInsertId();

foreach ($_POST['segmentos'] as $idSegmento) {
    try {
        $sql2 = "INSERT INTO cpa.questionario_segmento (idSegmento, idQuestionario) VALUES (:idSegmento, :idQuestionario);";
        $stmt = $cpaPdo->prepare($sql2);
        $stmt->bindValue(':idSegmento', $idSegmento);
        $stmt->bindValue(':idQuestionario', $idQuestionario);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage() . " in " . $e->getFile() . " line " . $e->getLine();
        die;
    }
}

header('Location: step2.php');