<html>

<head>

</head>

<body>
    <form action="do-step1.php" method="POST">
        Selecione o questionário a ser importado:
        <select name="questionario">
            <?php
            foreach ($resultSet as $q) {
                echo '<option value="' . $q->title . '">' . $q->title . '</option>';
            }
            ?>
        </select>
        <br>
        Este questionário é de qual(is) segmento(s)?<br>
        <?php
        foreach ($rsSegmento as $segmento) {
            echo '<input type="checkbox" name="segmentos[]" value="' . $segmento->idSegmento . '">' . $segmento->nome . '<br>';
        }
        ?>
        <br>
        <input type="submit" value="Importar Questionário">
    </form>
</body>

</html>