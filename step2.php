<?php

require_once 'connection.php';

$sql = "SELECT qid, question FROM limesurvey.lime_question_l10ns;";
$stmt = $lsPdo->prepare($sql);
$stmt->execute();
$rsQuestions = $stmt->fetchAll(PDO::FETCH_CLASS);

include_once 'step2-view.php';