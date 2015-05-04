<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">ZaidAliT</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="videos.php?catt=videos">Videos</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Videos <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php
                            include 'config.php';
                            $qry = "SELECT * FROM category";
                            $result = mysql_query($qry) or die(mysql_error());
                            while($row = mysql_fetch_array($result))
                            { ?>
                                <li><a href="videos.php?cat=<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></a></li>
                            <?php }
                            ?>
                            <li class="divider"></li>
                            <li><a href="videos.php?catt=videos">All Videos</a></li>
                        </ul>
                    </li>
                    <li><a href="zaid.php?catt=zaid">Who is Zaid?</a></li>
                    <li><a href="login.php">Admin Panel</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>