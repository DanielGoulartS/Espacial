<hr>
<?php
//EDITAVEL
if ($_SESSION["permicao"]) {
    if ($queryPost) {
        foreach ($queryPost as $registro) {
            $title = $registro['title'];
            $body = $registro['body'];
            $slug = $registro['slug'];
            $id = $registro['id']; //$id era um $_SESSION['id'], caso hajam erros
            ?>
            <div id = 'abaAtualizar'>
                <form id = 'formAtualizar' method = 'post'>
                    <p>Atualize</p>
                    <input id = 'atualizarSlug' type = 'text' name = 'newSlug' value = "<?php echo $slug ?>"></input><br>
                    <input id = 'atualizarTitulo' type = 'text' name = 'newTitle' value = "<?php echo $title ?>"></input><br>
                    <textarea id = 'atualizarCorpo' type = 'text' name = 'newBody' ><?php echo $body ?></textarea><br>
                    <input id = 'atualizarBotao'type = 'submit' value = 'Enviar'></input>
                </form>
            </div>
            <?php
            echo "<div id='materia'>";
            echo "<h2 id='materiaTitulo'>$title</h2>";
            echo "<p id='materiaTexto'>$body</p>";
            echo "<p id='id'>$id</p>"; //$id era um $_SESSION['id'], caso hajam erros
            echo "</div>";
        }
    }
} else {//NAO EDITAVEL
    if ($queryPost) {
        foreach ($queryPost as $registro) {
            echo "<div id='materia'>";
            echo "<h2 id='materiaTitulo'>" . $registro['title'] . "</h2>";
            echo "<p id='materiaTexto'>" . $registro['body'] . "</p>";

            echo "</div>";
        }
    }
}
