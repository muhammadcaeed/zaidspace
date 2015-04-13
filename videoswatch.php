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
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $ds = "SELECT * FROM video WHERE id='$id'";
    $query = mysql_query( $ds, $con);
    while($row = mysql_fetch_assoc($query))
    {
        $name = $row['name'];
        $url = $row['path'];
    }
    echo("You are watching ".$name."<br/>");
    echo("<embed src='$url' width='560' height='315'></embed>");

}
else
{
    echo("Error!");
}
?>

</body>
</html>