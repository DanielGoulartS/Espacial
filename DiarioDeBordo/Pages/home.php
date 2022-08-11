<link rel="stylesheet" href="../../Style/Home.css"/>
<?php if ($_SESSION["permicao"]): ?>
    <div id='abaEnviar'>
        <form id='formPostar' method='post'>
            <p>Publique</p>
            <input id='enviarSlug' type='text' name='slug' placeholder='link-da-materia'><br>
            <input id='enviarTitulo' type='text' name='titulo' placeholder='Titulo'><br>
            <textarea id='enviarCorpo' type='text' name='corpo'>
<h2 class="subtitulo">Escreva Aqui Titulo 1</h2>
<img class="imagem" src="https://link-da-imagem.jpg">
<p class="paragrafo"> Texto... </p>
<h2 class="subtitulo">Escreva Aqui Titulo 2</h2>
<p class="paragrafo"> Texto... </p>
...
            </textarea><br>
            <input id='enviarBotao'type='submit' value='Postar'></input>
        </form>
    </div>
<?php endif; ?>

<ul id="ulFeed">
    <?php foreach ($queryPosts as $registro): ?>
        <a id="botao" href='/post/<?php echo $registro['slug'] ?>#ulMenu2'>
            <li>
                <div id="homePost">
                    <h3 id="titulo"> <?php echo $registro['title'] ?> </h3>
                    <div id="trecho"> <?php echo $registro['body'] ?>  ... </div>
                    <p id="postId" class='idpSelectAll'> id: <?php echo $registro['id'] ?> </p>
                </div>
                <br>
            </li></a>
    
        <?php if ($_SESSION["permicao"]): ?>
            <form method='post'>
                <label id='excluirPostBotao'> Excluir Post 
                    <input name='excluirPost' type='submit' id='excluirPostBotao' value='<?php echo $registro['id'] ?>'>
                    </input>
                </label>
            </form>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

<ul id="ulPaginador">
    <?php
    for ($i = 0; $i <= $paginas; $i++) {
        echo "<a href='/pg/" . ($i + 1) . "/$pesquisa#ulMenu2'><li>" . ($i + 1) . "</li></a>";
    }
    ?>
</ul>