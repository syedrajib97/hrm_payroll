
@extends('layouts.app')  

@section('content_header')
   <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Subsection</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Subsection</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection  
  
@section('main_content')

  <div class="col-md-1">
      <a style="" href="{{ route('subsection_add') }}"><button type="button" class="btn btn-block btn-primary">Add</button></a>
  </div> 
  <br />
   <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Subsection List</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Sub Section</th>
                <th>Section Name</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                if(!empty($subsectioninfo)){
                foreach($subsectioninfo as $com){  ?>
                    <tr>
                
                      <td>{{ $com->section }}</td>
                      <td>{{ $com->name }}</td>
                      <td>{{ $com->description }}</td>

                      
                      <td>
                        <a href="{{route('view_subsection', $com->id)}}"><button type="button" class="btn  btn-sm btn-primary">View</button></a>
                        <a href="{{route('edit_subsection', $com->id)}}"><button type="button" class="btn  btn-sm btn-success">Edit</button></a>
                        <a href="{{route('subsection_delete', $com->id)}}"><button type="button" class="btn  btn-sm btn-danger">Delete</button></a>
                      </td>
                    </tr>
                <?php 
                  }
                } ?>    
              
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

       
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
@endsection   