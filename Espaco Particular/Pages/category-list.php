<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <ul>
<?php foreach ($queryLista as $registro): ?>
            <li><?php echo"<h3>" .$registro['title']. "</h3>";?></li>
            <li><?php echo"<p>" .$registro['title']. "</p>";?></li>
<?php endforeach; ?>
    </body>
</html>
