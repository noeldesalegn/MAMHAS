<?php

$msg = "";
 include('config.php');
// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "images/" . $filename;


	// Get all the submitted data from the form
	$sql = "INSERT INTO image (filename) VALUES ('$filename')";

	// Execute query
	mysqli_query($conn, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3>file uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
if (isset($_POST['web'])) {
    $url=$_POST['url'];
    if (! filter_var($url, FILTER_VALIDATE_URL)) {
		echo "<h3>$url  is not Valid Url</h3>";
}
else {
	$sql = "INSERT INTO image (filename) VALUES ('$url')";
	if (mysqli_query($conn, $sql)) {
		echo "<h3>Url uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload URL!</h3>". mysqli_error($conn);
	}
}
}
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<head>
	<title>File Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
	<div id="content">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<input class="form-control" type="file" required name="uploadfile" value="" />
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
			</div>
		</form>
	</div><br>
    <form method="POST">
       <input type="text" class="form-control"  name="url"  placeholder="Enter Url">
       				<button class="btn btn-primary" type="submit" name="web">UPLOAD</button>
    </form >
	<div id="display-image">
		<?php
		$query = " select * from image ";
		$result = mysqli_query($conn, $query);
$i=1;
		while ($data = mysqli_fetch_assoc($result)) {
            echo $i++;
            $ext = pathinfo($data['filename'], PATHINFO_EXTENSION);
        $allowed = ['png', 'jpg', 'jpeg',  'gif'];
        $allowed1 = ['mp4', '3gp'];
        $allowed2 = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif','pptx','php'];
		?>
       <?php if(in_array($ext, $allowed)){?>
            	<img src="images/<?php echo $data['filename']; ?>" width="150" height="150"> &nbsp &nbsp
        &nbsp &nbsp<?php echo $data['filename']; ?> &nbsp &nbsp <br>
        <?php } elseif(in_array($ext, $allowed1)){?>
        
            <video width="300" height="200" controls>
	<source src="images/<?php echo $data['filename']; ?>" type="video/mp4">
	</video>
            &nbsp &nbsp<?php echo $data['filename']; ?> &nbsp &nbsp <br>
      <?php  } elseif(in_array($ext, $allowed2)) {?>
              &nbsp &nbsp<?php echo $data['filename']; ?> &nbsp &nbsp
        <a href="images/<?php echo $data['filename']; ?>" target="_blank">View</a> &nbsp
<a href="images/<?php echo $data['filename']; ?>" download >Download</a><br>
		<?php
		}
        else {?>
            &nbsp &nbsp
        <a href="<?php echo $data['filename']; ?>" ><?echo $data['filename'];?></a> &nbsp <br>
		<?php
		}
        }
		?>
	</div>
</body>

</html>
