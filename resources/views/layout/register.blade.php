<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="assets/images/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <!--Navigation bar with bootstrap
expand-sm
expand-xl
expand-md
expand-lg
these classes for make a horzontal nav bar
justify-content-center 
justify-content-end ---- this is for make center navbar

navbar-brand - this class for add new logo
navbar-text - add any text to nav bar 
its need to be add in span class

to fix nav bar on top use ---fix-top class or fixed-bottom
-->
<nav class="navbar navbar-expand-sm justify-content-end bg-primary navbar-dark"> <!--fixed-top-->
  <img src="assets\images\logo.png" alt="Exam cliam managemnt System" height="50px" width="50px" class="rounded-circle">
  <a class="navbar-brand text-white"  href="#">&nbsp &nbsp Exam Claim Management System</a>
 <hr>

<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="#"><button type="submit" class="btn btn-primary">Login</button></a>
  </li>
</ul>


</nav>

<div class="container">
  <br>
  <br>
  <img src="assets\images\logo.png" alt="Exam claim manegement System" height="100px" width="100px" class="mx-auto d-block">
   <h3 class="text-primary text-center">User Registration</h3>
   
   

   
<div class="row p-3">
<!-- left column -->
    <div class="col-3">
      <div class="col-12 p-3">
      </div>
    </div>


<div class="col-6">
    <div class="col-12 p-3">
        
   
    <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="user_name">User Name</label>
              <input type="text" class="form-control" id="user_name" placeholder="Enter User Name">
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email ID</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email ID">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" id="first_name" placeholder="Enter First Name">
            </div>
            <div class="form-group col-md-6">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name">
            </div>
          </div>

          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="mobile">Mobile Number</label>
              <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number">
            </div>
            <div class="form-group col-md-6">
              <label for="nic_num">NIC Number</label>
              <input type="text" class="form-control" id="nic_num" placeholder="Enter NIC Number">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="bank_name">Bank Name</label>
              <input type="text" class="form-control" id="bank_name" placeholder="Enter Bank Name">
            </div>
            <div class="form-group col-md-6">
              <label for="bank_acc_num">Bank Account Number</label>
              <input type="text" class="form-control" id="bank_acc_num" placeholder="Enter Bank Account Number">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="designation">Designation</label>
              <input type="text" class="form-control" id="designation" placeholder="Enter Designation">
            </div>
            <div class="form-group col-md-6">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter Password">
            </div>
          </div>  

            <div class="form-group">
                <label for="password">Re-Enter Passward</label>
                <input type="password" class="form-control" id="password" placeholder="Re-Enter The Password">
            </div>
                
          <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    All the details are true as my knowladge
                </label>
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>

    <div class="col-3">
        <div class="col-12  p-3">
            
        </div>
    </div>

</div><!--row class-->





</div> <!--container-->

<!--Footer here-->
<footer class="bg-primary text-center text-lg-start bg-primary">
  <!-- Grid container -->
 
    <!--Grid row-->
    <div class="row">
      <div class="col-lg-1">
        
      </div>
      <!--Grid column-->
      <div class="col-lg-6">
        <p class="text-white text-left">
        
        web : <a href="#http://www.jfn.ac.lk" target="_blank" >http://www.jfn.ac.lk</a><br>
        lms : <a href="#http://lms.jfn.ac.lk/lms" target="_blank">http://lms.jfn.ac.lk/lms</a> <br>
          <a href="https://www.facebook.com/university.jaffna" target="_blank"><img src="assets\images\fb.png" alt="facebook" style="width:25px;height:25px;"></a>
          <a href="https://twitter.com/uojofficial" target="_blank"><img src="assets\images\twter.png" alt="twitter" style="width:25px;height:25px;"></a>
          <a href="https://www.youtube.com/channel/UCMNzGVtXq9_Y4oYOYEkd-7Q?sub_confirmation=1" target="_blank"><img src="assets\images\youtube.png" alt="youtube" style="width:25px;height:25px;"></a>
          <a href="https://www.linkedin.com/school/university-of-jaffna/" target="_blank"><img src="assets\images\in.png" alt="linkedin" style="width:25px;height:25px;"></a>
       </p>
      </div>

      <!--Grid column-->
      <div class="col-lg-4">
        <p class="text-white text-left">
         Address: PO Box 57, Thirunelvely, Jaffna. <br>Sri Lanka. <br>
         Tel    : (+94) 021 221 8100 <br>
         E-mail  : info@univ.jfn.ac.lk 
       </p>
      </div>
      <!--Grid column-->
      <div class="col-lg-1"></div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  

  <!-- Copyright -->
  <div class="text-center text-white" style="background-color: rgba(19, 16, 219, 0.2)">
    © 2021 All right reserved.
    <a class="text-white" href="https://mdbootstrap.com/">University of Jaffna</a>
  </div>
  <!-- Copyright -->
</footer>


</body>
</html>