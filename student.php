
<?php
require_once("partials/header.php")


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
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
      
      
      
      
 <!-- header ends -->


 <!-- banner -->


<div class="img-overlay" style="justify-content: center;
            align-items: center;">
    <img src="img2/parent2.png" alt="centered image" class="center">
    <div class="row overlay" style="color: white;">
        <div class="col" >
            <h2 style="color: white;margin-top: 100px;">WELCOME TO BEST LEGACY GROUP OF SCHOOLS</h2>
                <h5><i> We're excited to have you and your children join our educational community.</i></h5>


        </div>  

    </div>
  </div>



  <div class="container-fluid bg-white">

    <div class="row">
        
        

        <div class="col-md-6  py-3 my-5 px-5" style="background-color: rgb(19, 19, 85);color: white;">
            <h1 class="text-center text-white">STUDENT REGISTRATION FORM</h1>
            <form action="" method="post" py-5 px-5>
                <div class="mb-3">
                    <label for="fullname" class="form-label">FullName</label>
                    <input type="text" name="fullname" class="form-control" id="fullname" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="houseaddress" class="form-label">Address</label>
                    <input type="text" name="add" class="form-control" id="textadd">
                </div>

                
                  <div class="row">
                    <h4><i>Gender</i></h4>
                    <div class="col-6">  
                <input type="radio" id="male" name="gender" value="Male">
              <label>MALE</label><br>
              </div>
              <div class="col-6">
              <input type="radio" id="female" name="gender" value="Female">
              <label>FEMALE</label><br>
              </div>
              </div><br>
            
                <div class="row">
                  <div class="col-6">
                    <label for="username" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control " id="username" name="dob">
                  </div>
                  <div class="col-6">
                    <label for="country" class="form-label">nationality</label>
                    <input type="country" class="form-control" id="country" name="country"><br>
                  </div>
                </div>
                  <div class="row">
                    <h4><i>classes</i></h4>
                    <div class="col-6">  
                <input type="radio" id="pry" name="sch" value="prysch">
              <label>PRIMARY SCHOOL</label><br>
              </div>
              <div class="col-6">
              <input type="radio" id="sec" name="sch" value="secsch">
              <label>SECONDARY SCHOOL</label><br>
              </div>
              </div><br>
            
              <div class="row">
                <div class="col-6">
                <select id="pryclass" >
                  <option value="pryschool">Primary</option>
                  <option value="pryschool">Pre School</option>
                <option value="Nursery 1">Nursery 1</option>
                <option value="Nursery 2">Nursery 2</option>
                <option value="Kindergarten 1">Kindergarten 1</option>
                <option value="Kindergarten 2">Kindergarten 2</option>
                <option value="Primary 1">Primary 1</option>
                <option value="Primary 2">Primary 2</option>
                <option value="Primary 3">Primary 3</option>
                <option value="Primary 4">Primary 4</option>
                <option value="Primary 5">Primary 5</option>
                 
                </select>

              </div>

              <div class="col-6">
              <select id="secclass">
                <option value="pryschool">secondary</option>
                <option value="JS1">JS1</option>
                <option value="JS2">JS2</option>
                <option value="JS3">JS3</option>
                <option value="SS1">SS1</option>
                 <option value="SS2">SS2</option>
                <option value="SS3">SS3</option>
              </select>
              </div>
            </div>
              
                <!-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password"  name="confirmpassword"class="form-control" id="exampleInputPassword1">
                </div> -->

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">User Intro</label>
                    <textarea class="form-control" name="intro" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>


                <!-- <button type="submit"  name="register" class="btn btn-danger">Submit</button> -->
                <h6><a href="student_profile.php" style="color: white; background-color:blue; border-radius: 15px; padding: 5px 10px; text-decoration: none;">Create student Account</a></h6>
            </form>
            </form>
        </div>
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






<script src="jquery.js"></script>
<script>
   $(document).ready(function(){
    $('#secclass').hide()

    $('#sec').click(function(){
                $('#secclass').show();
                $('#pryclass').hide()
                
                
                


            })
            $('#pry').click(function(){
                $('#pryclass').show();
                $('#secclass').hide()
                
                
                


            })

   }) 
</script>
</body>
</html