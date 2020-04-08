<?php
require_once 'connection.php';

$sql = "SELECT surveyls_survey_id as id, surveyls_title as title FROM limesurvey.lime_surveys_languagesettings;";
$stmt = $lsPdo->prepare($sql);
$stmt->execute();
$resultSet = $stmt->fetchAll(PDO::FETCH_CLASS);

$sql = "SELECT * FROM cpa.segmento;";
$stmt = $cpaPdo->prepare($sql);
$stmt->execute();
$rsSegmento = $stmt->fetchAll(PDO::FETCH_CLASS);

include_once 'step1-view.php';