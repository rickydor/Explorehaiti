<meta charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="carousel.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  </meta>

<nav class="navbar navbar-inverse">
   <div class="container-fluid">
     <div class="navbar-header"
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
         aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="/">ExploreHaiti</a>
     </div>
     <div id="navbar" class="collapse navbar-collapse">
       <ul class="nav navbar-nav">
         <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/" class="color-me">Home</a></li>
         <li class="{{Request::is('news') ? 'active' : ''}}"><a href="/news">News</a></li>
         <li class="{{Request::is('gallery') ? 'active' : ''}}"><a href="/gallery">Gallery</a></li>
          <li "{{Request::is('music') ? 'active' : ''}}" class="dropdown" >
            <a class="dropdown-toggle" data-toggle="dropdown" >Music
            <span class="caret"></span></a>
              <ul class="dropdown-menu">
               <li><a href="/compas" class="color-me">Compas</a></li>
               <li><a href="/rapkreyol">Rap Kreyol</a></li>
               <li><a href="/zouk">Zouk</a></li>
               <li><a href="/voodoo">Voodoo</a></li>
           </ul></li>
              <li class="dropdown" class="{{Request::is('plus') ? 'active' : ''}}">
              <a data-toggle="dropdown" href="/plus">Plus+
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
             <li><a href="#">Page 1-1</a></li>
             <li><a href="#">Page 1-2</a></li>
           </ul></li>
         <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About us</a></li>
         <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact us</a></li>
       </ul>
       <form class="navbar-form pull-right" action="/action_page.php">
           <div class="input-group">
           <input type="text" class="form-control" placeholder="Search">
           <div class="input-group-btn">
             <button class="btn btn-default" type="submit">
               <i class="glyphicon glyphicon-search"></i>
             </button>
             </div>
             </div>
          </form>
        </div>
      </div>
    </nav>


         <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <a href="https://cdn.theculturetrip.com/images/56-3967080-14437370567927499ab85043d6a368892d60107c66.jpg"  target="_blank" ><img class ="img-responsive center-block" src="http://adammclane.com/wp-content/uploads/2015/07/11782503_10153130893416553_5807804584961448899_o-1024x576.jpg" alt="Haiti" width="600" height="100"></a>
            </div>

            <div class="item">
              <img class ="img-responsive center-block" src="https://s-media-cache-ak0.pinimg.com/originals/14/22/27/142227ac3e213ea4a1f375131d7bbeb3.jpg" width="600" height="100" >
            </div>

            <div class="item">
              <img class ="img-responsive center-block" src="https://upload.wikimedia.org/wikipedia/commons/6/68/Jacmel_Seaside.jpg" alt="" width="600" height="100">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br>
