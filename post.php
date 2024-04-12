<?php 
	session_start();
	if(isset($_SESSION['FName']))
	{
		include "header2.php"; 
		include "config.php"; 
		
		$query = mysqli_query($conn,$sql);
if (isset($_POST['upload'])) {
    $uploader=$_SESSION['user_account_name'];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "files/" . $filename;
        $file = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['png', 'jpg', 'jpeg',  'gif','bmp','heif','heic','svg','psd','tif','tiff','avif'];
        $allowed1 = ['mp4', '3gp','avi','mov','mpeg','webm','ogv','flv'];
        $allowed2 = ['mp3', 'aac','ogg','wma','wav','wave','flac','m4a'];
        $allowed3 = ['pdf', 'txt', 'doc', 'docx','pptx','php','zip','rar','xls','xlsx','rtf','ppt','odt','md'];
        if(in_array($file, $allowed)){
            $info_type='Image';
        }
         if(in_array($file, $allowed1)){
            $info_type='Video';
        }
         if(in_array($file, $allowed2)){
            $info_type='Aoudio';
        }
         if(in_array($file, $allowed3)){
            $info_type='File';
        }
if(isset($_POST['caption'])){
        $caption=$_POST['caption'];
}
$info_name=$_POST['info_name'];

	// Get all the submitted data from the form
	$sql="INSERT INTO `information`(`info_name`, `info_type`,`information`,`uploader`,`uploaded_time`,`caption`) VALUES ('".$info_name."', '".$info_type."', '".$filename."','".$uploader."',now(), '".$caption."')";

	// Execute query
	mysqli_query($conn, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3>file uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
if (isset($_POST['MSG'])) {
    $uploader=$_SESSION['user_account_name'];
    $information=$_POST['msg'];
    $disc_str = addslashes($information);
    $info_name=$_POST['info_name'];
	$sql="INSERT INTO `information`(`info_name`, `info_type`,`information`,`uploader`,`uploaded_time`,`caption`) VALUES ('".$info_name."', 'Text', '".$disc_str."','".$uploader."',now(), 'no_caption')";
	if (mysqli_query($conn, $sql)) {
		echo "<h3>Text uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload Text Information!</h3>". mysqli_error($conn);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

  h2{
color:white;
  }
  label{
color:white;
  }
  span{
	  color:#673ab7;
	  font-weight:bold;
  }

  .btn-primary {
    background-color: #673AB7;
	}
	
	.message{
		background-color: #c616e469;
		color: white;
		border-radius: 5px;

	}
           .image{
 height:auto;
 width:75%;
}
    .btn-long {
    width: 100%;
  }
  </style>
  </head>
  <body>
<div class="container">
  </center></br>
  <div class="display-chat">
  <a href="index.php" class="btn btn-warning btn-long">Exit</a>
  <br>
  <br>
  <a href="#last-section" class="btn btn-primary btn-long"><i class="fa fa-arrow-down" aria-hidden="true"> | Go to Last Part</i></a>

		<?php
		$query = " select * from information";
		$result = mysqli_query($conn, $query);
          if(mysqli_num_rows($result)>0)
	{
$i=1;
		while ($data = mysqli_fetch_assoc($result)) {?>
           <?php  echo $i++;
            $ext = pathinfo($data['information'], PATHINFO_EXTENSION);
        $allowed = ['png', 'jpg', 'jpeg',  'gif','bmp','heif','heic','svg','psd','tif','tiff','avif'];
        $allowed1 = ['mp4', '3gp','avi','mov','mpeg','webm','ogv','flv'];
        $allowed2 = ['mp3', 'aac','ogg','wma','wav','wave','flac','m4a'];
        $allowed3 = ['pdf', 'txt', 'doc', 'docx','pptx','php','zip','rar','xls','xlsx','rtf','ppt','odt','md',];
		?>
       <?php if(in_array($ext, $allowed)){?> <div class="message"> <p><span><?php echo $data['uploader']; ?> :</span><?php echo $data['info_type']; ?><br>
            <?php echo $data['caption']; ?><br> <a href="files/<?php echo $data['information']; ?>" > <img src="files/<?php echo $data['information'];?>" class="image" ></a> <br><br>
    <?php echo $data['information']; ?>&nbsp
     &nbsp
<a href="files/<?php echo $data['information']; ?>"  class="btn btn-info btn-lg" download > <span class="glyphicon glyphicon-download"></span> Download</a><br><span style="float:right"><?php echo $data['uploaded_time']; ?></span><br> </p></div><br>
        <?php } elseif(in_array($ext, $allowed1)){?>
                    		<div class="message"><p><span><?php echo $data['uploader']; ?> :</span><?php echo $data['info_type']; ?><br> <?php echo $data['caption']; ?><br>
            <video width="300" height="200" controls preload="none" >
	<source src="files/<?php echo $data['information']; ?>" type="video/mp4">
	</video><br><br>
         <?php echo $data['information']; ?>
                  <a href="files/<?php echo $data['information']; ?>" target="_blank">View</a> &nbsp
<a href="files/<?php echo $data['information']; ?>" download >Download</a><br><span style="float:right"><?php echo $data['uploaded_time']; ?></span><br></p></div>
      <?php  } elseif(in_array($ext, $allowed3)) {?>     <div class="message"><p><span><?php echo $data['uploader']; ?> :</span><?php echo $data['info_type']; ?><br> <?php echo $data['caption']; ?><br>
            <?php echo $data['information']; ?> &nbsp
        <a href="files/<?php echo $data['information']; ?>" >View</a> &nbsp
<a href="files/<?php echo $data['information']; ?>" download >Download</a> <br><span style="float:right"><?php echo $data['uploaded_time']; ?></span><br> </p></div>
		<?php
		}
         elseif(in_array($ext, $allowed2)){?>
                    		<div class="message"><p><span><?php echo $data['uploader']; ?> :</span><?php echo $data['info_type']; ?><br> <?php echo $data['caption']; ?><br>
        <audio controls preload="none" >
         <source src="files/<?php echo $data['information']; ?>" type = "audio/mp3" />
      </audio> <br><br>
         <?php echo $data['information']; ?> &nbsp
                  <a href="files/<?php echo $data['information']; ?>" >View</a> &nbsp
<a href="files/<?php echo $data['information']; ?>" download >Download</a><br><span style="float:right"><?php echo $data['uploaded_time']; ?></span><br></p></div>
      <?php  }
        else {?>      <div class="message"><p><span><?php echo $data['uploader']; ?> :</span><?php echo $data['info_type']; ?><br>
        <?php echo nl2br($data['information']); ?> &nbsp <br><span style="float:right"><?php echo $data['uploaded_time']; ?></span><br></p></div>
		<?php
		}
        }?><br><center><a href="#"  class="btn btn-secondary btn-long" ><i class="fa fa-arrow-up" aria-hidden="true">Back To Top </i></a></center>
<br> <a href="index.php" class="btn btn-warning btn-long">Exit</a>

    <?} else {?>
        <div class="message">
			<p>
				No Information Uploaded.
			</p>
</div>
   <? }
		?>

  </div>
<br>
<?php echo "<h3> Upload Video ,Audio, Image and Other File </h3>"; ?>
	<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
                        	<input class="form-control" type="text"  name="info_name" placeholder="Enter Information Name" value="" required /><br>
            	<input class="form-control" type="text"  name="caption" placeholder="Add Caption To File" value="" /><br>
				<input class="form-control" type="file" required name="uploadfile" value="" />
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
			</div>
		</form>
	<br><hr>
    <?php  		echo "<h3> Upload Text !</h3>"; ?>
    <form method="POST">
        <input class="form-control" type="text"  name="info_name" placeholder="Enter Information Name" value="" required /><br>
        <textarea name="msg" class="form-control" placeholder="Upload Text Information  here..." required ></textarea>
       				<button class="btn btn-primary" type="submit" name="MSG">UPLOAD</button>
    </form >
  <script>  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
<a id="last-section"></a>
</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>