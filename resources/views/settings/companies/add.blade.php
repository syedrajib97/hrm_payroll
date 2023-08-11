
@extends('layouts.app')  

@section('content_header')
   <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Company</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Company</li>
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
            <h3 class="card-title">Add Company</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="{{ route('company_add_action') }}" onsubmit="return validateForm()" >
            @csrf
            <div class="card-body">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" autocomplete="off" class="form-control" id="name" name="name" placeholder="Company Name">
                <span id="nameError" class="text-danger"></span>
              </div>  

              <div class="form-group">
                <label for="code">Code</label>
                <input type="text" autocomplete="off" class="form-control" id="code" name="code" placeholder="Enter Code">
                <span id="codeError" class="text-danger"></span>
              </div>  

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" autocomplete="off" class="form-control" id="address" name="address" placeholder="Enter Address">
                <span id="addressError" class="text-danger"></span>
              </div>  

              <div class="form-group">
                <label for="Email1">Email address</label>
                <input type="email" autocomplete="off" class="form-control" id="email" name="email" placeholder="Enter Email">
                <span id="emailError" class="text-danger"></span>
              </div>

              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" autocomplete="off" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
                <span id="phoneError" class="text-danger"></span>
              </div>     

        <!--
              <div class="form-group">
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
               <a href="{{ route('company_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
              
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

<script>

function validateForm() {
var inputs = [
{ id: "name", name: "Company name" },
{ id: "code", name: "Company Code" },
{ id: "address", name: "Address" },
{ id: "email", name: "Email address" },
{ id: "phone", name: "Phone number" },
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
</script>
@endsection   