<?php
 $db = mysqli_connect('172.20.0.2', 'root', 'admin') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'erp3' ) or die(mysqli_error($db));
?>