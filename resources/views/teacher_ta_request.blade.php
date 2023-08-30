


<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="uploads/">
<link rel="icon" type="image/png" href="uploads/">

<title>
  
Teacher
  

  

  
</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />





  </head>


  <body class="g-sidenav-show  bg-gray-100">
    

    

    
      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="teacherprofile.php" target="_blank">
      <img src="{{URL::asset('uploads/'.Session::get('image'))}}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white"></span>
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
       
  
    <li class="nav-item">
  <a class="nav-link text-white " href="teacher_home">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>
    
    <span class="nav-link-text ms-1">Home</span>
  
  </a>
</li> 
<li class="nav-item">
  <a class="nav-link text-white " href="teacher_ta_request">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>
    
    <span class="nav-link-text ms-1">TA Request</span>
  
  </a>
</li>

<li class="nav-item">
  <a class="nav-link text-white " href="teacher_grader_request">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>
    
    <span class="nav-link-text ms-1">Grader Request</span>
  </a>
</li>


<li class="nav-item">
  <a class="nav-link text-white " href="counseling_teacher.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>
    
    <span class="nav-link-text ms-1">Counseling</span>
  </a>
</li>


  


  
<li class="nav-item">
  <a class="nav-link text-white " href="teacherlogout.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">view_in_ar</i>
      </div>
    
    <span class="nav-link-text ms-1">LOGOUT</span>
  </a>
</li>


 
</aside>

      <main class="main-content border-radius-lg ">
        <!-- Navbar -->

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      
      
      
      
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">

      <form action="" method="POST" class="searchform order-lg-last">
        <div class="form-group d-flex">
          <input type="text" name="student"class="form-control pl-3" placeholder="Search">
          <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
        </div>
      </form>





     
   
      </div>
      
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
        <li class="nav-item px-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0">
            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
          </a>
        </li>
        

          
           
              
       
  </div>
</nav>

<!-- End Navbar -->




   <br>
<div class='container'>
     
  <div class='row'>

<h2 style="text-align:center;">All Grader List</h2>



<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Student Name</th>
      <th scope="col">Student Id</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course ID</th>
      <th scope="col">Section</th>
    </tr>
  </thead>

    


  <tbody>
        
        @foreach($ta_request_data as $data)
             <tr>
                <td>{{ $data->sname }}</td>
                <td>{{ $data->sid }}</td>
                <td>{{ $data->cname }}</td>
                <td>{{ $data->cid }}</td>
                <td>{{ $data->section }}</td>
                <td> <a href=''><button type='button' class='btn btn-danger'>View Profile</button></a></td>
                <td> <a href='/Addbtn/{{$data->sid}}'><button type='button' class='btn btn-danger'>Add</button></a></td>
                <td> <a href='/DELETEbtn/{{$data->sid}}'><button type='button' class='btn btn-danger'>Delete</button></a></td>

             </tr>
       @endforeach  

      
    

  </tbody>
</table>
    
  </div>
</div>
  
    
 







         


            <br> <br><br>












            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
       
            <!-- Sales Chart End -->


            <!-- Footer Start -->
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
         
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br><br>
            <br>
            <br>
            <br>
            <br>

            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">UIU Faculty Members</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="">Team big_O</a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin_lib/chart/chart.min.js')}}"></script>
    <script src="{{ asset('admin_lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('admin_lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('admin_lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('admin_lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{ asset('admin_lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{ asset('admin_lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('admin_js/main.js')}}"></script>
</body>


<!-- 
button css for notice -->
<style>
    #applyta{
 
      padding-top: 50px;
      padding-left: 50px;
        display:flex;
    
    }
    .apply1{
        margin-right: 40px;

    }
</style>


</html>