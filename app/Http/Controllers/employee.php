<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;
use App\Models\tbl_designations;
// use App\Models\departments;
use Illuminate\Support\Facades\DB;

class employee extends Controller
{
    public function index()
    {    
        // $employees=employees::get();

        $employee =employees::join('tbl_designations', 'employees.designation', '=', 'tbl_designations.id')
        ->join('departments', 'departments.id', '=', 'employees.department')
        ->select('employees.*','tbl_designations.desig_name','departments.dept_name')
        ->get();
        return view('employees.employee_list',compact('employee'));
    }

    public function add_employee()

    {    
        $designation = DB::table('tbl_designations')->get();
        $department = DB::table('departments')->get();
        // $department = departments::get();

        return view('employees.add_employee',compact('designation', 'department'));
    }

    public function store(Request $request)
    {  
        $data=array();  
        $data['employeeID'] = $request['employeeid'];
        $data['name'] = $request['name'];
        $data['designation'] = $request['designation'];
        $data['department'] = $request['department'];
        $data['email'] = $request['email'];
        $data['phone'] = $request['phone'];

        employees::insert($data);
        return redirect()->route('employee_list');
        
    }

    public function edit_employee(Request $request, $id)
    {    
        $employee_info= employees::findOrFail($id);
        $designation = DB::table('tbl_designations')->get();
        $department = DB::table('departments')->get();
       
        return view('employees.edit_employee',compact('employee_info','designation','department'));
    }

    public function update(Request $request)
    {  
        $id=$request->id;
        $employee_info = employees::findOrFail($id); 
        $employee_info->employeeID = $request->employeeid;
        $employee_info->name = $request->name;
        $employee_info->designation = $request->designation;
        $employee_info->department = $request->department;
        $employee_info->email = $request->email;
        $employee_info->phone = $request->phone;
        

        $employee_info->save();   
        return redirect()->route('employee_list');
        
    }

        
    

    public function view_employee(Request $request, $id)
    {    
       
        
        $employee_info= employees::findOrFail($id);
        $designation = DB::table('tbl_designations')->get();
        $department = DB::table('departments')->get();
        return view('employees.view_employee',compact('employee_info', 'designation', 'department'));
    }


    public function destroy($id)
    {
        employees::destroy($id);
        return redirect()->route('employee_list');
    }

}
