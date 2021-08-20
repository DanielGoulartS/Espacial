<?php
if ($npage == 1) {
    foreach ($queryHighLight as $registro):
        ?>
        <div>
            <p><?php echo $registro['body']; ?></p>
        </div>
        <?php
    endforeach;
}
?>
<hr>

<ul>
    <?php foreach ($queryPosts as $registro): ?>
        <li>
            <div>
                <h3> <?php echo $registro['title'] ?> </h3>
                <p> <?php echo $registro['body'] ?> </p>
                <p class='idpSelectAll'> id: <?php echo $registro['id'] ?> </p>
                <a href='http://theslap.local/post/<?php echo $registro['slug'] ?>'>LEIA</a>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
<?php
$components->paginador($conn);
mysqli_close($conn);
?>
