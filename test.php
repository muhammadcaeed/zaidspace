<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
    	          <table width="400" cellpadding="3" >
      	            <tr>
            	              <td colspan="3"> </td>
            	            </tr>
        	            <tr>
            	              <td width="10" rowspan="2"> </td>
            	              <td width="120"><strong>Choose a file to upload:</strong></td>
            	              <td width="242"><input type="file" name="uploaded_file" /></td>
            	            </tr>
        	            <tr>
            	              <td> </td>
            	              <td> </td>
            	            </tr>
        	            <tr>
            	              <td> </td>
            	              <td> </td>
            	              <td><input type="submit" name="sendForm" value="Upload File" />
                	                <br /></td>
            	            </tr>
        	            <tr>
            	              <td colspan="3"> </td>
            	            </tr>
        	          </table>
    	</form>
	<?php

	  // C:\wamp\www\scriptDir\uploads\;

	  $idir = "C:/wamp/www/Testvideo/videos/";   // Path To Images Directory
	  $tdir = "C:/wamp/www/Testvideo/ThumbVideos/";   // Path To Thumbnails Directory
	  $twidth = "200";   // Maximum Width For Thumbnail Images
	  $theight = "150";   // Maximum Height For Thumbnail Images

	  error_reporting(E_ALL ^ E_NOTICE); // Show all major errors.

	  // Check to see if the button has been pressed
	  if (!empty($_REQUEST['sendForm']))
	  {
    	    // Assign the name to a variable
	    $name = $_FILES['uploaded_file']['name'];
	    // Assign the tmp_name to a variable
	    $tmp_name = $_FILES['uploaded_file']['tmp_name'];
	    // Assign the error to a variable
	    $error = $_FILES['uploaded_file']['error'];
	    // Assign the size to a variable
	    $size = $_FILES['uploaded_file']['size'];
	    // No trailing slash
	    $uploadFilesTo = 'videos';
	    // Create safe filename
	    $name = ereg_replace('[^A-Za-z0-9.]', '-', $name);
	    // Disallowed file extensions
	    //what files you don't want upoad... leave this alone and you should be fine but you could add more
	    $naughtyFileExtension = array("php", "php3", "asp", "inc", "txt", "wma","js", "exe", "jsp", "map", "obj", " ", "", "html", "mp3", "mpu", "wav", "cur", "ani");  // Returns an array that includes the extension

	    //Allowable file Mime Types. Add more mime types if you want
	    $FILE_MIMES = array('video/mpg','video/avi','video/mpeg','video/wmv');
	    //Allowable file ext. names. you may add more extension names.
	    $FILE_EXTS = array('.avi','.mpg','.mpeg','.asf','.wmv','.3gpp') ;
	    $file_ext = strtolower(substr($name,strrpos($name,".")));
    // to check the extensio
	    if (!in_array($file_type, $FILE_MIMES) && !in_array($file_ext,$FILE_EXTS) )
        	    $message = "Sorry, $file_name($file_type) is not allowed to be uploaded.";

	    $fileInfo = pathinfo($name);
	    // Check extension
	    if (!in_array($fileInfo['extension'], $naughtyFileExtension))
        	    {
        	      // Get filename
	      $name = getNonExistingFilename($uploadFilesTo, $name);
	      // Upload the file
	      if (move_uploaded_file($tmp_name, $uploadFilesTo.'/'.$name))
            	      {
            	          // Show success message
	          echo '<center><p>Your Video File has uploaded successfully<br />'.$uploadFilesTo.'/'.$name.'</p></center>';
	      }
	      else
	      {
	          // Show failure message
	          echo '<center><p>File failed to upload to /'.$name.'</p></center>';
	      }
	    }
	    else
	    {
	        // Bad File type
	        echo '<center><p>The file uses an extension we don\'t allow.</p></center>';
	    }
	  }

	  // Functions do not need to be inline with the rest of the code
	  function getNonExistingFilename($uploadFilesTo, $name)
	  {
	      if (!file_exists($uploadFilesTo . '/' . $name))
	          return $name;

	      return getNonExistingFilename($uploadFilesTo, rand(100, 200) . '_' . $name);
	  }
?>