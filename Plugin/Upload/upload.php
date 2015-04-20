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
<?php
$ds          = DIRECTORY_SEPARATOR;  //1

$storeFolder = 'uploads';   //2

if (!empty($_FILES))
{
    $name = $_FILES['file']['name'];
    $tempFile = $_FILES['file']['tmp_name'];
    move_uploaded_file($tempFile,"uploads/".$name);
    $url = "http://localhost/Upload/uploads/$name";
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