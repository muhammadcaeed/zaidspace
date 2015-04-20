<?php
$con=mysql_connect("localhost","saeed","saeed");
if(!$con)
{
    die("Error:" .mysql_error());
}


$db=mysql_select_db("videos", $con);
if(!$db)
{
    die("Error: Database not selected.");
}
else
{
    echo("Successful!");
}
?>
<!doctype html>
<html>
<head>
    <title>Video Upload</title>
</head>
<body>
<?php
$ds = "SELECT * FROM video";
$query = mysql_query( $ds, $con);
while($row = mysql_fetch_assoc($query))
{
    $id = $row['id'];
    $name = $row['name'];

    echo "<a href='watch.php?id=$id'>$name</a><br />";
}
?>
</body>
</html>