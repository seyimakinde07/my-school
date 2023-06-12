
<?php
require_once("partials/header.php")


?>
   
<div class="container-fluid">

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
      <!-- header ends  -->
<div class="row">
<hr class="straight-line">


</div>
      
    <div class="row" style="margin-bottom:150px;margin-top:20px;">
        
        <div class="col-md-3"></div>
        
        <div class="col-md-6  bg-primary py-3 my-5 px-5"style="border-radius:4px;">
            <h1 class="text-center text-white">PARENT REGISTRATION FORM</h1>
            <form action="process/newparentregister.php" method="post" py-5 px-5>
                <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name:</label>
                        <input type="text" name="fullname" class="form-control" id="fullname" aria-describedby="emailHelp">
                      </div>
                    </div>
                    <div class="col">
                      <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="password">
                      </div>
                    </div>
                    <div class="col">
                      <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password:</label>
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                      </div>
                    </div>
                  </div>

                  <h3><a href="student.php" style="color: white; background-color:brown; border-radius: 15px; padding: 5px 10px; text-decoration: none;" name="register">SUBMIT</a></h3><br>
                  
            
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
        
          
        
        
        
    












</div>





</body>
</html>