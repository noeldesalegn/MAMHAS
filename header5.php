<?
  session_start(); 
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <titlPhysician</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-black fixed-top bg-red">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a  href="about.php" class="btn btn-warning"><i class="fa fa-home"> | About</i></a>
        </li>
        <br>
        <li class="nav-item">
        <a href="feedback.php" class="btn btn-success" > <i class="fa fa-user" aria-hidden="true" ></i> | feedback</a>
        </li>
        <br>
           <li class="nav-item">
        <a href="contact_us.php" class="btn btn-info" > <i class="fa fa-comment" aria-hidden="true" ></i> | Contact </a>
        </li>
         <br>
          <li class="nav-item">
                <a  href="tc.php" class="btn btn-danger" ><i class="fa fa-sign-out" aria-hidden="true"></i> | Terms and Condition</a>
        </li>  
        <li class="nav-item">
 
    <div id="google_translate_element"></div>
 
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        }
    </script>
 
    <script type="text/javascript"
            src="https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit">
    </script>     </li>   
        
         
      </ul>
    </div>
  </div>
</nav>
<br>
<br><br>
<br>
</body>
</html>
