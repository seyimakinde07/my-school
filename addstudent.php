<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="trinity.css" rel="stylesheet" type="text/css">
    <link href="index.html" rel="stylesheet" type="text/css">
    <link href="parent.html" rel="stylesheet" type="text/css">
    <link href="profile.html" rel="stylesheet" type="text/css">
    <link href="signup.html" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="animate.min.css">


    <title>add student</title>
</head>
<body>
    <div class="container-fluid">
<!-- header -->
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
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
  
  
  
  
<!-- header ends -->


<!-- body -->

<div class="img-overlay">
  <img src="img2/resume.jpg" alt="centered image" class="center">
  <div class="row overlay">
       <div class="col-5" style="margin-top: 200px; color: white;margin-left: 100px;">
        <h1 style="text-align: center; color: white;text-shadow: 10px 5px 6px #000000;" class="animate__animated animate__flipInX"><i>"Education is not just about acquiring knowledge; it's about discovering<br>
           who you truly are and unlocking your full potential."</i></h1><br>

       </div>  

  </div>
</div>













<div>

<form action="" method="post">
    <div class="row">

    <div class="col">

        
        <div class="row">
            <div class="col-md-4">
            <label for="firstName"><b>FIRST NAME:</b></label>
            <input type="text" name="firstName"  class="form-control"required><br>
        </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
            <label for="MiddleName"><b>MIDDLE NAME:</b></label>
            <input type="text" name="Mname"  class="form-control"required><br>
        </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
            <label for="OtherName"><b>OTHERNAME:</b></label>
            <input type="text" name="OtherName"  class="form-control"required><br>
        </div>
        </div>
        
        <div class="row">
            <div class="col-4">
            <label for="address"><b>ADDRESS:</b></label>
            <input type="text" name="address" class="form-control" required><br>
        </div>
        </div>


        <div class="row">
            <div class="col-3">
                <label for=""><b>GENDER:</b></label>
            </div>
        <div class="col" style="color: blue;">
        <input type="radio" name="gender" value="male">Male &nbsp;
        <input type="radio" name="gender" value="female">Female
        </div>
        
        </div><br>

      
        <div class="row">
            <div class="col-3">
                <label for=""><b>SCHOOL:</b></label>
            </div>
        <div class="col" style="color: blue;">
        <input type="radio" name="school" value="male">Primary &nbsp;
        <input type="radio" name="school" value="female">Secondary
        </div>
        
        </div><br>



    <input type="submit" value="Submit">


    </div>
    </div>
</form>
</div>



















<!-- body ends -->

        <!-- footer -->
    <div class="row" id="footer">
    
        <div class="col-md-3 "><br>
            <h5>@ 2023 Copyright by <br>Trinity group of schools </h5>
            
    
            </div>
        <div class="col-md-3" >
            <h3>Contact us </h3>
            <h5>09038636175<h5>
                <h5>TrinityGroups@gmail.com<h5>
            
            </div>

            <div class="col-md-3">
                <h3>Address</h3>
                <h5>20,mobolaji Bank Anthony street,lagos</h5>
            </div>
            </div>




    </div>

    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>