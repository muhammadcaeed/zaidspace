<?php include 'admin_header.php'; include 'admin_nav.php'; ?>
<div class="container">
    <?php
        if(isset($_GET['adminpanel']) == 'upload'){
            $a=$_GET['adminpanel'];
            include $a.'.php';
        }
        elseif(isset($_GET['adminpanel']) == 'logout'){
            $a=$_GET['adminpanel'];
            include $a.'.php';
        }
        else {
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
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Category</th>
                <th>Options</th>
            </tr>
            <?php  while($row=mysql_fetch_array($data)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><img src="<?php echo $row['thumb']; ?>" width="30"></td>
                    <?php
                    $cid = $row['cat_id'];
                    $qu = "SELECT * FROM category WHERE cat_id = '" . $cid . "'";
                    $ru = mysql_query($qu) or die(mysql_error());
                    $cc = mysql_fetch_array($ru);
                    ?>
                    <td><?php echo $cc['cat_name']; ?></td>
                    <td><a href="delete.php?de=<?php echo $row['id']; ?>"><button class="btn btn-sm btn-danger">DELETE</button></a></td>
                </tr>

            <?php } } ?>
        </table>
    </div>
       <?php } ?>


</div>
</body>