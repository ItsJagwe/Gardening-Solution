<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 
    <!--custom css-->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../order.css">

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
                <li><a class="dropdown-item" href="order.html">Orders</a></li>
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
      


 <!-- profile start -->
 @php
 $serv=\App\Models\Service::where('id',$serv->id)->first();
@endphp
<div class="wrapper rounded bg-white">
  <form action="{{ route('orderr.store') }}" method="post" enctype="multipart/form-data">      
    @csrf  
 <div class="h3">Order Form</div>
 <div class="form">
     <div class="row">
         <div class="col-md-6 mt-md-0 mt-3"> 
             <label>Service Id</label> 
             <input type="text" class="form-control"  name="service_id" value="{{ $serv->id }}" placeholder="{{ $serv->id }}" readonly="readonly"> 
         </div>
         
     </div>
     <div class="row">
         <div class="col-md-6 mt-md-0 mt-3"> 
             <label>First Name</label> 
             <input type="text" class="form-control" name="user_id" value="{{Auth::user()->id}}" placeholder="{{Auth::user()->full_name}}" readonly="readonly"> 
         </div>
         
         <div class="col-md-6 mt-md-0 mt-3"> <label>Email</label> <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" placeholder="{{Auth::user()->email}}" readonly="readonly"> </div>

     </div>
     <div class="row">
         <div class="col-md-6 mt-md-0 mt-3"> <label>Oder Date</label> <input type="date" name="date" id="picker" class="form-control" required> </div>
         <div class="col-md-6 mt-md-0 mt-3"> <label>Phone Number</label> <input type="number" name= "phone" value="phone" class="form-control" required> </div>
     </div>

     <div class="row">
         <div class="col-md-6 mt-md-0 mt-3"> 
             <label>Flat/House no, Buliding, Apartment</label> 
             <input type="text" class="form-control" name= "flat" placeholder="" required> 
         </div>
         
         <div class="col-md-6 mt-md-0 mt-3"> <label>Area,Street,Sector,Village</label> <input type="text" name= "area" class="form-control" required> </div>

     </div>

     <div class="row">
         <div class="col-md-6 mt-md-0 mt-3"> 
             <label>Landmark</label> 
             <input type="text" class="form-control" name= "landmark" placeholder="" required> 
         </div>
         
         <div class="col-md-6 mt-md-0 mt-3"> <label>Pincode</label> <input type="number" name= "pincode" class="form-control" required> </div>

     </div>

     <div class="row">
     <div class="col-md-6 mt-md-0 mt-3"> <label>Package</label> <select id="sub" name= "pack_type" required>
             <option value="" selected hidden>Choose Option</option>
             <option value="1-Day (₹{{ ($serv->price) }})">1-Day (₹{{ ($serv->price) }})</option>
             <option value="1-month (₹{{ ($serv->price*30) }})">1-month (₹{{ ($serv->price*30) }})</option>
             <option value="6-month (₹{{ ($serv->price*180) }})">6-month (₹{{ ($serv->price*180) }})</option>
         </select> </div>
     <div class="col-md-6 mt-md-0 mt-3"> <label>Payment Method</label> <input type="text" class="form-control" name="payment" value="Cash On Delivery" placeholder="Cash On Delivery" readonly = "readonly" > </div>
     
     <button type="submit" class="btn btn-primary mt-3">Order</button>

 </div>
 </div>
</form>
</div>
<!-- end profile body-->

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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>