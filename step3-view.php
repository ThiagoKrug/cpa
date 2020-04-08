<html>

<head>

</head>

<body>
    Alternativas:<br>
    <form action="do-step3.php" method="POST">
        <table>
            <?php
            $i=1;
            foreach ($rsAlternativas as $alternativa) {
                echo '<tr><td><input type="hidden" name="alternativa' . $i . '" value="' . $alternativa->aid . '">';
                echo '' . $alternativa->answer . '</td>';
                echo '<td><select name="campus' . $i . '">';
                foreach ($rsCampi as $campus) {
                    echo '<option value="' . $campus->idCampus . '">' . $campus->nome . '</option>';
                }
                echo '</select></td></tr>';
                $i++;
            }
            ?>
        </table>
        <input type="submit" value="Associar alternativas-campi">
    </form>
</body>

</html>