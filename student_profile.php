
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



  <div style="background-color: rgb(3, 3, 34);color: white;text-align: center;"><h2 class="animate__animated animate__slideInDown"><i>"Education is the most powerful weapon which you can use to change the world.</i></h2><br>
  </div>
  <div class="row" style="margin-top: 10px;">
  


<div class="card">
    <img src="img2/schbus.jpeg" alt="John" style="width:100%">
    <h1>John Mary</h1>
    <p class="title">JSS2 Student</p>
    <h4>Best Legacy Int'l School</h4>
    <p><button>Change Picture</button></p>
   
  </div>


    <div class="col-md-7 card-link">
      <h2  class="col protext">Student Profile Card</h2>
    <p><a href="">Edit My Profile</a></p>
    <p><a href="">Student Weekly Report</a></p>
    <p><a href="#" onclick="toggleCommentForm()">Make a comment</a></p>
  <div id="commentForm" style="display: none;">
    <textarea id="commentTextArea" rows="4" cols="50"></textarea>
    <div class=" col-2 submit-section">
        <button onclick="submitComment()">Submit</button>
      </div>
  </div>


</div>
</div>






<!-- footer -->
<div class="row" id="footer" style="margin-top: 100px;">


    <div><a href=""><i class='fab fa-facebook-f' style='font-size:25px'></i> </a>&nbsp;
      <a href=""><i class='fab fa-instagram' style='font-size:25px'></i> </a>
    </div>
    <h6>CONTACT US</h6>
    <h6>20,mobolaji Bank Anthony street,lagos</h6>
    <!-- <h5><u>09038636175,| 09017618030</u><h5> -->
    <h6>Copyright 2023 Best Legacy Group Of Schools | Website by seyiweb.org</h6>
              
              </div>
      
    


              
<script src="jquery.js"></script>
<script>

function toggleCommentForm() {
  var commentForm = document.getElementById("commentForm");
  if (commentForm.style.display === "none") {
    commentForm.style.display = "block";
  } else {
    commentForm.style.display = "none";
  }
}
function submitComment() {
  var commentTextArea = document.getElementById("commentTextArea");
  var comment = commentTextArea.value;
  
  alert("we will review your comment shortly and get back to you: ");
  commentTextArea.value = "";
  var commentForm = document.getElementById("commentForm");
  commentForm.style.display = "none";
}

    
</script>
</body>
</html>
