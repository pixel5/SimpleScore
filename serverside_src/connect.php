<?php
//database connector
mysql_connect("localhost", "USER", "PASS") or die(mysql_error());
mysql_select_db("DB_NAME") or die(mysql_error());

?>
