@extends('layouts.app')

@section('content')

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>3 Col Portfolio - Start Bootstrap Template</title>
   <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="css/3-col-portfolio.css" rel="stylesheet">
   <style media="screen">
   .center{
     text-align:center;
   }
   </style>
 </head>

<body>
<h2>Recent Posts</h2>
<br>
<!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item  dotted dashed solid double;"  >
        <div class="card h-100">
          <a> <iframe width="350" height="250" src="https://www.youtube.com/embed/KMF_iV2cVTA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#" target="_blank">Baky-Koupab</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a> <iframe width="350" height="250" src="https://www.youtube.com/embed/Obkp6SZ4G3g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#" target="_blank">Baky-Sikatris</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a> <iframe width="350" height="250" src="https://www.youtube.com/embed/o0SyHqho8pw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#" target="_blank">Nu Look-Until When</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a> <iframe width="350" height="250" src="https://www.youtube.com/embed/biWycOOwzMM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Trouble Boy-Kokota Manman Yo</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a> <iframe width="350" height="250" src="https://www.youtube.com/embed/WtDvaBfxlJA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              <div class="card-body">
            <h4 class="card-title">
              <a href="#">Wendyy-Livrezon</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a> <iframe width="350" height="250" src="https://www.youtube.com/embed/NCXq4JQPAoY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Wendyy-Nou Fe Yo Wont</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>

  </div>
  <!-- /.container -->



 <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

@endsection

@section('sidebar')
@parent
<p>This is appended to the side bar</p>
@endsection
