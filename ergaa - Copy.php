<?php 
	session_start();
	if(isset($_SESSION['FName']))
	{
		include "config.php"; 
        include "header2.php"; 
        date_default_timezone_set('Africa/Nairobi');


if($_POST)
{
	$sender=$_SESSION['FName'];
    $reciever =$_POST['reciever'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `Message`(`sender`, `reciever`,`msgcontent`) VALUES ('".$sender."','".$reciever."', '".$msg."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
        	header('location:ergaa.php');
     $_SESSION['flash_message'] = " Sent Successfully";
	}
	else
	{
		echo "Something went wrong". mysqli_error($conn);
	}
	
	}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<head>
<style>
  label{
color:white;
  }
  body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
      background-color:#47555c;
}
 
.container2 {
  border: 2px solid #dedede;
  background-color:  #5896EB ;
  border-radius: 5px;
  color: white ;
  width:auto;
  font-size:12px;
  overflow: hidden;
}
.container1 {
  border: 2px solid #dedede;
  background-color: #138d75 ;
  border-radius: 5px;
  color: white ;
  width:auto;
font-size:12px;
  overflow: hidden;

}

  .btn-primary {
    background-color: #673AB7;
	}
	.darker {
  border-color: #ccc;
  background-color: #ddd;
  align:right;
}
	.message{
		color: green;
		border-radius: 1px;
       border-radius: 5px;
       font-weight:bold;
       border-radius: 1px;
       border-radius: 5px;
       background-color: #1a5276 ;
        overflow: auto;
	}
 


.container {
  border: 2px solid #dedede;
  background-color: #1E13F2;
 // border-radius: 5px;
  border-radius: 30px;
  padding: 10px;
  margin: 5px 0;
  width: 403px;
  align:left;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
       img{
 border-radius: 50%;
}
p{
    color:white;
}
.r{
    color:black;
}

</style>
  </head>
  <body>
<form action='/' method='get'> <a>Call to get advice </a> <input type='tel' name='tel' value='994' readonly   /> <input type='submit' onclick='call();return false;' value='Call' /> </form> <script> function call() { var number = document.querySelector("input[name=tel]").value; window.open('tel:' + number); } </script>
	  <center> <span class="message"><div class="message">
	<?php
		if (isset($_SESSION['flash_message'])){
			echo $_SESSION['flash_message'];
		}
		unset($_SESSION['flash_message']);
	?>
	</div></span></center>

<?php
        		$sql = "SELECT * FROM `user` where user_account_name = '".$_SESSION['user_account_name']."'  and password = '".$_SESSION['password']."'  ";

		$query =  mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($query);
            
  if($_SESSION['user_account_type'] == 'mother') {
      		$sql = "SELECT * FROM `Message` where sender = '".$_SESSION['FName']."'  ";
            $sql1 = "SELECT * FROM `Message` where reciever = '".$_SESSION['FName']."' ";
	  $query = mysqli_query($conn,$sql);
      $query1 = mysqli_query($conn,$sql1);
       $query2 = " select photo from user WHERE id='".$_SESSION['id']."'  ";
		$result1 = mysqli_query($conn, $query2);
        $data = mysqli_fetch_assoc($result1);
           $query3 = " select photo from user WHERE id='".$_SESSION['id']."'  ";
		$result2 = mysqli_query($conn, $query3);
        $data1 = mysqli_fetch_assoc($result2);
        if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{ ?>
        
<div class="container">
<img src="images/<?php echo $data['photo']; ?>" width="100" height="50"> 
  <p><?php echo $row['msgcontent']; ?></p>
  <span class="time-right">Sent to <?php echo $row['reciever']; ?></span><br>
  <span class="time-right"><?php echo $row['time']; ?></span>
</div>  <br>
<?php
  }
          if(mysqli_num_rows($query1)>0)

  		while($row1= mysqli_fetch_assoc($query1))	
		{
      
?>
<div class="container darker">
<img src="images/user.png" class="right" width="100" height="50"> 
   <p class="r"> <?php echo $row1['msgcontent']; ?></p>
  <span class="time-left"><?php echo $row1['time']; ?></span>
</div>
<br>
<?php
        }
  
    }
        }
         elseif($row['user_account_type'] == 'physician') {
      		$sql = "SELECT * FROM `Message` where sender = '".$_SESSION['FName']."'  ";
            $sql1 = "SELECT * FROM `Message` where reciever = '".$_SESSION['FName']."'  ";
	  $query = mysqli_query($conn,$sql);
      $query1 = mysqli_query($conn,$sql1);
        if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
      
?>

<div class="container">
  <p><?php echo $row['msgcontent']; ?></p>
 <span class="time-right">sent to <?php echo $row['reciever']; ?></span><br>
  <span class="time-right"> <?php echo $row['date_time']; ?></span>
</div><br>
<?php
  }
          if(mysqli_num_rows($query1)>0)

  		while($row1= mysqli_fetch_assoc($query1))	
		{
      
?>

<div class="container1">
  <p align="left"><?php echo $row1['msgcontent']; ?></p>
 <span class="time-right">Recieved From  <?php echo $row1['sender']; ?></span><br>
  <span class="time-right"> <?php echo $row1['date_time']; ?></span>
</div><br>
<?php
        }
  
    }
        }
        elseif($_SESSION['user_account_type'] == 'fpworker') {
      		$sql = "SELECT * FROM `Message` where sender = '".$_SESSION['FName']."'  ";
            $sql1 = "SELECT * FROM `Message` where reciever = '".$_SESSION['FName']."' ";
	  $query = mysqli_query($conn,$sql);
      $query1 = mysqli_query($conn,$sql1);
       $query2 = " select photo from user WHERE id='".$_SESSION['id']."'  ";
		$result1 = mysqli_query($conn, $query2);
        $data = mysqli_fetch_assoc($result1);
           $query3 = " select photo from user WHERE id='".$_SESSION['id']."'  ";
		$result2 = mysqli_query($conn, $query3);
        $data1 = mysqli_fetch_assoc($result2);
        if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{ ?>
        
<div class="container">
<img src="images/<?php echo $data['photo']; ?>" width="100" height="50"> 
  <p><?php echo $row['msgcontent']; ?></p>
  <span class="time-right">Sent to <?php echo $row['reciever']; ?></span><br>
  <span class="time-right"><?php echo $row['time']; ?></span>
</div>  <br>
<?php
  }
          if(mysqli_num_rows($query1)>0)

  		while($row1= mysqli_fetch_assoc($query1))	
		{
      
?>
<div class="container darker">
<img src="images/user.png" class="right" width="100" height="50"> 
   <p class="r"> <?php echo $row1['msgcontent']; ?></p>
  <span class="time-left"><?php echo $row1['time']; ?></span>
</div>
<br>
<?php
        }
  
    }
        }

        	else
	{
?>
<div class="message">
			<p>
				No previous chat available.
			</p>
</div>
<?php
	}  
?>
     
  <br><br><br>
<div class="container" >
  <form class="form-horizontal" method="post"  >
        <textarea name="msg" placeholder="Type your message here..." class="form-control" style="width: 100%; height: 150px;"   required ></textarea>
    
        <br>  
        Send Message To <?php
        		$sql = "SELECT * FROM `user` where user_account_name = '".$_SESSION['user_account_name']."'  and password = '".$_SESSION['password']."'  ";

		$query =  mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($query);
            
  if($row['user_account_type'] == 'mother') { ?>
      <select name="reciever" required  >

       <?php   
       
        $sql = "SELECT FName , LName  FROM user WHERE user_account_type ='physician' ";
                        $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
          echo "<option value='".$row['FName']."'>" .$row['FName']."&nbsp".$row['LName']."</option>";    }   ?>
       </select> <?php } 
       else { ?>  
 <select name="reciever" required  > <?php
       
        $sql = "SELECT FName , LName  FROM user WHERE user_account_type ='mother' ";
                        $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
          echo "<option value='".$row['FName']."'>".$row['FName']."&nbsp".$row['LName']."</option>";    }   ?>
       </select>
      <?php } ?>
 <br>
     
      
        <center><button type="submit" class="btn btn-primary">Send</button></center>
      
  </form>
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