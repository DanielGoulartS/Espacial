<?php

class components {

    public function paginador($conn) {
        if ($_GET['pesquisa']) {
            $pesquisa = $_GET['pesquisa'];
            $query_paginador = mysqli_query($conn, "select id from news where id != '0' and (body like '%$pesquisa%' or title like '%$pesquisa%') order by id;");
        $paginas = (mysqli_num_rows($query_paginador) / 4);
        echo "<ul>";
        for ($i = 0; $i <= $paginas; $i++) {
            echo "<li><a href='/pg/" . ($i + 1) . "/$pesquisa'>" . ($i + 1) . "</a></li>";
        }
        echo"</ul>";
        } else {
            $query_paginador = mysqli_query($conn, "select * from news where id != '0';");
        $paginas = (mysqli_num_rows($query_paginador) / 4);
        echo "<ul>";
        for ($i = 0; $i <= $paginas; $i++) {
            echo "<li><a href='/pg/" . ($i + 1) . "/'>" . ($i + 1) . "</a></li>";
        }
        echo"</ul>";
        }
    }
}
