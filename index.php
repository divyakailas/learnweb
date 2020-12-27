<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
 
    <title>website</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">LearnWeb</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#service">services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#course">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
     
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/f1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Web Design</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/f2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>software Development</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/f3.png" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
      <h3>software Testing</h3>
        
        
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section  id="about" class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6  col-md-6  col-12">
            <img src="images/about.webp" alt="img" class="img-fluid imgabout"> 
        </div>

        <div class="col-lg-6  col-md-6  col-12">
            <h3 class="display-4">I am Divya</h3>
            <p class="py-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             <a  class="btn btn-info">Read More</a>
        </div>

    </div>
    </div>
</section>

<section id="service" class="my-5">
    <div class="py-5">
        <h2 class="text-center">our Services</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img class="card-img-top" src="images/tra.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Traning</h4>
    <p class="card-text">Start Learning here</p>
    <a href="#" class="btn btn-primary">Read More</a>
  </div>
</div>



            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img class="card-img-top" src="images/pla.jfif" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Placement</h4>
    <p class="card-text">Start Learning here.</p>
    <a href="#" class="btn btn-primary">Read More</a>
  </div>
</div>
</div>

            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img class="card-img-top" src="images/inter.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Intership</h4>
    <p class="card-text">Start Learning here.</p>
    <a href="#" class="btn btn-primary">Read More</a>
  </div>
</div>
 </div>

        </div>
    </div>
</section>


<section id="course" class="my-5">
    <div class="py-5">
        <h2 class="text-center">Course</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/java.png" alt="" class="img-fluid pb-5">

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/android.jpg" alt="" class="img-fluid pb-5">

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/boot.png" alt="" class="img-fluid pb-5">

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/css1.jpg" alt="" class="img-fluid pb-5">

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/j1.jpg" alt="" class="img-fluid pb-5">

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/java.png" alt="" class="img-fluid pb-5">

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/html.jpg" alt="" class="img-fluid pb-5">

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/c++1.jpg" alt="" class="img-fluid pb-5">

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/python.png" alt="" class="img-fluid pb-5">

            </div>
        </div>
    </div>
    
</section>

<section id="contact" class="my-3">
    <div class="py-3">
        <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">

    <form action="userinformation.php" method="post">
    <div class="form-group">
    <label >Username</label>
    <input type="text" name="username" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
    <label >Email</label>
    <input type="text" name="email" autocomplete="off" class="form-control">
    </div>

    <div class="form-group">
    <label >phone No</label>
    <input type="text" name="mobile" autocomplete="off" class="form-control">
    </div>

    <div class="form-group">
    <label >Message</label>
    <textarea  class="form-control" name="message"></textarea>
    </div>

    <button class="btn btn-info">Submit</button>

    </form>
    </div>
</section>

<footer>
<p class="p-2 bg-dark text-light text-center">@learnweb 2020</p>
</footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>