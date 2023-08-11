
@extends('layouts.app')

@section('content_header')
   <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Shift</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Shift</li>
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
            <h3 class="card-title">Add Shift</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="{{ route('shift_add_section') }}" onsubmit="return validateForm()">
            @csrf
            <div class="card-body">
            <div class="form-group">
                <label for="shift">Shift</label>
                <input type="text" autocomplete="off" class="form-control" id="shift" name="shift" placeholder="Enter Shift">
                <span id="shiftError" class="text-danger"></span>
              </div>

              <div class="form-group">
                <label for="code">Shift Code</label>
                <input type="text" autocomplete="off" class="form-control" id="shiftCode" name="shiftCode" placeholder="Enter Shift Code">
                <span id="shiftCodeError" class="text-danger"></span>
              </div>


                <div class="form-group">
                    <label for="Stime">Start Time</label>
                    <input type="time" autocomplete="off" class="form-control" id="stime" name="stime" placeholder="Enter Start Time">
                    <span id="stimeError" class="text-danger"></span>
                </div>

                <div class="form-group">
                    <label for="Etime">End Time</label>
                    <input type="time" autocomplete="off" class="form-control" id="etime" name="etime" placeholder="Enter End Time">
                    <span id="etimeError" class="text-danger"></span>
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
               <a href="{{ route('shift_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>

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
    { id: "shift", name: "Shift" },
    { id: "shiftCode", name: "Shift Code" },
    { id: "stime", name: "Start Time" },
    { id: "etime", name: "End Time" },
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
