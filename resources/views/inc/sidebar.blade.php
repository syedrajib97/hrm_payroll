<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: radial-gradient(circle at 24.1% 68.8%, rgb(50, 50, 50) 0%, rgb(0, 0, 0) 99.4%);">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ static_asset('assets/dist/img/AdminLTELogo.png') }}"  alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text text-green" style="font-weight: bold">HRM PAYROLL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ static_asset('assets/dist/img/myimage.jpg') }}"  class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="font-weight: bold">Syed Rajib</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user text-info"></i>
              <p>
                Employee
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employee_list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Designation</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Department</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('employee_list')}}"  class="nav-link" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee</p>
                </a>
              </li>

              <li class="nav-item mx-3">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Employee's Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employeeReport_list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Employee Report</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('masterSalaryReport_list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Master salary Report</p>
                </a>
              </li>

              <!-- <li class="nav-item">
                <a href="{{route('employeeReport2_list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Employee's</p>
                </a>
              </li> -->

              <!-- <li class="nav-item">
                <a href="{{route('employeeReport3_list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Terminated Employee's</p>
                </a>
              </li> -->
            </ul>
          </li> 
              
            </ul>
          </li>


        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy text-red"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('company_list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company</p>
                </a>
              </li> 

               <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Holiday Calendar</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('designation_list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Designation</p>
                </a>
              </li>  

               <li class="nav-item">
                <a href="{{ route('bank_list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banks</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('shift_list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shifts</p>
                </a>
              </li>
              

               <li class="nav-item">
                <a href="{{ route('department_list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Department</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('leavetype_list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Leave Type</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('subsection_list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subsection</p>
                </a>
              </li>
              
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user text-white"></i>
              <p>
                Leave
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Full Leave</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="{{ route('halfLeave_list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Half Leave</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Short Leave</p>
                </a>
              </li>

          
        </ul>

        <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Payroll
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('increment_list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Increment</p>
                </a>
              </li>       
        </ul> -->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>