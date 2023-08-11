
@extends('layouts.app')  

@section('content_header')
   <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">employee</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">employee</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection  
  
@section('main_content')


  
   <div class="container-fluid">
   
        <div class="row">
            <!-- left column -->
      <div class="col-md-8 m-auto">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add employee</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="{{ route('employee_add_action') }}">
          <!-- onsubmit="return validateForm()"  -->
            @csrf
            <div class="card-body">

            <div class="form-group">
                <label for="Name">Employee ID</label>
                <input type="number" autocomplete="off" class="form-control" id="employeeid" name="employeeid" placeholder="Enter employee id">
                <span id="employeeid-error" class="text-danger"></span>
              </div>  

              <div class="form-group">
                <label for="Name">Employee Name</label>
                <input type="text" autocomplete="off" class="form-control" id="name" name="name" placeholder="Enter employee Name">
                <span id="name-error" class="text-danger"></span>
              </div>  



              <div class="form-group col-4">
                      <label for="employeeId" class="form-control">Designation </label>
                      <select class="form-select form-control" id="designation" name="designation" required>
                          <option >Select Designation</option>
                          @foreach ($designation as $desig)
                              <option value="{{ $desig->id }}">{{ $desig->desig_name }}</option>
                          @endforeach
                      </select>
                      <span id="designation-error" class="text-danger"></span>
                  </div>

<!-- 

              <div class="form-group">
                <label for="Name">Designation</label>
                <input type="text" autocomplete="off" class="form-control" id="name" name="name" placeholder="Enter employee Name">
                <span id="nameError" class="text-danger"></span>
              </div>   -->

              <div class="form-group col-4">
                      <label for="employeeId" class="form-control">Department </label>
                      <select class="form-select form-control" id="department" name="department" required>
                          <option >Select Department</option>
                          @foreach ($department as $dept)
                              <option value="{{ $dept->id }}">{{ $dept->dept_name }}</option>
                          @endforeach
                        
                      </select>
                      <span id="department-error" class="text-danger"></span>
                     
                  </div>


<!-- 

              <div class="form-group">
                <label for="Name">Department</label>
                <input type="text" autocomplete="off" class="form-control" id="name" name="name" placeholder="Enter employee Name">
                <span id="nameError" class="text-danger"></span>
              </div>   -->



              <div class="form-group">
                <label for="Description">Email</label>
                <input type="email" autocomplete="off" class="form-control" id="email" name="email" placeholder="Enter email..">
                <span id="email-error" class="text-danger"></span>
              </div>  
 

              <div class="form-group">
                <label for="employee Short Name">phone</label>
                <input type="text" autocomplete="off" class="form-control" id="phone" name="phone" placeholder="Enter phone number..">
                <span id="phone-error" class="text-danger"></span>
              </div>   

        <!--
              <div class="form-group">s
                <label for="exampleInputFile">Company Logo</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
        -->      
             
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
               <a href="{{ route('employee_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
              
            </div>
          </form>
        </div>
        <!-- /.card -->

           

      </div>
      <!--/.col (left) -->
        </div>

   
    </div>
    <!-- /.row -->
   
    
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    // Function to validate the form on submit
    $("form").on("submit", function(e) {
      e.preventDefault(); // Prevent form submission

      // Clear previous error messages
      $("span.text-danger").empty();

      // Get form input values

      var employeeid = $("#employeeid").val();
      var name = $("#name").val();
      var phone = $("#phone").val();
      var designation = $("#designation").val();
    var department = $("#department").val();
      var email = $("#email").val();

      // Check if any input field is empty
      var hasError = false;


      if (employeeid.trim() === "") {
        $("#employeeid-error").text("Please enter employee ID");
        hasError = true;
      }

      if (name.trim() === "") {
        $("#name-error").text("Please enter Name");
        hasError = true;
      } else if (name.trim().length < 2) {
        $("#name-error").text("Name must be at least 2 characters");
        hasError = true;
      }
      // if (designation.trim() === "") {
        if (designation.trim()=== "Select Designation") {
        $("#designation-error").text("Please enter designation");
        hasError = true;
      }

      if (department.trim()=== "Select Department") {
        $("#department-error").text("Please enter department");
        hasError = true;
      }
      if (phone.trim() === "") {
        $("#phone-error").text("Please enter phone number");
        hasError = true;
      } else if (phone.trim().length < 2) {
        $("#phone-error").text("phone number must be at least 2 characters");
        hasError = true;
      }

    
      if (email.trim() === "") {
        $("#email-error").text("Please enter email address");
        hasError = true;
      }

      // If any error is found, prevent form submission
      if (hasError) {
        return false;
      }

      // If no error, submit the form
      this.submit();
    });

    // Function to clear error messages when the user interacts with input fields
    $("input").on("input", function() {
      var errorMessageId = $(this).attr("id") + "-error";
      $("#" + errorMessageId).empty();
    });
  });
</script>


<!-- <script>
  function validateForm() {
    var inputs = [
    { id: "name", name: "employee name" },
    { id: "description", name: "employee Description" },
    { id: "sname", name: "employee Short Name" },
    ];

    var firstInvalidInput = null; // Variable to store the first invalid input

inputs.forEach(function (input) {
  var value = document.getElementById(input.id).value.trim();
  var errorElement = document.getElementById(input.id + "Error");

  errorElement.innerText = "";

  if (value === "") {
    errorElement.innerText = "* Please enter the " + input.name;
    if (!firstInvalidInput) {
      firstInvalidInput = document.getElementById(input.id);
    }
    document.getElementById(input.id).classList.add("is-invalid");
  } else {
    document.getElementById(input.id).classList.remove("is-invalid");
  }
});

// Set focus to the first invalid input, if any
if (firstInvalidInput) {
  firstInvalidInput.focus();
  return false; // Prevent form submission
}

return true; // Proceed with form submission
}
</script> -->


@endsection   