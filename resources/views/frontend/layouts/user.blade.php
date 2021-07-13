<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- Custom CSS -->
     <link href="./asset/fn/style.css" rel="stylesheet">
    
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
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
              </a>
              
                @auth
      
      
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/user">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="order.html">Orders</a></li>
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
   
    
    <!--Profile-->
      <div class="container rounded bg-white mt-5 mb-5">
        @php
        $user=\App\Models\User::where('id',$user->id)->first();
      @endphp
        <form action="{{ route('update',$user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
                  
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                  <span class="font-weight-bold">{{$user->full_name}}</span><span class="text-black-50">{{$user->email}}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">User Details</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><div class="form-group"><label class="labels">Full Name</label><input type="text" class="form-control" placeholder="{{$user->full_name}}" name="full_name"></div></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><div class="form-group"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="{{$user->phone}}" name="phone"></div></div>
                        <div class="col-md-12"><div class="form-group"><label class="labels">Address</label><textarea name="address" id="address" cols="20" rows="5" class="form-control" placeholder="{{$user->address}}" name="address"></textarea></div></div>
                        
                    </div>
                   
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </div>
            </div>
            
        </div>
    </div>
    </div>
  </form>
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
      © 2021 Copyright:
      <a class="text-light" href="https://Gardeningsolution.com/">Gardening Solution</a>
    </div>
    <!-- Copyright -->
</footer>


<script src="asset/fn/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>