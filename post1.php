<?php 
	session_start();
	if(isset($_SESSION['FName']))
	{
		include "header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `information`";

		$query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <titlInformation</title>
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
  .container {
    width: 100%;
    background-color: #26262b9e;
  }
  .btn-primary {
    background-color: #673AB7;
	}
	.display-chat{
		background-color:#d69de0;	
        }
	.message{
		background-color: #c616e469;
		color: white;
	}
    .image{
        height:auto;
        width:50%;
    }
    .btn-long {
    width: 100%;
  }
  
  </style>
  </head>
  <body>
  </center></br>
          <a href="index.php" class="btn btn-warning btn-long">Exit</a>

  <div class="display-chat">
 
		<?php
		$query = " select * from information ";
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
        $allowed3 = ['pdf', 'txt', 'doc', 'docx','pptx','php','zip','rar','xls','xlsx','rtf','ppt','odt','md'];
		?>
       <?php
       
        if(in_array($ext, $allowed)){?> <div class="message"> <p> <span><?php echo $data['uploader']; ?> :</span><?php echo $data['info_type']; ?><br>
            	 <?php echo $data['caption']; ?><br><a href="files/<?php echo $data['information']; ?>" ><img src="files/<?php echo $data['information'];?>" class="image" > </a><br>
        <?php echo $data['information']; ?>&nbsp 
<a href="files/<?php echo $data['information']; ?>" download >Download</a><br><span style="float:right"><?php echo $data['uploaded_time']; ?></span> <br></p></div><br>
        <?php 
        
        } elseif(in_array($ext, $allowed1)){?>
          <div class="message"><p><span><?php echo $data['uploader']; ?> :</span><?php echo $data['info_type']; ?> <br><?php echo $data['caption']; ?><br>
 <video width="50%" height="200" controls preload="none" >
	<source src="files/<?php echo $data['information']; ?>" type="video/mp4">
	</video><br>
             &nbsp<?php echo $data['information']; ?> &nbsp  <a href="files/<?php echo $data['information']; ?>" >View</a> &nbsp
 &nbsp <a href="files/<?php echo $data['information']; ?>" download >Download</a>
             <br><span style="float:right"><?php echo $data['uploaded_time']; ?></span><br></p></div>
      <?php   
      
       } elseif(in_array($ext, $allowed2)){?>
                    		<div class="message"><p><span><?php echo $data['uploader']; ?> :</span><?php echo $data['info_type']; ?><br> <?php echo $data['caption']; ?><br>
        <audio controls preload="none" >
         <source src="files/<?php echo $data['information']; ?>" type = "audio/mp3" />
      </audio> <br><br>
         <?php echo $data['information']; ?> &nbsp
                  <a href="files/<?php echo $data['information']; ?>" >View</a> &nbsp
<a href="files/<?php echo $data['information']; ?>" download >Download</a><br><span style="float:right"><?php echo $data['uploaded_time']; ?></span><br></p></div>
      <?php 
      
       }  elseif(in_array($ext, $allowed3)) {?>     <div class="message"><p><span><?php echo $data['uploader']; ?> :</span><?php echo $data['info_type']; ?><br> <?php echo $data['caption']; ?><br>
         &nbsp<?php echo $data['information']; ?> &nbsp<a href="files/<?php echo $data['information']; ?>" >View</a> &nbsp
<a href="files/<?php echo $data['information']; ?>" download >Download</a><br> <span><?php echo $data['uploaded_time']; ?></span></p></div>
		<?php

		}
        else {?>      <div class="message"><p><span><?php echo $data['uploader']; ?> :</span><?php echo $data['info_type']; ?><br>


        <?php echo nl2br($data['information']); ?><br><span style="float:right"><?php echo $data['uploaded_time']; ?></span><br></p></div> 
		<?php
		}
        } ?>
        <?/* $yourTextWithLinks = 'Here is an example for a text (string) that contains one or more url. Just visit http://www.google.com/ http://www.google.com http://google.com and this is the end of the example.';
$text = strip_tags($yourTextWithLinks);

function displayTextWithLinks($s) {
  return preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1">$1</a>', $s);
}

$text = displayTextWithLinks($text);
echo $text; */ ?>
<br><center><a href="#"  class="btn btn-secondary btn-long" ><i class="fa fa-arrow-up" aria-hidden="true"> Back To Top </i></a></center>
    <?} else {?>
        <div class="message">
			<p>
				No Information Uploaded.
			</p>
</div>
   <? }
		?>
        <br>
 <a href="index.php" class="btn btn-warning btn-long">Exit</a>

  </div>



</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>