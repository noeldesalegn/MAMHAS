<?php 
	session_start();
	if(isset($_SESSION['FName']))
	{
		include "header2.php"; 
		include "config.php"; 
if (isset($_POST['upload'])) {
    $uploader=$_SESSION['user_account_name'];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "files/" . $filename;
        $file = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['png', 'jpg', 'jpeg',  'gif','bmp','heif','heic','svg','psd','tif','tiff'];
        $allowed1 = ['mp4', '3gp','avi','mov','mpeg','webm','ogv','flv'];
        $allowed2 = ['mp3', 'aac','ogg','wma','wav','wave','flac','m4a'];
        $allowed3 = ['pdf', 'txt', 'doc', 'docx','pptx','php','zip','rar','xls','xlsx','rtf','ppt','odt','md',];
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
if (isset($_POST['MSG'])){
    $sender=$_SESSION['user_account_name'];
    $reciever=$_GET['user_account_name'];
    $reciever_id=$_GET['id'];
	$sender_id=$_SESSION['id'];
    $msg=$_POST['msg'];
    $disc_str = addslashes($msg);
	$sql="INSERT INTO `message` ( `sender_id`, `reciever_id`,`sender`, `reciever`, `msgcontent`) VALUES ( '$sender_id', '$reciever_id','$sender', '$reciever', ' $disc_str')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		$msg="your Message Sent";
	}
	else
	{
		echo "Something went wrong". mysqli_error($conn).$reciever_id;
	}
	
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Advice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<style>
body{
     background: linear-gradient(45deg, red, blue);
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;}

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
    	.message1{
		background-color:#5896EB;
		color: white;
		border-radius: 5px;
 
	}
    
           .image{
 height:auto;
 width:75%;
}
/* QuickReset */ * {margin: 0; box-sizing: border-box;}

.chat {
  --rad: 20px;
  --rad-sm: 3px;
  font: 16px/1.5 sans-serif;
  display: flex;
  flex-direction: column;
  padding: 20px;
  max-width: 1000px;
  margin: auto;
}

.msg {
  position: relative;
  max-width: 75%;
  padding: 7px 15px;
  margin-bottom: 2px;
}

.msg.sent {
  border-radius: var(--rad) var(--rad-sm) var(--rad-sm) var(--rad);
  background: #42a5f5;
  color: #fff;
  /* moves it to the right */
  margin-left: auto;
}

.msg.rcvd {
  border-radius: var(--rad-sm) var(--rad) var(--rad) var(--rad-sm);
  background: #f1f1f1;
  color: #555;
  /* moves it to the left */
  margin-right: auto;
}

/* Improve radius for messages group */

.msg.sent:first-child,
.msg.rcvd+.msg.sent {
  border-top-right-radius: var(--rad);
}

.msg.rcvd:first-child,
.msg.sent+.msg.rcvd {
  border-top-left-radius: var(--rad);
}


/* time */

.msg::before {
  content: attr(data-time);
  font-size: 0.8rem;
  position: absolute;
  bottom: 100%;
  color: #888;
  white-space: nowrap;
  /* Hidden by default */
  display: none;
}

.msg.sent::before {
  right: 15px;
}

.msg.rcvd::before {
  left: 15px;
}


/* Show time only for first message in group */

.msg:first-child::before,
.msg.sent+.msg.rcvd::before,
.msg.rcvd+.msg.sent::before {
  /* Show only for first message in group */
  display: block;
}
  </style>
  </head>
  <body>

 
		<?php
     
		$query = " select * from message where ( sender_id='".$_SESSION['id']."' or sender_id='".$_GET['id']."' ) and ( reciever_id='".$_SESSION['id']."' or reciever_id='".$_GET['id']."' ) ";
		$result = mysqli_query($conn, $query);
          if(mysqli_num_rows($result)>0){
	while($row= mysqli_fetch_assoc($result))	
		{
?>
<?php if($row['sender']==$_SESSION['user_account_name']){ ?>
    <div class="chat">
		<div class="msg sent">	
				<?php echo nl2br($row['msgcontent'] ) ; ?><br>
                <span style="float:right"><?php echo $row['time']; ?></span>


		</div></div>

<?php } else {?>
		<div class="chat"><div class="msg rcvd">
			
				<?php echo nl2br($row['msgcontent'])  ; ?><br>
                <span style="float:right"><?php echo $row['time']; ?></span>


		</div></div>
        <?php }?>
        <?php } }
	else  {?>
        <div class="message">
			<p>
No Message Available </p>
</div>
   <?php }
		?>

  </div>
  				<span><?php echo $msg; ?></span>
<br>
    <form method="POST">
        <textarea name="msg" class="form-control" placeholder="Write Message here..." required ></textarea><br>
       				<button class="btn btn-primary" type="submit" name="MSG">Send</button>
        <a href="index.php" class="btn btn-warning">Exit</a>
    </form >
    <?php //echo $_GET['user_account_name'];?>
        <?php // echo $_GET['id'];?>
</body>
  <script>  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>