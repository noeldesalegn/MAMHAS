<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <!-- NORMAL CSS -->
  <link rel="stylesheet" href="stfb.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    .carousel-item img {
      max-height: 300px;
      object-fit: cover;
      border: 5px solid #fff;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
    }

    .card-img-top {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
    }

    .col-md-4 {
      transition: all 0.5s ease;
      padding: 15px;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      margin-bottom: 255px; 
    }

    .col-md-4:hover {
      transform: scale(1.1);
    }

    .smaller-col {
      max-width: 300px;
      margin: auto;
    }

    body {
      background-color: #000000;
      background-size: cover;
      background-position: center;
    }

    /* Scroll Animation */
    @keyframes fade-in {
      0% {
        opacity: 0;
        transform: translateY(50px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      opacity: 0;
    }

    .fade-in.visible {
      animation: fade-in 1s ease-out;
      opacity: 1;
    }
  </style>
  <script defer src="app.js"></script>
  <script>
    window.addEventListener('DOMContentLoaded', (event) => {
      const elements = document.querySelectorAll('.fade-in');
      const windowHeight = window.innerHeight;

      function checkScroll() {
        for (let i = 0; i < elements.length; i++) {
          let element = elements[i];
          let positionFromTop = elements[i].getBoundingClientRect().top;

          if (positionFromTop - windowHeight <= 0) {
            element.classList.add('visible');
          }
        }
      }

      // Run the checkScroll function on page load and scroll
      window.addEventListener('load', checkScroll);
      window.addEventListener('scroll', checkScroll);
    });
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">About Us</a>
  </nav>


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/n1.jpg" class="d-block w-100" alt="Developer 1">
      </div>
      <div class="carousel-item">
        <img src="images/n2.jpg" class="d-block w-100" alt="Developer 2">
      </div>
      <div class="carousel-item">
        <img src="images/n3.jpg" class="d-block w-100" alt="Developer 3">
      </div>
      <div class="carousel-item">
        <img src="images/n4.jpg" class="d-block w-100" alt="Developer 11">
      </div>
      <div class="carousel-item">
        <img src="images/n5.jpg" class="d-block w-100" alt="Developer 112">
      </div>
      <div class="carousel-item">
        <img src="images/n6.jpg" class="d-block w-100" alt="Developer 166">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<br><br>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 fade-in smaller-col">
        <img src="images/n1.jpg" class="card-img-top" alt="Developer 1">
        <div class="card-body">
          <h5 class="card-title">Developer 1</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat urna in urna
            consequat, sed eleifend elit vestibulum.</p>
        </div>
      </div>
      <br><br><br><br>

      <div class="col-md-4 fade-in smaller-col">
        <img src="images/n2.jpg" class="card-img-top" alt="Developer 2">
        <div class="card-body">
          <h5 class="card-title">Developer 2</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat urna in urna
            consequat, sed eleifend elit vestibulum.</p>
        </div>
      </div>
      <br><br><br><br>
      <div class="col-md-4 fade-in smaller-col">
        <img src="images/n3.jpg" class="card-img-top" alt="Developer 3">
        <div class="card-body">
          <h5 class="card-title">Developer 3</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat urna in urna
            consequat, sed eleifend elit vestibulum.</p>
        </div>
      </div>
      <br><br><br><br>
       <div class="col-md-4 fade-in smaller-col">
        <img src="images/n3.jpg" class="card-img-top" alt="Developer 3">
        <div class="card-body">
          <h5 class="card-title">Developer 3</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat urna in urna
            consequat, sed eleifend elit vestibulum.</p>
        </div>
      </div>
      <br><br><br><br>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
