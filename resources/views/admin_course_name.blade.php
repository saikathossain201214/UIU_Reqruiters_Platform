


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('admin_img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('admin_lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin_lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('admin_css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('admin_css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img class="rounded-circle" src="{{ asset('admin_img/Logo_uiu.jpg')}}" alt="" style="width: 40px; height: 40px;"></i> UIU</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('admin_img/nazmul.jpeg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Nazmul Hoda</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin_dashboard" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <a href="admin_student" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Students</a>
                    <a href="admin_teacher" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Teachers</a>
                    <a href="admin_ta" class="nav-item nav-link"><i class="fa fa-table me-2"></i>TA List</a>
                    <a href="admin_grader" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Grader List</a>
                    <a href="admin_ta_request" class="nav-item nav-link"><i class="fa fa-table me-2"></i>TA Request</a>

                    <a href="admin_grader_request" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Grader Request</a>

                    <a href="admin_allcourse" class="nav-item nav-link"><i class="fa fa-table me-2"></i>All Course</a>

                 

                    
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><img class="rounded-circle" src="{{ asset('admin_img/Logo_uiu.jpg')}}" alt="" style="width: 40px; height: 40px;"></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">



                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <img class="rounded-circle me-lg-2" src="{{ asset('admin_img/nazmul.jpeg')}}" alt="" style="width: 40px; height: 40px;">
                                <span class="d-none d-lg-inline-flex">Nazmul Hoda</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">

                                <a href="adminlogin2" class="dropdown-item">Log Out</a>
                            </div>
                        </div>
                    </div>
            </nav>
 

          <div class="details">

          <div class="tab">

          <h3 id="hc"> Course </h3>
          <hr> <hr>
                
            <table  style="width:100%">
                <tr>
                    <th>Course Code</th> 
                  <th>Course Name</th>
                  <th>Section</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Details</th>
              
                </tr>
                <tr>
                  <td>CSE 2345</td>
                  <td>Structured Programming Language</td>
                  <td>A</td>
                  <td>8:30</td>
                  <td>9:50</td>
                  <td><a href='c_detail.php'><button>View</button></a></td>
                  
                </tr>
               
                <tr>
                  <td>CSE 2345</td>
                  <td>Structured Programming Language</td>
                  <td>A</td>
                  <td>8:30</td>
                  <td>9:50</td>
                  <td><a href='c_detail.php'><button>View</button></a></td>
                  
                </tr>

                <tr>
                  <td>CSE 2345</td>
                  <td>Structured Programming Language</td>
                  <td>A</td>
                  <td>8:30</td>
                  <td>9:50</td>
                  <td><a href='c_detail.php'><button>View</button></a></td>
                </tr>

                <tr>
                  <td>CSE 2345</td>
                  <td>Structured Programming Language</td>
                  <td>A</td>
                  <td>8:30</td>
                  <td>9:50</td>
                  <td><a href='c_detail.php'><button>View</button></a></td>
                  
                </tr>

                <tr>
                  <td>CSE 2345</td>
                  <td>Structured Programming Language</td>
                  <td>A</td>
                  <td>8:30</td>
                  <td>9:50</td>
                  <td><a href='c_detail.php'><button>View</button></a></td>
                  
                </tr>

                <tr>
                  <td>CSE 2345</td>
                  <td>Structured Programming Language</td>
                  <td>A</td>
                  <td>8:30</td>
                  <td>9:50</td>
                  <td><a href='c_detail.php'><button>View</button></a></td>
                  
                </tr>

                <tr>
                  <td>CSE 2345</td>
                  <td>Structured Programming Language</td>
                  <td>A</td>
                  <td>8:30</td>
                  <td>9:50</td>
                  <td><a href='c_detail.php'><button>View</button></a></td>
                  
                </tr>

                <tr>
                  <td>CSE 2345</td>
                  <td>Structured Programming Language</td>
                  <td>A</td>
                  <td>8:30</td>
                  <td>9:50</td>
                  <td><a href='c_detail.php'><button>View</button></a></td>
                  
                </tr>
              
              </table>

            </div>


          </div>





  


  

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

          <!-- Footer  -->
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
    button{
        height: 35px;
        width: 100px;
        background-color: #FF7F50;
        color: white;
        font-weight: 800;
        border-style: solid;
        border-color:white;
       
    }

    .details{
        
      
        height: 60%;
        width: 90%;
        margin-left:75px;
       margin-top: 5%;
        background-color: #F0FFFF;
    }
    
.tab{
   margin-left: 14%;
   margin-top: 10px;
    width: 900px; 
    height: 250px;
    background-color: white;
 
}

table, th, td {
  border:2px solid rgb(5, 15, 20);
  width: 900x; 
  height: 33px;
  border-collapse: collapse;

}
th{
    background-color: orangered;
    color: rgba(255, 255, 255, 0.789);
}

tr:nth-child(odd) {
    background-color: rgba(255, 132, 0, 0.208);
    color: red;
}

#hc{
    color: black;
    text-align: center;
}


    
    

  
</style>


</html>