<html>

<head>
    <style type="text/css">
        div {
            border-style: solid;
            border-color: black;
            border-width: 2px;
        }
    </style>
</head>

<body>
    Importar os campi dos participantes:<br>
    <form action="step3.php" method="POST">
        <input type="submit" value="Importar campi">
        <br><br>
        <?php
        foreach ($rsQuestions as $question) {
            echo '<div class="question"><input type="radio" name="campus" value="' . $question->qid . '">' . $question->question . '<br></div><br><br>';
        }
        ?>
        <input type="submit" value="Importar campi">
        <br><br>
    </form>
</body>

</html>