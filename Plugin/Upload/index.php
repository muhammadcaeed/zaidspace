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
    <link href="dropzone-4.0.1/dist/dropzone.css" type="text/css" rel="stylesheet" />
    <link href="dropzone-4.0.1/dist/basic.css" type="text/css" rel="stylesheet" />
    <script src="dropzone-4.0.1/dist/dropzone.js"></script>>
    <script src="dropzone-4.0.1/dist/dropzone-amd-module.js"></script>>
</head>
<body>

<a href="videos.php">Videos</a>
<form action="upload.php" class="dropzone"></form>


</body>
</html>