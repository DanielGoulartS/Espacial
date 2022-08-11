<hr>
<div id="footerdiv">
    <ul class="footerList">
    <li class="footerListLi"><a>&copy; 2021</a></li>
    </ul>
</div>
</body>
</html>
<?php
if ($dbConnection->IsConnected()) {
    $dbConnection->CloseConnection();
}
