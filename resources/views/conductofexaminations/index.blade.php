<!doctype html>
<html lang="en">
  <head>
  <style>
  table, th, td {
  border: 1px solid black;
}</style>
    <title>Examination Claim Form - III - Conduct of Examinations</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    
  
    <div class="container">

    <br><br>
    <h1 style = "text-align:center">UNIVERSITY OF JAFFNA - SRI LANKA</h1>
    <h2 style = "text-align:center">Examination Claim Form - III - Conduct of Examinations</h2>
    <br>
    <br>

    <div class="row">

    <div class="col-8">
        <h5 class="row-center">Faculty : Science</h5>
            <h5 class="row-center">Department : Computer Science</h5>
            <h5 class="row-center">Name of Examination : 1st Semester Examination in Science - 2021</h5>
        </div>

    </div>

    <br>
    <br>
    
    <div>


    <div class="table-responsive">

  <table class="table table-bordered table-striped table-borded" style="width:100%; text-align:center;">
      <!--tAble head class
          thead-light
          thead-dark-->
    
        <thead class="thead bg-primary text-white">
          <tr>
            <th>Subjects</th>
            <th>Date</th>
            <th>Time</th>
            <th>Type of Examination</th>
            <th>No of Students</th>
            <th>No of Groups</th>
            <th>Supervision</th>
            <th>Invigilation</th>
            <th>Technical Officer</th>
            <th>Lab Attendants</th>
            <th>Hall Attendant</th>
            <th>Total</th>
            <th>No of Contiuous Assessment</th>
            <th>Total(25%) * No of Continuous Assessment</th>
            <th>Grand Total</th>
          </tr>

          

        </thead>

        <tbody>
        @foreach($payments as $payment)
              <tr>
                
                <tr>
                    <td colspan="15" style = "text-align:left">
                    @if ($payment->actionName == "Supervision")
                      {{$payment->userName}} , {{$payment->userDesignation}} , Nic No:- {{$payment->userNicNum}} ({{$payment->userType}})
                    @elseif ($payment->actionName == "Invigilation") 
                      {{$payment->userName}} , {{$payment->userDesignation}} , Nic No:- {{$payment->userNicNum}} ({{$payment->userType}})
                    @elseif ($payment->actionName == "Technical Officer") 
                      {{$payment->userName}} , {{$payment->userDesignation}} , Nic No:- {{$payment->userNicNum}} ({{$payment->userType}})
                    @elseif ($payment->actionName == "Lab Attendants") 
                      {{$payment->userName}} , {{$payment->userDesignation}} , Nic No:- {{$payment->userNicNum}} ({{$payment->userType}})
                    @elseif ($payment->actionName == "Hall Attendant") 
                      {{$payment->userName}} , {{$payment->userDesignation}} , Nic No:- {{$payment->userNicNum}} ({{$payment->userType}})
                    @endif
                  </td>
                
                </tr>
                <tr>
                  <td>
                    @if ($payment->actionName == "Supervision")
                      {{$payment->courseCode}} 
                    @elseif ($payment->actionName == "Invigilation")  
                      {{$payment->courseCode}}  
                    @elseif ($payment->actionName == "Technical Officer")  
                      {{$payment->courseCode}}  
                    @elseif ($payment->actionName == "Lab Attendants")  
                      {{$payment->courseCode}}  
                    @elseif ($payment->actionName == "Hall Attendant")  
                      {{$payment->courseCode}}  
                    @endif
                  </td>  

                  <td>
                    @if ($payment->actionName == "Supervision")
                      {{$payment->examDate}} 
                    @elseif ($payment->actionName == "Invigilation")  
                      {{$payment->examDate}}  
                    @elseif ($payment->actionName == "Technical Officer")  
                      {{$payment->examDate}}  
                    @elseif ($payment->actionName == "Lab Attendants")  
                      {{$payment->examDate}}  
                    @elseif ($payment->actionName == "Hall Attendant")  
                      {{$payment->examDate}}  
                    @endif  
                  </td> 
                  
                  <td>
                    @if ($payment->actionName == "Supervision")
                      {{$payment->examStartTime}}-{{$payment->examEndTime}} 
                    @elseif ($payment->actionName == "Invigilation")  
                      {{$payment->examStartTime}}-{{$payment->examEndTime}} 
                    @elseif ($payment->actionName == "Technical Officer")  
                      {{$payment->examStartTime}}-{{$payment->examEndTime}} 
                    @elseif ($payment->actionName == "Lab Attendants")  
                      {{$payment->examStartTime}}-{{$payment->examEndTime}} 
                    @elseif ($payment->actionName == "Hall Attendant")  
                      {{$payment->examStartTime}}-{{$payment->examEndTime}} 
                    @endif  
                  </td> 
                  
                  <td>
                    @if ($payment->actionName == "Supervision")
                      {{$payment->examType}} 
                    @elseif ($payment->actionName == "Invigilation")  
                      {{$payment->examType}}  
                    @elseif ($payment->actionName == "Technical Officer")  
                      {{$payment->examType}}  
                    @elseif ($payment->actionName == "Lab Attendants")  
                      {{$payment->examType}}  
                    @elseif ($payment->actionName == "Hall Attendant")  
                      {{$payment->examType}}  
                    @endif  
                  </td> 
                   
                  <td>
                    @if ($payment->actionName == "Supervision")
                      @if ($payment->examType == "Research")
                          {{$payment->examNumOfStudents}} 
                      @endif
                    @endif
                  </td>
                   
                  <td>
                    @if ($payment->actionName == "Supervision")
                      @if ($payment->examType == "Group Project")
                          {{$payment->examNumOfGroups}} 
                      @endif
                    @endif
                  </td>
                   
                  <td>
                    @if ($payment->actionName == "Supervision")
                      @if ($payment->examType == "Practical")
                        {{$payment->unitPrice}} 
                      @elseif ($payment->examType == "Research")
                        {{$payment->examNumOfStudents * $payment->unitPrice}}
                      @elseif ($payment->examType == "Group Project")
                        {{$payment->examNumOfGroups * $payment->unitPrice}}    
                      @endif
                    @endif
                  </td>

                  <td>
                    @if ($payment->actionName == "Invigilation")
                      @if ($payment->examType == "Practical")
                        {{$payment->unitPrice}} 
                        
                      @endif
                    @endif
                  </td>

                  <td>
                    @if ($payment->actionName == "Technical Officer")
                      @if ($payment->examType == "Practical")
                        {{$payment->unitPrice}} 
                        
                      @endif
                    @endif
                  </td>

                  <td>
                    @if ($payment->actionName == "Lab Attendants")
                      @if ($payment->examType == "Practical")
                        {{$payment->unitPrice}} 
                        
                      @endif
                    @endif
                  </td>

                  <td>
                    @if ($payment->actionName == "Hall Attendant")
                      @if ($payment->examType == "Practical")
                        {{$payment->unitPrice}} 
                        
                      @endif
                    @endif
                  </td>

                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  
                
                </tr>
                  
                 

                <tr>
                    <td colspan="14" style = "text-align:right">Grand Total</td>
                    <td>  </td>
                </tr>

              </tr>
             
              @endforeach
            </tbody>

            
        </table>
   
    

      

    </div><!--jumbotrone-->  
    <br><br>
     
    
</div><!--table-responsive-->
 <br><br>

 <div class="container">
    <div class="row">

      <div class="col-4">
          <h5 class="row-center">Prepared By : .........................................</h5>
          <h5 class="row-center">Name & Designation : ..........................</h5>
      </div>
      <div class="col-4"></div>
      <div class="col-4">
          <h5 class="row-center">Checked By : ...........................................</h5>
          <h5 class="row-center">Name & Designation : ...........................</h5>
      </div>

    </div><!--row-->
        <br><br>
    <div class="row">
        <div class="col-3">
          <h5>Certified Correct and Recommended for Payment</h5><br>
          <h5>...................................................</h5>
          <h5>Head of The Department</h5>
          <br>
          <h5>...................................................</h5>
          <h5>Date</h5>
          <br><br>

          <div class="form-check">
                <label class="form-check-label" for="gridCheck">
                Certified Correct and Recommended for Payment
                </label>
                <input class="form-check-input" type="checkbox" id="gridCheck">
          </div><br>  

          
          <input type="password" class="form-control" id="password" placeholder="Enter Passward for approve">
          <br>
          <button type="submit" class="btn btn-primary">Approved</button>
          <br><br>
        </div>

        <div class="col-3">
        <h5>Payment Authorized</h5><br>
          <h5>...................................................</h5>
          <h5>Dean of the Faculty</h5>
          <br>
          <h5>...................................................</h5>
          <h5>Date</h5>
        </div>

        <div class="col-3">
        <h5>Certified for Payment</h5><br>
          <h5>...................................................</h5>
          <h5>Examination Branch</h5>
          <br>
          <h5>...................................................</h5>
          <h5>Date</h5>
        </div>

        <div class="col-3">
        <h5>Approved for Payment</h5><br>
          <h5>...................................................</h5>
          <h5>Registrar</h5>
          <br>
          <h5>...................................................</h5>
          <h5>Date</h5>
        </div>

    </div><!--row-->
    <br><br><br>
    <script>
      function myFunction(){
          window.print();}
      </script> 
      <div class=" ">      
            <button class="btn-lg btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print as Document</button>            
      </div><br><br>
</div><!--container-->


 
  </body>
</html>
          
          
         