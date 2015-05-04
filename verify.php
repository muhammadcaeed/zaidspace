<?php
    include 'config.php';
    if(isset($_POST['user']))
    {
        if(isset($_POST['pass']))
        {
            $un=$_POST['user'];
            $pa=$_POST['pass'];

            $strqry="select * from login where username='".$un."' and password='".$pa."'";
            $data=mysql_query($strqry);
            $b=mysql_num_rows($data);
            if($b>0)
            {
                session_start();
                $_SESSION['una']=$un;
                $_SESSION['pas']=$pa;
                header('location:adminpanel.php');
            }
            else
            {
                header('location:login.php?id=Wrong Username or Password');
            }
        }
    }
?>