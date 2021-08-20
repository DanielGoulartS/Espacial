<hr>
<?php

if ($queryPost) {
    foreach ($queryPost as $registro) {
        echo "<div>";
        echo "<h2>" . $registro['title'] . "</h2>";
        echo "<p>" . $registro['body'] . "</p>";

        echo "</div></li>";
    }
}
?>