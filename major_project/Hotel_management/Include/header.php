 <!-- Navbar start -->
 <nav
     class="navbar navbar-expand-lg bg-body-tertiary px-lg-3 py-lg-2 shadow-sm sticky-top">
     <div class="container-fluid">
         <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Hotel - The <span class="text-danger h-font">Spark</span></a>
         <button
             class="navbar-toggler shadow-none"
             type="button"
             data-bs-toggle="collapse"
             data-bs-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent"
             aria-expanded="false"
             aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link active me-2" aria-current="page" href="/Hotel_management//index.php">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link me-2" href="/Hotel_management/rooms.php">Rooms</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link me-2" href="/Hotel_management/facilities.php">Facilities</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link me-2" href="/Hotel_management//contact.php">Contact us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link me-2" href="/Hotel_management/about.php">About</a>
                 </li>
                 <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a> 
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>-->
             </ul>
             <div class="d-flex" role="search">
                 <!-- Button trigger modal -->
                 <button
                     type="button"
                     class="btn btn-outline-dark shadow-none me-lg-3 me-2"
                     data-bs-toggle="modal"
                     data-bs-target="#loginModal">
                     Login
                 </button>
                 <button
                     type="button"
                     class="btn btn-outline-dark shadow-none"
                     data-bs-toggle="modal"
                     data-bs-target="#registerModal">
                     Register
                 </button>
             </div>
         </div>
     </div>
 </nav>
 <!-- Login Modal Start-->
 <div
     class="modal fade"
     id="loginModal"
     data-bs-backdrop="static"
     data-bs-keyboard="false"
     tabindex="-1"
     aria-labelledby="staticBackdropLabel"
     aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <form action="#">
                 <div class="modal-header">
                     <h1 class="modal-title fs-5 d-flex align-items-center" id="#">
                         <i class="bi bi-person-circle fs-3 m-2"></i>
                         User Login
                     </h1>
                     <button
                         type="reset"
                         class="btn-close shadow-none"
                         data-bs-dismiss="modal"
                         aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <div class="mb-3">
                         <label class="form-label">Email address</label>
                         <input type="email" class="form-control shadow-none" />
                     </div>
                     <div class="mb-4">
                         <label class="form-label">Password</label>
                         <input type="password" class="form-control shadow-none" />
                     </div>
                     <div
                         class="d-flex align-items-center justify-content-between mb-2">
                         <button type="submit" class="btn btn-dark shadow-none">
                             LOGIN
                         </button>
                         <a
                             href="javascript: void(0)"
                             class="text-secondary text-ecoration-none">Forget Password</a>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <!--Login  Modal ends -->

 <!-- Register modal start -->
 <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <form action="#">
                 <div class="modal-header">
                     <h1 class="modal-title fs-5 d-flex align-items-center" id="#">
                         <i class="bi bi-person-lines-fill fs-3 m-2"></i>
                         User Registration
                     </h1>
                     <button
                         type="reset"
                         class="btn-close shadow-none"
                         data-bs-dismiss="modal"
                         aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <span
                         class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                         Note: Your details must match your ID (Aadhar card, passport ,
                         driving license etc) that will be required during check-in
                     </span>
                     <div class="container-fluid">
                         <div class="row">
                             <div class="col-md-6 ps-0 mb-3">
                                 <label class="form-label">Name</label>
                                 <input type="text" class="form-control shadow-none" />
                             </div>
                             <div class="col-md-6 ps-0 mb-3">
                                 <label class="form-label">Email</label>
                                 <input type="email" class="form-control shadow-none" />
                             </div>
                             <div class="col-md-6 ps-0 mb-3">
                                 <label class="form-label">Mob Number</label>
                                 <input type="number" class="form-control shadow-none" />
                             </div>
                             <div class="col-md-6 p-0 mb-3">
                                 <label class="form-label"> picture</label>
                                 <input type="file" class="form-control shadow-none" />
                             </div>
                             <div class="col-md-12 p-0 mb-3">
                                 <label class="form-label"> Address</label>
                                 <textarea
                                     type="text"
                                     class="form-control shadow-none"
                                     rows="1">
                    </textarea>
                             </div>

                             <div class="col-md-6 ps-0 mb-3">
                                 <label class="form-label"> Pin code</label>
                                 <input type="number" class="form-control shadow-none" />
                             </div>

                             <div class="col-md-6 ps-0 mb-3">
                                 <label class="form-label">Date of Birth</label>
                                 <input type="date" class="form-control shadow-none" />
                             </div>
                             <div class="col-md-6 ps-0 mb-3">
                                 <label class="form-label">Password</label>
                                 <input type="password" class="form-control shadow-none" />
                             </div>
                             <div class="col-md-6 ps-0 mb-3">
                                 <label class="form-label">confirm Password</label>
                                 <input type="password" class="form-control shadow-none" />
                             </div>
                         </div>
                     </div>
                     <div class="text-center my-1">
                         <button class="btn btn-dark shadow-none">REGISTER</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <!-- Register modal ends -->
 <!-- Navbar ends -->