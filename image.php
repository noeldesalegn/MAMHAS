<?php   session_start(); 
if(isset($_SESSION['id'])){ 
          if (isset($_POST['upload'])) {
        $id = $_SESSION['id'];
	$file_name = $_FILES["image_name"]["name"];
	$tempname = $_FILES["image_name"]["tmp_name"];
	$folder = "images/" . $file_name;
$imageFileType = pathinfo($file_name,PATHINFO_EXTENSION);
if($imageFileType != "gif" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "jpg" && $imageFileType != "svg")
{
    $msg="File Format Not Suppoted Please Upload Image File";
} 
else {
	// Get all the submitted data from the form
	$sql = "update user set photo='$file_name'  WHERE id=$id ";

	// Execute query
	mysqli_query($conn, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
  echo "<script>setTimeout(function(){window.location.href='view_profile.php';},1);</script>";
    }
    else {
            echo "<script>alert('Error Occured Please try again');</script>"; 
                                    
	}
}
      }
// If upload button is clicked ...

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Inportan to make website responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link to css file -->
    <title>View Profile</title>

<style>
.responsive {
  width: 100%;
  height: auto;
}
    .msg {color: #FF0001;}  

</style>
<body style="background-color:#ccccff;">

<?php  
		include "config.php"; 
        		include "header2.php"; 
          $id = $_SESSION['id'];
                    $query1 = " select photo from user WHERE id=$id ";
		$result1 = mysqli_query($conn, $query1);
        $data = mysqli_fetch_assoc($result1); ?>
        			<img src="images/<?php echo $data['photo']; ?>" class="responsive">
                    <a href="images/<?php echo $data['photo'];  ?>" download  class="btn btn-info btn-lg" >Download</a><br>
                          <b> <span class="msg"> <?php echo $msg; ?></span> 
	<div id="content">
		<form method="POST" action="" enctype="multipart/form-data">
        <p>Update Profile Picture</p>  <br>
			<div class="form-group">
				<input class="form-control" type="file" name="image_name" value="" required accept="image/x-png,image/gif,image/jpeg,image/jpg" />
			</div><br>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="upload">Update</button>
            <a href="view_profile.php" class="btn btn-warning"><i class="fa fa-ban" aria-hidden="true"> Cancel</i></a>
			</div>
		</form>
	</div>
                    </body>
                    </html>
                    <?php }
else {
	    $_SESSION['flash_message']="Please Login";
		header('location:index.php');
  }
        
?>
