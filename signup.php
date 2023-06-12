
<?php
require_once("partials/header.php")


?>
    <div style="justify-content: center;">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Refferal &Admission</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  our school
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">About us</a></li>
                    <li><a class="dropdown-item" href="#">staff</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="parent.html">parent</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">contact us</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
      

    <!-- body -->
    <div class="container-fluid " style="background-color: skyblue;">

      <div class="row">
          
          <div class="col-md-3"></div>
  
          <div class="col-md-6   py-3 my-5 px-5">
              <h1 class="text-center text-white">Sign Up</h1>
              <form action="" method="" py-5 px-5>
                  <div class="mb-3">
                      <label for="fullname" class="form-label">FullName</label>
                      <input type="text" name="fullname" class="form-control" id="fullname" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                      <input type="password"  name="confirmpassword"class="form-control" id="exampleInputPassword1">
                  </div>
  
                  <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">User Intro</label>
                      <textarea class="form-control" name="intro" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
  
  
                  <button type="submit"  name="register" class="btn btn-danger">Submit</button>
              </form>
              <p class="mt-3">Already a member?<a href="profile.php" class="btn btn-default">Login Here</a></p>
          </div>
          <div class="col-md-3"></div> 
      </div> 
  </div>
  
  

<!-- footer -->
<div class="row" id="footer">
    
    <div><i class='fab fa-facebook-f' style='font-size:36px'></i>&nbsp;
      <i class='fab fa-instagram' style='font-size:36px'></i>
      </div>
      <h5>CONTACT US</h5>
      <h5>20,mobolaji Bank Anthony street,lagos</h5>
      <h5><u>09038636175,| 09017618030</u><h5>
      <h6>Copyright 2023 Best Legacy Group Of Schools | Website by seyiweb.org</h6>
</div>
<script  src="bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>