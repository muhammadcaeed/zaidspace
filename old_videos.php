<?php include 'config.php'; include 'header.php'; include 'nav.php'; ?>

<div class="container">
    <div class="flowplayer" data-swf="flowplayer.swf">
        <video>
            <source type="video/mp4" src="<?php if(isset($_GET['hr'])){echo $_GET['hr'];}
                else{
                $qry="SELECT * FROM videos ORDER BY id DESC LIMIT 1";
                $data=mysql_query($qry);
                while($row=mysql_fetch_array($data))
                {echo $row['path'];}}?>">
        </video>
    </div>
    <div class="bs-callout bs-callout-info">
        <h4><?php if(isset($_GET['hr'])){
                $strqry="SELECT * FROM videos WHERE path='".$_GET['hr']."'";
                $data2=mysql_query($strqry);
                while($row2=mysql_fetch_array($data2))
                {
                    echo $row2['name'];
                }
            }
            else {
                $stqry = "SELECT name FROM videos ORDER BY id DESC LIMIT 1";
                $dat2 = mysql_query($stqry);
                while ($roww = mysql_fetch_array($dat2)) {
                    echo $roww['name'];
                }
            }
            ?></h4>
        <p>Description</p>
    </div>

    <div class="page-header">
        <h1>Latest Videos</h1>
    </div>
    <div class="row">
        <?php
            $qry1="SELECT *
                   FROM videos
                   ORDER BY id DESC
                   LIMIT 4";
            $data1=mysql_query($qry1);
            if(!$data1)
            {
                die("Error: ".mysql_error());
            }
            else
            {
                while($row1=mysql_fetch_array($data1))
                { ?>
        <div class="col-md-3 thumbnail">
            <a href="videos.php?hr=<?php echo $row1['path']; ?>" >
                <img src="<?php echo $row1['thumb']; ?>" alt="...">
            </a>
            <p><?php echo $row1['name']; ?></p>
        </div>
        <?php } } ?>
     </div>
    <div class="page-header">
        <h1>Featured Videos</h1>
    </div>
    <div class="row">
        <?php
        $qry1="SELECT *
                   FROM videos
                   WHERE typ LIKE 'featured'
                   ORDER BY id DESC";
        $data1=mysql_query($qry1);
        if(!$data1)
        {
            die("Error: ".mysql_error());
        }
        else
        {
            while($row1=mysql_fetch_array($data1))
            { ?>
                <div class="col-md-3 thumbnail">
                    <a href="videos.php?hr=<?php echo $row1['path']; ?>" >
                        <img src="<?php echo $row1['thumb']; ?>" alt="...">
                    </a>
                    <p><?php echo $row1['name']; ?></p>
                </div>
            <?php } } ?>
    </div>
    <div class="page-header">
        <h1>Popular Videos</h1>
    </div>
    <div class="row">
        <?php
        $qry1="SELECT *
                   FROM videos
                   WHERE typ LIKE 'popular'
                   ORDER BY id DESC";
        $data1=mysql_query($qry1);
        if(!$data1)
        {
            die("Error: ".mysql_error());
        }
        else
        {
            while($row1=mysql_fetch_array($data1))
            { ?>
                <div class="col-md-3 thumbnail">
                    <a href="videos.php?hr=<?php echo $row1['path']; ?>" >
                        <img src="<?php echo $row1['thumb']; ?>" alt="...">
                    </a>
                    <p><?php echo $row1['name']; ?></p>
                </div>
            <?php } } ?>
    </div>


</div>
<?php include 'footer.php'; ?>