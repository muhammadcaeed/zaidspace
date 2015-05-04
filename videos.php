<?php include 'config.php'; include 'header.php'; include 'nav.php'; ?>


    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


    <div class="container">
        <div class="flowplayer" data-swf="flowplayer.swf">
            <video>
                <source type="video/mp4" src="<?php if(isset($_GET['hr'])){echo $_GET['hr'];}
                else{
                    $qry="SELECT * FROM videos ORDER BY id DESC LIMIT 1";
                    $data=mysql_query($qry);
                    while($row=mysql_fetch_array($data))
                    {   $vname = $row['name'];
                        echo $row['path'];}}?>">
            </video>
        </div>
        <div class="bs-callout bs-callout-info">
            <h4><?php if(isset($_GET['hr'])){
                    $strqry="SELECT * FROM videos WHERE path='".$_GET['hr']."'";
                    $data2=mysql_query($strqry);
                    $row2=mysql_fetch_array($data2);

                        echo $row2['name'];

                }
                else {
                $stqry = "SELECT * FROM videos ORDER BY id DESC LIMIT 1";
                $dat2 = mysql_query($stqry);
                while ($roww = mysql_fetch_array($dat2)) {
                echo $roww['name'];
                ?></h4>
            <p><?php echo $roww['description'];  ?></p> <?php } } ?>
        </div>

        <div class="row">
            <?php
            if(isset($_GET['cat']))
            {
                $catid = $_GET['cat'];

                if($catid == 'all')
                { ?>
            <div class="page-header">
                <h3>All Videos</h3>
                </div>
                    <?php
                    $vquery = "SELECT * FROM videos ORDER BY id DESC";
                    $vdat = mysql_query($vquery) or die(mysql_error());
                    while($vrow = mysql_fetch_array($vdat))
                    { ?>
                        <div class="col-md-2 thumbnail">
                            <a href="videos.php?hr=<?php echo $vrow['path']; ?>" >
                                <img src="<?php echo $vrow['thumb']; ?>" alt="...">
                            </a>
                            <p><?php echo $vrow['name']; ?></p>
                        </div>
                    <?php  } }
                else {

                ?>
                <div class="page-header">
                    <h3>
                        <?php
                        $caquery = "SELECT * FROM category WHERE cat_id = '" . $catid . "'";
                        $caresult = mysql_query($caquery) or die(mysql_error());
                        $carow = mysql_fetch_array($caresult);
                        echo $carow['cat_name'] . " Videos";
                        ?>
                    </h3>
                </div>
                <?php
                $vquery = "SELECT * FROM videos where cat_id = '" . $catid . "'";
                $vdat = mysql_query($vquery) or die(mysql_error());
                while($vrow = mysql_fetch_array($vdat))
                { ?>
                    <div class="col-md-2 thumbnail">
                        <a href="videos.php?hr=<?php echo $vrow['path']; ?>" >
                            <img src="<?php echo $vrow['thumb']; ?>" alt="...">
                        </a>
                        <p><?php echo $vrow['name']; ?></p>
                    </div>
                <?php  }
            } }
            ?>
        </div>
        <?php
            if(isset($_GET['hr']))
            { ?>
                <div class="fb-comments" data-numposts="5" data-colorscheme="light" data-href="videos.php?cat=<?php echo $_GET['hr']; ?>"></div>
           <?php }
        ?>
    </div>
<?php include 'footer.php'; ?>