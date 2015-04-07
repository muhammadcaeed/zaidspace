<div class="content box effect7" style="margin-top:53px;" >

    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
    <div id="wowslider-container0" >

        <div class="ws_images"><ul>
                <li><a><img src="slider/data0/images/slider1.jpg" alt="full screen slider" title="" id="wows0_0"/></a></li>
                <li><img src="slider/data0/images/slider2.png" alt="" title="" id="wows0_1"/></li>
            </ul></div>
        <div class="ws_bullets"><div>
                <a href="#" title="">1</a>
                <a href="#" title="">2</a>
            </div></div>

        <div class="ws_shadow"></div>
    </div>

    <script type="text/javascript" src="slider/engine0/wowslider.js"></script>
    <script type="text/javascript" src="slider/engine0/script.js"></script>
    <!-- End WOWSlider.com BODY section -->
</div>

<div class="container">
    <div class="page-header">
        <h1>eideos</h1>
    </div>
    <div class="row">
        <?php
        $typ1="featured";
        $qry1="SELECT *
                   FROM videos
                   WHERE typ LIKE 'featured'
                   ORDER BY id DESC
                   LIMIT 1";
        $data1=mysql_query($qry1);
        if(!$data1)
        {
            die("Error: ".mysql_error());
        }
        else
        {
            while($row1=mysql_fetch_array($data1))
            { ?>
                <div class="col-sm-6 col-md-4">
                    <h3>Featured</h3>
                    <div class="thumbnail">
                        <a href="<?php echo "#?cat=".$row1['typ'];?>" data-toggle="modal" data-target="#myModal"><img src=<?php echo $row1['thumb'];?> width="300px" height="300px" alt="..."></a>
                        <div class="caption">
                            <h4><?php echo $row1['name']; ?></h4>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $row1['name'];?></h4>
                            </div>
                            <div class="flowplayer" data-swf="flowplayer/flowplayer.swf" >
                                <video>
                                    <source type="video/mp4" src="<?php echo $row1['path']; ?>">
                                </video>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href="videos.php"><button type="button" class="btn btn-primary">All Videos</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
            <?php
            }
        }
        $qry2="SELECT *
                   FROM videos
                   WHERE typ LIKE 'popular'
                   ORDER BY id DESC
                   LIMIT 1";
        $data2=mysql_query($qry2);
        if(!$data2)
        {
            die("Error: ".mysql_error());
        }
        else
        {
            while($row2=mysql_fetch_array($data2))
            { ?>
                <div class="col-sm-6 col-md-4">
                    <h3>Popular</h3>
                    <div class="thumbnail">
                        <a href="" data-toggle="modal" data-target="#myModalPopular"><img src=<?php echo $row2['thumb'];?> width="300px" height="300px" alt="..."></a>
                        <div class="caption">
                            <h4><?php echo $row2['name']; ?></h4>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModalPopular" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $row2['name'];?></h4>
                            </div>
                            <div class="flowplayer" data-swf="flowplayer/flowplayer.swf" >
                                <video>
                                    <source type="video/mp4" src="<?php echo $row2['path']; ?>">
                                </video>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href="videos.php"><button type="button" class="btn btn-primary">All Videos</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
            <?php
            }
        }
        $qry3="SELECT *
                   FROM videos
                   WHERE typ LIKE 'latest'
                   ORDER BY id DESC
                   LIMIT 1";
        $data3=mysql_query($qry3);
        if(!$data3)
        {
            die("Error: ".mysql_error());
        }
        else
        {
            while($row3=mysql_fetch_array($data3))
            { ?>
                <div class="col-sm-6 col-md-4">
                    <h3>Latest</h3>
                    <div class="thumbnail">
                        <a href="" data-toggle="modal" data-target="#myModal"><img src=<?php echo $row3['thumb'];?> width="300px" height="300px" alt="..."></a>
                        <div class="caption">
                            <h4><?php echo $row3['name']; ?></h4>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModalLatest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $row3['name'];?></h4>
                            </div>
                            <div class="flowplayer" data-swf="flowplayer/flowplayer.swf" >
                                <video>
                                    <source type="video/mp4" src="<?php echo $row3['path']; ?>">
                                </video>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href="videos.php"><button type="button" class="btn btn-primary">All Videos</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
            <?php
            }
        }

        ?>
    </div>
</div>