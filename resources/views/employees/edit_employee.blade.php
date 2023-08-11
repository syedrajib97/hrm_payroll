
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
                <h3 class="card-title">Edit employee</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('update_employee') }}" >
                @csrf
                <div class="card-body">

                <div class="form-group">
                    <label for="name">Employee ID</label>
                    <input type="hidden"  class="form-control" id="id" name="id"  value="{{ $employee_info->id }}" >
                    <input type="number" autocomplete="off" class="form-control" id="employeeid" name="employeeid" placeholder="employee ID" value="{{ $employee_info->employeeId }}" >
                    <span id="nameError" class="text-danger"></span>

                </div>  

                <div class="form-group">
                    <label for="name">employee Name</label>
                    <!-- <input type="hidden"  class="form-control" id="name" name="name"  value="{{ $employee_info->id }}" > -->
                    <input type="text" autocomplete="off" class="form-control" id="name" name="name" placeholder="employee Name" value="{{ $employee_info->name }}" >
                    <span id="nameError" class="text-danger"></span>

                </div>  

                <div class="form-group col-4">
              <label for="employeeId" class="form-label">Designation</label>
             
              <select class="form-select form-control" id="designation" name="designation" required>
                @foreach ($designation as $desig)
                  <option value="{{ $desig->id }}" {{ $employee_info->employeeId == $desig->id ? 'selected' : '' }}>
                    {{ $desig->desig_name }}
                  </option>
                @endforeach
              </select>
              <p id="employeeIdError" class="text-danger"></p>
            </div>


<!--                 
                <div class="form-group">
                    <label for="name">Designation</label>
                    <input type="hidden"  class="form-control" id="designation" name="designation"  value="{{ $employee_info->id }}" >
                    <input type="text" autocomplete="off" class="form-control" id="designation" name="designation" placeholder="enter designation Name" value="{{ $employee_info->designation }}" >
                    <span id="nameError" class="text-danger"></span>

                    </div>   -->
<!-- 
                    <div class="form-group col-4">
              <label for="employeeId" class="form-label">Department</label>
             
              <select class="form-select form-control" id="department" name="department" required>
                @foreach ($department as $dept)
                  <option value="{{ $dept->id }}" {{ $employee_info->employeeId == $dept->id ? 'selected' : '' }}>
                    {{ $dept->dept_name }}
                  </option>
                @endforeach
              </select>
              <p id="employeeIdError" class="text-danger"></p>
            </div> -->



            <div class="form-group col-4">
  <label for="employeeId" class="form-label">Department</label>
 
  <select class="form-select form-control" id="department" name="department" required>
     @foreach ($department as $dept)
      <option value="<?php echo $dept->id; ?>" <?php echo $employee_info->department == $dept->id ? 'selected' : ''; ?>>
        <?php echo $dept->dept_name; ?>
      </option>
     @endforeach
  </select>
  <p id="employeeIdError" class="text-danger"></p>
</div>

            

                <div class="form-group">
                    <label for="employee short name">Email</label>
                    <input type="email" autocomplete="off" class="form-control" id="email" name="email" placeholder="Enter email address..." value="{{ $employee_info->email }}">
                    <span id="snameError" class="text-danger"></span>
                </div>  

                <div class="form-group">
                    <label for="employee description">Phone</label>
                    <input type="text" autocomplete="off" class="form-control" id="phone" name="phone" placeholder="Enter phone number" value="{{ $employee_info->phone }}">
                    <span id="descriptionError" class="text-danger"></span>
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
                  <button type="submit" class="btn btn-primary">Update</button>
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

<script>
  function validateForm() {
    var inputs = [
    { id: "name", name: "employee name" },
    { id: "sname", name: "employee Short Name" },
    { id: "description", name: "employee Description" },
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