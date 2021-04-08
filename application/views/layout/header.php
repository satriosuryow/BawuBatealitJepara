   <!--=================================
    Header -->
   <header class="header header-style-02 header-sticky">
     <nav class="navbar navbar-static-top navbar-expand-lg px-3 px-md-5">
       <div class="container-fluid position-relative px-0">
         <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
         <a class="navbar-brand" href="<?php echo base_url(); ?>">
           <img class="img-fluid" src="<?php echo base_url(); ?>images/logonu.svg" alt="logo">
         </a>
         <a class="navbar-brand navbar-brand-sticky" href="<?php echo base_url(); ?>">
           <img class="img-fluid" src="<?php echo base_url(); ?>images/logonu.svg" alt="logo">
         </a>
         <div class="search-category ml-auto">
           <div class="form-group select-border course-category">
             <i class="fa fa-th text-primary mr-2" aria-hidden="true"></i>
             <select class=" basic-select">
               <option selected="selected">Category</option>
               <option>Design</option>
               <option>Development</option>
               <option>Marketing</option>
               <option>IT & software</option>
               <option>Photography</option>
               <option>Music</option>
               <option>Personal Development</option>
               <option>Business</option>
             </select>
           </div>
           <input type="text" class="form-control" placeholder="Search Courses...">
           <button class="search-button" type="submit"> <i class="fa fa-search"></i></button>
         </div>
         <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
             <li class="nav-item dropdown">
               <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
             </li>
             <li class="dropdown nav-item">
               <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">Course<i class="fas fa-chevron-down fa-xs"></i></a>
               <ul class="dropdown-menu megamenu dropdown-menu-md">
                 <li>
                   <div class="row no-gutters">
                     <div class="col-sm-6">
                       <h6 class="nav-title">Course Pages</h6>
                       <ul class="list-unstyled mt-lg-1">
                         <li><a class="dropdown-item" href="<?php echo base_url('course/courselist'); ?>"><span>Course List</span></a></li>
                         <li><a class="dropdown-item" href="<?php echo base_url('course/coursegrid'); ?>"><span>Course Grid</span></a></li>
                         <li><a class="dropdown-item" href="<?php echo base_url('course/coursedetail'); ?>"><span>Course Detail</span></a></li>
                         <li><a class="dropdown-item" href="<?php echo base_url('course/membership'); ?>"><span>Membership Levels</span></a></li>
                       </ul>
                     </div>
                     <div class="col-sm-6">
                       <h6 class="nav-title">Course Pages</h6>
                       <ul class="list-unstyled mt-lg-1">
                         <li><a class="dropdown-item" href="<?php echo base_url('course/events'); ?>"><span>Events</span></a></li>
                         <li><a class="dropdown-item" href="<?php echo base_url('course/eventdetail'); ?>"><span>Event Detail</span></a></li>
                         <li><a class="dropdown-item" href="<?php echo base_url('course/teachers'); ?>"><span>Teachers</span></a></li>
                         <li><a class="dropdown-item" href="<?php echo base_url('course/teacherdetail'); ?>"><span>Teacher Detail</span></a></li>
                       </ul>
                     </div>
                   </div>
                 </li>
               </ul>
             </li>
             <li class="dropdown nav-item">
               <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">Pages<i class="fas fa-chevron-down fa-xs"></i></a>
               <ul class="dropdown-menu megamenu dropdown-menu-lg">
                 <li>
                   <div class="row no-gutters">
                     <div class="col-sm-6 col-md-4">
                       <h6 class="nav-title">Basic Pages</h6>
                       <ul class="list-unstyled mt-lg-1">
                         <li><a class="dropdown-item" href="<?php echo base_url('pages/aboutus'); ?>"><span>About us</span></a></li>
                         <li><a class="dropdown-item" href="<?php echo base_url('pages/contactus'); ?>"><span>Contact us</span></a></li>
                         <li><a class="dropdown-item" href="<?php echo base_url('pages/gallery'); ?>"><span>Gallery</span></a></li>
                         <li><a class="dropdown-item" href="<?php echo base_url('pages/login'); ?>"><span>login</span></a></li>
                       </ul>
                     </div>
                     <div class="col-sm-6 col-md-4">
                       <h6 class="nav-title">Information Pages</h6>
                       <ul class="list-unstyled mt-lg-1">
                         <li><a class="dropdown-item" href="<?php echo base_url('pages/privacy'); ?>"><span>Privacy policy</span></a></li>
                         <li><a class="dropdown-item" href="<?php echo base_url('pages/terms'); ?>"><span>Terms & conditions</span></a></li>
                         <li><a class="dropdown-item" href="<?php echo base_url('pages/faqs'); ?>"><span>FAQs</span></a></li>
                       </ul>
                     </div>
                   </div>
                 </li>
               </ul>
             </li>
             <li class="dropdown nav-item">
               <a class="nav-link" href="<?php echo base_url('blog'); ?>">Blog</a>
             </li>
             <li><a class="nav-link" href="<?php echo base_url('pages/contactus'); ?>">Contact us</a></li>
           </ul>
         </div>
         <div class="woo-action">
           <ul class="list-unstyled">
             <li class="user"><a data-toggle="modal" data-target="#loginModal" href="#">Hello sign in<i class="fa fa-user pl-2 text-primary"></i></a></li>
             <li class="cart dropdown">
               <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="cart-icon"><i class="fas fa-shopping-cart"></i></span></button>
               <div class="dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                 <ul class="cart-list pl-0">
                   <li class="d-flex">
                     <a class="remove-item" href="#"><i class="fas fa-times text-danger"></i></a>
                     <img class="img-fluid mr-3" src="<?php echo base_url(); ?>images/shop/01.jpg" alt="">
                     <div class="cart-info">
                       <a href="#">Landscape Visitors Book - 122 Pages, A Design, A4</a>
                       <span class="d-block">1 x 12.49</span>
                     </div>
                   </li>
                   <li class="d-flex">
                     <a class="remove-item" href="#"><i class="fas fa-times text-danger"></i></a>
                     <img class="img-fluid mr-3" src="<?php echo base_url(); ?>images/shop/02.jpg" alt="">
                     <div class="cart-info">
                       <a href="#">Leather Visitors Notebook True-Ally A4 Faux</a>
                       <span class="d-block">1 x 28.72</span>
                     </div>
                   </li>
                 </ul>
                 <div class="cart-footer">
                   <div class="d-flex mb-3">
                     <b class="mr-auto text-dark">Subtotal:</b>
                     <span>$41.21</span>
                   </div>
                   <div class="d-inline-block d-sm-flex">
                     <a class="btn btn-sm btn-primary text-white mr-2 px-4" href="#">View cart</a>
                     <a class="btn btn-sm btn-dark text-white ml-0 mt-1 mt-sm-0 ml-sm-2 px-4" href="#">Checkout</a>
                   </div>
                 </div>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </nav>
   </header>
   <!--=================================
    Header -->

   <!--=================================
    Modal login -->
   <div class="modal login fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header border-0">
           <h5 class="modal-title" id="loginModalLabel">Log in & Register</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
             <li class="nav-item">
               <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false"> <span> Log in</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true"><span>Register</span></a>
             </li>
           </ul>
           <div class="tab-content" id="myTabContent">
             <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
               <form class="form-row my-4 align-items-center">
                 <div class="form-group col-sm-12">
                   <input type="text" class="form-control" placeholder="Username">
                 </div>
                 <div class="form-group col-sm-12">
                   <input type="Password" class="form-control" placeholder="Password">
                 </div>
                 <div class="col-sm-6">
                   <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                 </div>
                 <div class="col-sm-6">
                   <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                     <li class="mr-1"><a class="text-dark" href="#"><b>Already Registered User? Click here to login</b></a></li>
                   </ul>
                 </div>
               </form>
               <div class="login-social-media border pl-4 pr-4 pb-4 pt-0 rounded-sm">
                 <div class="mb-4 d-block text-center"><b class="bg-white pl-2 pr-2 mt-3 d-block">Login or Sign in with</b></div>
                 <form class="row">
                   <div class="col-sm-6">
                     <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f mr-2"></i>Login with Facebook</span></a>
                   </div>
                   <div class="col-sm-6">
                     <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter mr-2"></i>Login with Twitter</span></a>
                   </div>
                   <div class="col-sm-6">
                     <a class="btn instagram-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-instagram mr-2"></i>Login with Instagram</span></a>
                   </div>
                   <div class="col-sm-6">
                     <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in mr-2"></i>Login with Linkedin</span></a>
                   </div>
                 </form>
               </div>
             </div>
             <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
               <form class="form-row my-4 align-items-center">
                 <div class="form-group col-sm-12">
                   <input type="text" class="form-control" placeholder="Username">
                 </div>
                 <div class="form-group col-sm-12">
                   <input type="email" class="form-control" placeholder="Email Address">
                 </div>
                 <div class="form-group col-sm-12">
                   <input type="Password" class="form-control" placeholder="Password">
                 </div>
                 <div class="form-group col-sm-12">
                   <input type="Password" class="form-control" placeholder="Confirm Password">
                 </div>
                 <div class="col-sm-6">
                   <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                 </div>
                 <div class="col-sm-6">
                   <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                     <li class="mr-1"><a class="text-dark" href="#"><b>Already Registered User? Click here to login</b></a></li>
                   </ul>
                 </div>
               </form>
               <div class="login-social-media border pl-4 pr-4 pb-4 pt-0 rounded-sm">
                 <div class="mb-4 d-block text-center"><b class="bg-white pl-2 pr-2 mt-3 d-block">Login or Sign in with</b></div>
                 <form class="row">
                   <div class="col-sm-6">
                     <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f mr-2"></i>Login with Facebook</span></a>
                   </div>
                   <div class="col-sm-6">
                     <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter mr-2"></i>Login with Twitter</span></a>
                   </div>
                   <div class="col-sm-6">
                     <a class="btn instagram-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-instagram mr-2"></i>Login with Instagram</span></a>
                   </div>
                   <div class="col-sm-6">
                     <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in mr-2"></i>Login with Linkedin</span></a>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!--=================================
    Modal login -->