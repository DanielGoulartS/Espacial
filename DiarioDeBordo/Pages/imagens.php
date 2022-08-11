<?php

echo "<div style='max-width: 50%; display: flex;
  flex-wrap: wrap; background-color: black; margin: auto; justify-content: center;'>";
//if(isset variavel mais simples){
  //  forEach ($variavel mais simples as $album) {
  //      $album->exibir();
  //  }

//}else {
    forEach ($albuns as $album) {
        $album->exibir();
    }
//}
echo "</div>";
