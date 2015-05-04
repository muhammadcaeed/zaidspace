<body>
<header>
    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation" style="font-family: 'Verdana', 'sans-serif';">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand" href="index.php"><span><img src="images/fav.png" width="20" ></span><span>zaidspace</span></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-menubuilder pull-right">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php">Home</a>
                    </li>
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
                            <li><a href="videos.php?cat=all">All Videos</a></li>
                        </ul>
                    </li>
                    <li><a href="zaid.php">About Zaid</a>
                    </li>
                    <li><a href="adminpanel.php">Admin Panel</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>