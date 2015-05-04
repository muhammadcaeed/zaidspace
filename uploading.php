<?php
session_start();
if(!isset($_SESSION["una"]))
{
    if(!isset($_SESSION["pas"]))
    {
        header('location:login.php');
    }
}

?>


<?php
include 'config.php';

$na=$_FILES["thumb"]["name"];
$tn=$_FILES["thumb"]["tmp_name"];
$er=$_FILES["thumb"]["error"];

if($er==0)
{
    move_uploaded_file($tn,"thumbnails/".$na);
}

$naa=$_FILES["path"]["name"];
$tnn=$_FILES["path"]["tmp_name"];
$err=$_FILES["path"]["error"];

if($err==0)
{
    move_uploaded_file($tnn,"videos/".$naa);
}


$name=$_POST["vname"];
$desc=$_POST["desc"];
$thumb=$na;
$path=$naa;
$n="thumbnails/".$thumb;
$m="videos/".$path;

$typ=$_POST["typ"];

$strqry="insert into videos(cat_id,name, desc, path,thumb) values('$typ','$name','$desc','$m','$n')";
mysql_query($strqry);

header('location:adminpanel.php?cc=created');
?>
</body>
</html>