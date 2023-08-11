<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_designations;
use DB;

class Designation extends Controller
{
    public function index()
    {    
        $tbl_designations=tbl_designations::get();
        return view('settings.designation.designation_list',compact('tbl_designations'));
    }

    public function add_designation()
    {    
        return view('settings.designation.add');
    }

    public function store(Request $request)
    {  
        $data=array();  
        $data['desig_name'] = $request['name'];
        $data['desig_description'] = $request['description'];
        $data['desig_rank'] = $request['rank'];
        $data['desig_short_name'] = $request['sname'];
        tbl_designations::insert($data);
        return redirect()->route('designation_list');
       
    }

    public function edit_designation(Request $request, $id)
    {    
        $designation_info= tbl_designations::findOrFail($id);
        return view('settings.designation.edit',compact('designation_info'));
    }

    public function update(Request $request)
    {  
        $id=$request->id;
        $designation = tbl_designations::findOrFail($id);
        
        $designation->desig_name = $request->name;
        $designation->desig_description = $request->description;
        $designation->desig_rank = $request->rank;
        $designation->desig_short_name = $request->sname;
        

        $designation->save();   
        return redirect()->route('designation_list');
        
    }


    public function view_designation(Request $request, $id)
    {    
        $desination_info= tbl_designations::findOrFail($id);    
        return view('settings.designation.view',compact('desination_info'));
    }


    public function destroy($id)
    {
        tbl_designations::destroy($id);
        return redirect()->route('designation_list');
    }

}

