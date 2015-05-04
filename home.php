<div class="content box effect7" style="margin-top:-20px;" >

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
        <h3>Latest Videos</h3>
    </div>
    <div class="row">
        <?php
        $qry1="SELECT *
                   FROM videos
                   ORDER BY id DESC
                   ";
        $data1=mysql_query($qry1);
        if(!$data1)
        {
            die("Error: ".mysql_error());
        }
        else
        {
            while($row1=mysql_fetch_array($data1))
            { ?>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <?php
                            $path = $row1['path'];
                        ?>
                        <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo $row1['thumb'];?>" alt="..."></a>
                        <div class="caption text-justify" style="height: 40px; margin-top:-10px;">
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
                                <a href="videos.php?cat=all"><button type="button" class="btn btn-primary">All Videos</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
            <?php
            }
        } ?>

    </div>
</div>
