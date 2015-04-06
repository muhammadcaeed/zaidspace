<?php include 'admin_header.php'; include 'admin_nav.php'; ?>
<div class="container">
    <?php
    if(isset($_GET['id'])){ ?>
        <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Video Deleted Successfully!
        </div>
    <?php } ?>
    <?php
    if(isset($_GET['cc'])){ ?>
        <div class="alert alert-success" role="alert">
            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
            <span class="sr-only">Success:</span>
            Video Uploaded Successfully!
        </div>
    <?php } ?>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Videos</div>
        <div class="panel-body">

        </div>

        <?php
        $qry="SELECT *
                   FROM videos
                   ORDER BY id DESC";
        $data=mysql_query($qry);
        if(!$data)
        {
            die("Error: ".mysql_error());
        }
        else
        { ?> <table class="table">
            <tr>
                <th>ID</th>
                <th>Video</th>
                <th>Path</th>
                <th>Thumbnail
                <th>Type</th>
                <th>Options</th>
            </tr>
            <?php  while($row=mysql_fetch_array($data)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['path']; ?></td>
                    <td><?php echo $row['thumb']; ?></td>
                    <td><?php echo $row['typ']; ?></td>
                    <td><a href="delete.php?de=<?php echo $row['id']; ?>"><button class="btn btn-sm btn-danger">DELETE</button></a></td>
                </tr>

            <?php } } ?>
        </table>
    </div>
</div>
</body>