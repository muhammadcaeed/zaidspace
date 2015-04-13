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

<a href="videosvideos.php">Videos</a>
<form action="videosindex.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>

<?php
if(isset($_POST['submit']))
{
    $name = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];

    move_uploaded_file($temp,"uploaded/".$name);
    $url = "http://localhost/zaidspace/uploaded/$name";

    $sql = "INSERT INTO video(id,name,path) VALUES ('','$name','$url')";
    $ret = mysql_query( $sql, $con );
    if(! $ret )
    {
        die('Could not enter data: ' . mysql_error());
    }
    echo "Entered data successfully\n";
    mysql_close($con);
}
?>

<?php
if(isset($_POST['submit']))
{
    echo "<br />".$name."has been uploaded";
}
?>

</body>
</html>