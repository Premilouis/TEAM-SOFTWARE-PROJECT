<!doctype html>
<html lang="en">
  <head>
  <style>
  table, th, td {
  border: 1px solid black;
}</style>
    <title>Examination Claim Form - II - Evaluation</title>
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
    <h2 style = "text-align:center">Examination Claim Form - II - Evaluation</h2>
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
            <th rowspan="3">Subjects</th>
            <th rowspan="3">Date</th>
            <th rowspan="3">Time</th>
            <th rowspan="3">Type of Examination</th>
            <th colspan="2">No of Students</th>
            <th rowspan="3">1st Marking(1) / 2nd Marking(2)</th>
            <th colspan="4" >Written Marking</th>
            <th rowspan="2" colspan="2">Clinical Exam / Oral Exam / Practical Exam</th>
            <th rowspan="3">Total</th>
            <th rowspan="3">No of Contiuous Assessment</th>
            <th rowspan="3">Total(25%) * No of Continuous Assessment</th>
            <th rowspan="3">Grand Total</th>
          </tr>

          <tr>
            <th rowspan="2">Proper </th>
            <th rowspan="2">Repeat</th>
            <th colspan="2">Essay</th>
            <th colspan="2">MCQ</th> 
            
          </tr>
          <tr>
            <th>Rate for One Scripts</th>
            <th>Rs. </th>
            <th>Rate for One Scripts</th>
            <th>Rs. </th>
            <th>Rate for One Scripts </th>
            <th>Rs. </th>
          </tr>

        </thead>

        <tbody>
        @foreach($payments as $payment)
              <tr>
                
                  <tr>
                    <td colspan="17" style = "text-align:left">
                    @if ($payment->actionName == "1st Marking")
                      {{$payment->userName}} , {{$payment->userDesignation}} , Nic No:- {{$payment->userNicNum}} ({{$payment->userType}})
                    @elseif ($payment->actionName == "2nd Marking") 
                      {{$payment->userName}} , {{$payment->userDesignation}} , Nic No:- {{$payment->userNicNum}} ({{$payment->userType}})
                    @endif
                  </td>
                
                  </tr>
                  
                
                  <tr>
                    <td>
                    @if ($payment->actionName == "1st Marking")
                      {{$payment->courseCode}} 
                    @elseif ($payment->actionName == "2nd Marking")  
                      {{$payment->courseCode}}  
                    @endif
                    </td>
                    <td>
                    @if ($payment->actionName == "1st Marking")
                      {{$payment->examDate}} 
                    @elseif ($payment->actionName == "2nd Marking")  
                      {{$payment->examDate}}  
                    @endif
                    </td>
                    <td>
                    @if ($payment->actionName == "1st Marking")
                      {{$payment->examStartTime}}-{{$payment->examEndTime}} 
                    @elseif ($payment->actionName == "2nd Marking") 
                      {{$payment->examStartTime}}-{{$payment->examEndTime}} 
                    @endif
                    </td>
                    <td>
                    @if ($payment->actionName == "1st Marking")
                      {{$payment->examType}} 
                    @elseif ($payment->actionName == "2nd Marking")  
                      {{$payment->examType}}  
                    @endif 
                    </td>
                    <td>
                    @if ($payment->actionName == "1st Marking")
                      @if ($payment->examKind == "Proper")
                          {{$payment->examNumOfStudents}} 
                      @endif
                    @elseif ($payment->actionName == "2nd Marking") 
                      @if ($payment->examKind == "Proper")
                          {{$payment->examNumOfStudents}} 
                      @endif 
                    @endif 
                    </td>
                    <td>
                    @if ($payment->actionName == "1st Marking")
                      @if ($payment->examKind == "Repeat")
                          {{$payment->examNumOfStudents}} 
                      @endif
                    @elseif ($payment->actionName == "2nd Marking") 
                      @if ($payment->examKind == "Repeat")
                          {{$payment->examNumOfStudents}} 
                      @endif 
                    @endif
                    </td>
                    <td>
                    @if ($payment->actionName == "1st Marking")
                        1
                    @elseif ($payment->actionName == "2nd Marking")
                        2
                    @endif
                    </td>
                    <td> 
                    @if ($payment->userType == "Internal")
                        @if ($payment->actionName == "1st Marking")
                            {{$payment->unitPrice}} 
                        @elseif ($payment->actionName == "2nd Marking")
                            {{$payment->unitPrice}} 
                        @endif
                    @elseif ($payment->userType == "External")
                        @if ($payment->actionName == "1st Marking")
                            {{$payment->unitPrice}} 
                        @elseif ($payment->actionName == "2nd Marking")
                            {{$payment->unitPrice}} 
                        @endif  
                    @else
                        @if ($payment->actionName == "1st Marking")
                            {{$payment->unitPrice}} 
                        @elseif ($payment->actionName == "2nd Marking")
                            {{$payment->unitPrice}} 
                        @endif
                    @endif
                    </td>
                    <td> 
                    @if ($payment->userType == "Internal")
                        @if ($payment->actionName == "1st Marking")
                            {{$payment->examNumOfStudents * $payment->unitPrice}} 
                        @elseif ($payment->actionName == "2nd Marking")
                            {{$payment->examNumOfStudents * $payment->unitPrice}} 
                        @endif
                    @elseif ($payment->userType == "External")
                        @if ($payment->actionName == "1st Marking")
                            {{$payment->examNumOfStudents * $payment->unitPrice}} 
                        @elseif ($payment->actionName == "2nd Marking")
                            {{$payment->examNumOfStudents * $payment->unitPrice}} 
                        @endif  
                    @else
                        @if ($payment->actionName == "1st Marking")
                          @if ($payment->examNumOfStudents <= 25)
                            125
                          @else 
                            {{$payment->examNumOfStudents * $payment->unitPrice}}
                          @endif
                        @elseif ($payment->actionName == "2nd Marking")
                          @if ($payment->examNumOfStudents <= 25)
                            125
                          @else 
                            {{$payment->examNumOfStudents * $payment->unitPrice}}
                          @endif
                        @endif
                    @endif
                    </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    
                  </tr>
                  
                 

                  <tr>
                    <td colspan="16" style = "text-align:right">Grand Total</td>
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
          
          
         