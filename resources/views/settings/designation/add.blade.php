
@extends('layouts.app')  

@section('content_header')
   <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Designation</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Designation</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection  
  
@section('main_content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
   <div class="container-fluid">
   
        <div class="row">
            <!-- left column -->
      <div class="col-md-8 m-auto">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add Designation</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="{{ route('designation_add_action') }}" onsubmit="return validateForm()" >
            @csrf
            <div class="card-body">

            <div class="form-group">
                <label for="name">Designation Name</label>
                <input type="text" autocomplete="off" class="form-control" id="name" name="name" placeholder="Designation Name">
                <span id="nameError" class="text-danger"></span>
              </div>  

              <div class="form-group">
                <label for="description">Designation Description</label>
                <input type="text" autocomplete="off" class="form-control" id="description" name="description" placeholder="Enter Designation Description">
                <span id="descriptionError" class="text-danger"></span>
              </div>  

            <div class="form-group">
                <label for="rank">Designation Rank</label>
                <input type="number" autocomplete="off" class="form-control" id="rank" name="rank" placeholder="Enter Designation Rank">
                <span id="rankError" class="text-danger"></span>
              </div>  

              <div class="form-group">
                <label for="cid">Designation Short Name</label>
                <input type="text" autocomplete="off" class="form-control" id="sname" name="sname" placeholder="Enter Designation Short Name">
                <span id="snameError" class="text-danger"></span>
              </div>   

     
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
               <a href="{{ route('designation_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
              
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
    { id: "name", name: "Designation Name" },
    { id: "description", name: "Designation Description" },
    { id: "rank", name: "Designation Rank" },
    { id: "sname", name: "Designation Short Name" },
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


<script>
$(document).ready(function()){

$()

}

</script>




<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script>
$(document).ready(function() {
  // Counter to keep track of the number of dynamic input fields
  var inputCounter = 1;

  // Event listener for the "Add Input Field" button
  $("#add-input-btn").on("click", function() {
    // Create a new input element with a unique name and ID
    var newInput = $("<input>").attr({
      type: "text",
      name: "dynamic_input_" + inputCounter,
      id: "dynamic_input_" + inputCounter,
      placeholder: "Dynamic Input " + inputCounter
    });

    // Append the new input element to the input container
    $("#input-container").append(newInput);

    // Increment the inputCounter for the next dynamic input field
    inputCounter++;
  });
});
</script> -->

@endsection   