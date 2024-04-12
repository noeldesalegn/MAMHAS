<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<style>
		.overlay {
			height: 0%;
			width: 100%;
			position: fixed;
			top: 0;
			right: 0;
      background-color: #800015;
			overflow-y: hidden;
			transition: 0.5s;
		}

		.overlay-content {
			position: relative;
			top: 25%;
			width: 80%;
			text-align: left;
		}

		.overlay span{
			text-decoration: none;
			font-size: 26px;
			color: white;
			display: block;
			transition: 0.3s;
		}

		.overlay span:hover,
		.overlay span:focus {
			color: black;
		}
.myNav{
    background-color: red;
}
		.overlay .closebtn {
			position: absolute;
			top: 3px;
			left: 35px;
			font-size: 40px;
		}
	</style>

</head>

<body>

	<div id="myNav" class="overlay">
		<a href="javascript:void(0)"
			class="closebtn" onclick="closeNav()">
			×
		</a>
		<div class="overlay-content">
<span><a class="btn btn-info" href="about.php">About</a></span>
<span><a class="btn btn-success" href="tc.php">Terms and Condition</a></span>
<span><a class="btn btn-warning" href="contact_us.php">Contact Us</a></span>
		</div>
	</div>
	<div align="right" style="font-size:70px;cursor:pointer"
			onclick="openNav()">
		≡      
	</div>

	<h2></h2>


	<script>
		function openNav() {
			document.getElementById(
				"myNav").style.height = "40%";
		}

		function closeNav() {
			document.getElementById(
				"myNav").style.height = "0%";
		}
	</script>
</body>

</html>