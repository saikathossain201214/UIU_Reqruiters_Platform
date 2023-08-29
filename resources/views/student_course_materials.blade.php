<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="icon" type="image/png" href="">

    <title>course_materials</title>



    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

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





    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">

        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="student_profile" target="_blank">
                <img src="{{URL::asset('uploads/'.Session::get('image'))}}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white"></span>
            </a>
        </div>


        <hr class="horizontal light mt-0 mb-2">

        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">


                <li class="nav-item">
                    <a class="nav-link text-white " href="student_home">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>

                        <span class="nav-link-text ms-1">TA APPLY</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-white " href="student_grader">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>

                        <span class="nav-link-text ms-1">GRADER APPLY</span>
                    </a>
                </li> 



                <!-- <li class="nav-item">
                    <a class="nav-link text-white " href="./shortcourse/index.php">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>

                        <span class="nav-link-text ms-1">RA APPLY</span>
                    </a>
                </li>  -->

                
              <li class="nav-item">
                    <a class="nav-link text-white " href="student_research" target="blank">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>

                        <span class="nav-link-text ms-1">Research Interest</span>
                    </a>
                </li> 
                
                <li class="nav-item">
                    <a class="nav-link text-white " href=" student_ta_course" target="_blank">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>

                        <span class="nav-link-text ms-1">Course As TA</span>
                    </a>
                </li>  

                <li class="nav-item">
                    <a class="nav-link text-white " href=" student_grader_course" target="_blank">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>

                        <span class="nav-link-text ms-1">Course As Grader</span>
                    </a>
                </li>  





                <li class="nav-item">
                    <a class="nav-link text-white " href="student_counselling" target="_blank">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>

                        <span class="nav-link-text ms-1">Counseling</span>
                    </a>
                </li>  



                <li class="nav-item">
                    <a class="nav-link text-white " href=" student_course_materials" target="_blank">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>

                        <span class="nav-link-text ms-1">Course Materials</span>
                    </a>
                </li>  







                <li class="nav-item">
                    <a class="nav-link text-white " href="student_login">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                        </div>

                        <span class="nav-link-text ms-1">LOGOUT</span>
                    </a>
                </li>



    </aside>







    <main class="main-content border-radius-lg ">
        <!-- Navbar -->

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">




                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                        <form action="" method="POST" class="searchform order-lg-last">
                            <div class="form-group d-flex">
                                <input type="text" name="searchteacher" class="form-control pl-3" placeholder="Search">
                                <button type="submit" placeholder="" class="form-control search"><span
                                        class="fa fa-search"></span></button>
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


     <h3 id="h33"><u>Upload Course materials</u> </h3>

     @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
          
     <form id="frm1" action="/student_course_materials" method="post" enctype="multipart/form-data">
     @csrf
     <table>
        <tr border-radius-xl>
            <td id="tro">Course Name:</td>
            <select name="title" required>
                <option value="" disabled selected>Select a subject</option>
                @foreach($subjects as $subject)
                <option value="{{ $subject }}">{{ $subject }}</option>
                @endforeach
            </select>
            <br>
        </tr>
    
        <tr>
        
            <td id="trr">Description:</td>
            <td id="trr"> <input type="text" name='description' required> </td>
            
        </tr>

        <tr>
            <td id="tro">Upload PDF:</td>
            <td id="tro"><input type="file" name='pdf' accept=".pdf" required ></td>
        </tr>
        <tr >
           <td colspan="2" id="trr"> <button name="submit" type='submit'> Submit </button> </td>
            
        </tr>

      </table>


     </form> <br>
     <br>

     
     <h3 id="h333"><u>All Course materials</u> </h3>

     <table style="width:90% ">
     <thead>
        <tr>
            <td id="tro">Course Name</td>
            <td id="tro">View Materials</td>
    
    
        </tr>
        </thead>

        <tbody>
        @foreach($uploads as $upload)
                <tr>
                    <td>{{ $upload->title }}</td>
                    <td><a href="{{ route('student_course_materials_view', ['subject' => $upload->title]) }}">View</a></td>

                </tr>
            @endforeach
  
       
        </tbody>
      </table>


     
     <!-- <form id="frm2" action="">
        <table class="table2"  style="width:90% ">
            <tr>
                <td>Course Name</th>
                <td>Description</th>
                <td>Download</th>
            </tr>
        </table>

     </form>
           -->
     





    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="material-icons py-2">settings</i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0"></h5>

                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->


                <!-- Sidenav Type -->

                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>

                </div>

                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                        onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>

                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>


                <!-- Navbar Fixed -->
                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-3">
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">



            </div>
        </div>
    </div>
    </div>



  



    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>

    <!--Script-->
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>

</body>
<style>

    #frm1{
        background-color: #e7e4e4;
        margin-left: 25%;
        height: 190px;
        width: 600px;
 
    }
    table{
        margin-left: 5%;
    }
   td {
  border: 1px solid black;
  
}
#h33{
    margin-left: 25%;
    color: black;
}

input{
   margin-left: 18%;
   border-top: none;
   border-left: none;
   border-right: none;
}

#trr{
    background-color: #ddd7ff;
    text-align: center;
}

#tro{
    background-color: #ffe5d0;
    text-align: center;
}

button{
    background-color: #FFA500;
    border-radius: 10px;
    height: 30px;
    width: 100px;

    text-align: center;
    margin-left: 0%;
}

#btn2{
    background-color: DodgerBlue;
    border-radius: 10px;
    height: 40px;
    width: 150px;

    text-align: center;
    margin-left: 5%;
}
#btn3{
    background-color: red;
    border-radius: 10px;
    height: 40px;
    width: 150px;

    text-align: center;
    margin-left: 5%;
}

#frm2{
        background-color: #e7e4e4;
        margin-left: 10%;
        height: 190px;
        width: 1000px;
 
    }
    #h333{
    margin-left: 10%;
    color: black;
}

#th2{
  border-style:solid;
  border-color: #96D4D4;
}
.btn {

 

}


</style>


</html>