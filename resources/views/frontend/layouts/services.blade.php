<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 
    <!--custom css-->
    <link rel="stylesheet" href="asset/fn/services.css">
    <link rel="stylesheet" href="asset/fn/style.css">


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
                  <a class="nav-link active" href="/services">Services</a>
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
  
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4">
              <div class="container">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th>Services</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($services as $serv)
                    <tr>
                      <td>{{$serv->title}}</td>        
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              
            </div>
            <div class="col-lg-8">
              <div class="row">
                @foreach ($services as $serv)
                 <div class="col-lg-3">
                 
                  <div class="card p-0">
                      <div class="card-image"> <img src="/photos/{{$serv->photo}}" alt="{{$serv->title}}"> </div>
                      <div class="card-content d-flex flex-column align-items-center">
                          <h4 class="pt-2">{{$serv->title}}</h4>
                          <h5>???{{$serv->price}}/per day</h5>
                          <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1"> <a href="{{ "order/".$serv['id'] }}"> <span class="fa fa-plus-circle"></span> </a> </li>
                            
                        </ul>
                    </div>
                  </div>
                 </div>
                 @endforeach
              </div>
            </div>
        </div>
      </div>
  
  
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
              ?? 2021 Copyright:
              <a class="text-light" href="https://Gardeningsolution.com/">Gardening Solution</a>
            </div>
            <!-- Copyright -->
    </footer>
      

<script src="asset/fn/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>