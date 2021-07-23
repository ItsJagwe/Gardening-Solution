<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 
    <!--custom css-->
    <link href="./asset/fn/style.css" rel="stylesheet">

     <!--slider css-->
     <link rel="stylesheet" type="text/css" href="./asset/fn/bootstrap.min.css">
    
    

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Gardening Solution</title>
  </head>
  <body>
    
   <!-- Navbar-->
   <nav class="navbar navbar-expand-lg navbar-dark shadow p-3">
    <div class="container-fluid ">
      <a class="navbar-brand" href="/index">Gardening Solution</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href= "/index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/services">Services</a>
          </li>
          
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" id="{{Auth::user()->id}}" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class=" d-none d-lg-inline text-gray-600 medium">{{Auth::user()->full_name}}</span>
                 
              </a>
           
              @auth
    
    
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/user">Edit Profile</a></li>
                <li><a class="dropdown-item" href="/summ">Orders</a></li>
                <li><a class="dropdown-item" href="/chpass">Change Password</a></li>
                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>
  
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
               </form>
              </li>
              </ul>
            </li>
           
              @else
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ 'user/auth' }}">Login & Register</a></li>
              </ul>
              @endauth
          </li>
    
          
          <li class="nav-item">
            <a class="nav-link" href="/about" tabindex="-1" >About Us </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Carousal-->
    
    <section class="home">
            <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-controls">
              <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active" style="background-image:url('asset/fn/img/slide-1.jpg')"></li>
                <li data-target="#carousel" data-slide-to="1" style="background-image:url('asset/fn/img/slide-2.jpg')"></li>
                <li data-target="#carousel" data-slide-to="2" style="background-image:url('asset/fn/img/slide-3.jpg')"></li>
                
              </ol>
              <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
               <img src="asset/fn/img/left-arrow.svg" alt="Prev"> 
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <img src="asset/fn/img/right-arrow.svg" alt="Next">
            </a>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="background-image:url('asset/fn/img/slide-1.jpg')">
                <div class="container">
                   <h2>Services</h2>
                   <p>Watering</p>
                </div>
              </div>
              <div class="carousel-item" style="background-image:url('asset/fn/img/slide-2.jpg')">
                <div class="container">
                   <h2>Services</h2>
                   <p>Fertilizing</p>
                </div>
              </div>
              <div class="carousel-item" style="background-image:url('asset/fn/img/slide-3.jpg')">
                <div class="container">
                   <h2>Services</h2>
                   <p>Soil Cleaning</p>
                </div>
              </div>
            </div>
          </div>
      </section>
   <!---Stories Section-->
   <section class="mt-3">
    <div class="stories">
        <div class="container">
            <!----->
            <div class="row">
                <div class="col-md-4">
                    <div class="story-box overlay shadow">
                        <div class="story-icon">
                          <i class="fas fa-building"></i>
                        </div>
                        <h2>Societies</h2>
                        <p>We provide full service for every aspect of gardening which will include maintaining and taking care of it. By our services we will make your property more beautiful.</p>
                    </div>
                </div>
                <!----->
                <div class="col-md-4">
                  <div class="story-box overlay shadow">
                      <div class="story-icon">
                          <i class="fas fa-hands"></i>
                      </div>
                      <h2>Handling</h2>
                      <p>If you are one of those who don't have time for your property then don't worry we are here to take care of it.By using our services will surely help us and you too.</p>
                  </div>
              </div>
              <!----->
              <div class="col-md-4">
                  <div class="story-box overlay shadow">
                      <div class="story-icon">
                          <i class="fas fa-seedling"></i>
                      </div>
                      <h2>Plants</h2>
                      <p>Plants that are residing in your garden and lawns needs good care and professional care and if you are unable to do it then don't worry you've got us.</p>
                  </div>
              </div>
              <!----->
            </div>
        </div>
    </div>
      </section>
  <!--- End of Stories Section-->
        
  <!-- Hero Banner Section -->
  <section class="hero-banner bg-light  py-5">
                  <div class="container">
                      <div class="row row align-items-center">
                          <div class="col-lg-5 offset-lg-1 order-lg-1">
                              <img src="{{asset("asset/fn/img/g2.jpg")}}" class="img-fluid" alt="garden">
                          </div>
                          <div class="col-lg-6">
                              <h1 class="mt-3">Maintaining Your Peace</h1>
                              <p class="lead text-secondary my-5">Here at Gardening Solution, we will help you to maintain your peace which surely resides in your lovely property.Which you can leave on us by using our services. We will surely do our best to make your property look beautful and maintain your peace.</p>
                              <a href="/services" class="btn btn-outline-secondary btn-lg border">Book Now</a>
                          </div>
                      </div>
                  </div>
  </section>
  <!-- End Hero Banner Section -->   
     <!--Map--> 
        <section class="hero-banner py-5">
          <div class="container">
              <div class="row row align-items-center">
                <div class="col-lg-5 offset-lg-1 order-lg-1">
               
                  <h3 class="mt-3">Currently Only Available In Ahmedabad</h3>
                  <p class="lead text-secondary my-5">We are new in this era of providing services online. That's why we are currently only available in Ahmedabad. But be assured that we have future plans of expanding our services as far as possible. But for now this is our Home.</p>
              </div>  
              <div class="col-lg-6">
                    <div class="mapouter">
                      <div class="gmap_canvas">
                        <iframe width="400" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=ahmedabad%20gujarat&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                      </div>
                    </div>
                  </div>
                  
              </div>
          </div>
      </section>
       
    <!-- Footer -->    
      <footer class="text-center text-white" style="background-color: #212529;">
                <!-- Grid container -->
                <div class="container pt-4">
                  <!-- Section: Social media -->
                  <section class="mb-4">
                    <!-- Facebook -->
                    <a
                      class="btn btn-link btn-floating btn-lg text-light m-1"
                      href="#!"
                      role="button"
                      data-mdb-ripple-color="dark"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
              
                    <!-- Twitter -->
                    <a
                      class="btn btn-link btn-floating btn-lg text-light m-1"
                      href="#!"
                      role="button"
                      data-mdb-ripple-color="dark"
                      ><i class="fab fa-twitter"></i
                    ></a>
              
                    <!-- Google -->
                    <a
                      class="btn btn-link btn-floating btn-lg text-light m-1"
                      href="#!"
                      role="button"
                      data-mdb-ripple-color="dark"
                      ><i class="fab fa-google"></i
                    ></a>
              
                    <!-- Instagram -->
                    <a
                      class="btn btn-link btn-floating btn-lg text-light m-1"
                      href="#!"
                      role="button"
                      data-mdb-ripple-color="dark"
                      ><i class="fab fa-instagram"></i
                    ></a>
              
                    <!-- Linkedin -->
                    <a
                      class="btn btn-link btn-floating btn-lg text-light m-1"
                      href="#!"
                      role="button"
                      data-mdb-ripple-color="dark"
                      ><i class="fab fa-linkedin"></i
                    ></a>
                    <!-- Github -->
                    <a
                      class="btn btn-link btn-floating btn-lg text-light m-1"
                      href="#!"
                      role="button"
                      data-mdb-ripple-color="dark"
                      ><i class="fab fa-github"></i
                    ></a>
                  </section>
                  <!-- Section: Social media -->
                </div>
                <!-- Grid container -->
              
                <!-- Copyright -->
                <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                  © 2021 Copyright:
                  <a class="text-light" href="https://Gardeningsolution.com/">Gardening Solution</a>
                </div>
                <!-- Copyright -->
          </footer>
          
 
    <script src="asset/fn/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>