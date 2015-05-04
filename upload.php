<?php// include 'admin_header.php'; include 'admin_nav.php'; ?>
<div class="container middle">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="uploading.php">
                <fieldset>
                    <legend>Upload Video</legend>

                    <div class="form-group">
                        <label for="vname" class="col-lg-2 control-label">Video Name</label>

                        <div class="col-lg-10">
                            <input id="vname" type="text" class="form-control" name="vname" placeholder="video name" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="desc" class="col-lg-2 control-label">Description</label>

                        <div class="col-lg-10">
                            <textarea id="desc" name="desc" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vname" class="col-lg-2 control-label">Type</label>

                        <div class="col-lg-10">
                            <?php
                            $qry = "SELECT * FROM category";
                            $result = mysql_query($qry) or die(mysql_error());
                            while($row = mysql_fetch_array($result))
                            { ?>
                                <input id="typ" type="radio" name="typ" value="<?php echo $row['cat_id']; ?>" >&nbsp;<button class="btn btn-default btn-sm"><?php echo $row['cat_name']; ?></button>
                            <?php }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10">
                            <div class="btn-group">
                                <a class="btn btn-default">Thumbnail</a>
                <span class="btn btn-primary btn-file">
                    Browse&hellip; <input type="file" name="thumb" id="thumb" class="form-control" required>
                </span>
                            </div>
                        </div>
                </div>
                    <div class="form-group">

                        <div class="col-lg-10">
                            <div class="btn-group">
                                <a class="btn btn-default">Path</a>
                <span class="btn btn-primary btn-file">
                    Browse&hellip; <input type="file" name="path" id="path" class="form-control" required>
                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-primary btn-block" type="submit" name="btnSubmit">Submit</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
    <?php
    if(isset($_GET['id'])){ ?>
        <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            Enter a valid email address
        </div>
    <?php } ?>
</div>
</body>
</html>