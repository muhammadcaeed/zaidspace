<?php include 'config.php'; include 'header.php'; include 'nav.php';

if(isset($_GET['catt'])=='home')
{
    $a=$_GET['catt'];
    include $a.'.php';
}
elseif(isset($_GET['catt'])=='videos')
{
    $a=$_GET['catt'];
    include $a.'.php';
}
elseif(isset($_GET['catt'])=='zaid')
{
    $a=$_GET['catt'];
    include $a.'.php';
}
else
{
    include 'home.php';
}

?>

<?php include 'footer.php'; ?>