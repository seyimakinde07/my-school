
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
      
<!-- header ends -->

<!-- body starts -->

<div class="row">
<div class="col">






</div>


</div>







<!-- first row -->


   <div class="row" style="background-color:rgba(207, 195, 195,0.5)">
    <div class="col-5" >
      <div>
        <h3 style="margin-left: 50px;">Profile Picture</h3>

      </div>
  <div><i class="fa fa-users" aria-hidden="true" style="font-size: 300px;border: 4px solid paleturquoise;"></i></div>
</div> 

 
    
    <div class="col-5">
        <a href="addstudent.html">Add student/s</a><br>
        <a href="#">view student's profile</a>
    </div>
   </div> 

<!-- first row ends -->
<!-- second row starts -->








<!-- second row ends -->


   <div class="row">
    <div class="col-md-12" style="background-color:skyblue; height: 400px;text-align: center;">
      <h1>Be part of our BLIGS community</h1><br><br>
      <h4>If you would like to be involved with creative content planning,<br>
        research groups or live school events, have your say and join the<br>
        BLIGS  Teacher community</h4><br><br>



      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  login 
    </button>

 
    </div>

   

    </div>
   </div>




   



<!-- body ends -->


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




<script  src="bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">registration form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
		<form class="row g-3">
		  <div class="col-auto">
    <label for="mail" class="">Email</label>
    <input type="email"  class="form-control" id="email" />
  </div>
		
	  <div class="col-auto">
    <label for="phone" class="">contact Number</label>
    <input type="number"  class="form-control" id="phone"/><br>

    <button class="btn btn-success">submit</button>

  </div>	
		
</body>
</html>