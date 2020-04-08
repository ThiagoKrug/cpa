<?php

require_once 'connection.php';

$question = $_POST['campus'];

$sql = "
SELECT
    aq.aid, aq.qid, answers.answer
FROM
    limesurvey.lime_answers AS aq, limesurvey.lime_answer_l10ns AS answers
WHERE
    aq.aid = answers.aid AND
    aq.qid = :qid;";
$stmt = $lsPdo->prepare($sql);
$stmt->bindValue(':qid', $question);
$stmt->execute();
$rsAlternativas = $stmt->fetchAll(PDO::FETCH_CLASS);

$sql2 = "SELECT * FROM cpa.campus;";
$stmt2 = $cpaPdo->prepare($sql2);
$stmt2->execute();
$rsCampi = $stmt2->fetchAll(PDO::FETCH_CLASS);

include_once 'step3-view.php';