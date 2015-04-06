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

$naa=$_FILES["thumb"]["name"];
$tnn=$_FILES["thumb"]["tmp_name"];
$err=$_FILES["thumb"]["error"];

if($err==0)
{
    move_uploaded_file($tnn,"videos/".$naa);
}

?>

<?php
$name=$_POST["vname"];
$thumb=$na;
$path=$naa;
$typ=$_POST["typ"];
$n="thumbnails/".$thumb;
$m="vidoes/".$path;
$strqry="insert into videos(name,path,thumb,typ) values('$name','$m','$n','$typ')";
mysql_query($strqry);

header('location:adminpanel.php?cc=created');

?>
</body>
</html>