<?php
$con=mysql_connect("localhost","saeed","saeed");
if(!$con)
{
    die("Error:" .mysql_error());
}
$db=mysql_select_db("zaidalit", $con);
if(!$db)
{
    die("Error: Database not selected.");
}
?>