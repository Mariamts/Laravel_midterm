<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class EmployeeController extends Controller
{
   public function GetEmployees() {
    $employees = Employee::orderby('id', 'DESC')->get();
    return view('employees-page')->with('employees', $employees);
   }

   public function CreateEmployees(Request $request) {
    Employee::create([
        'name' => $request->name,
        'lastname' => $request->lastname,
        'birthdate' => $request->birthdate,
        'personal_id'=> $request->personal_id,
        'salary' => $request->salary,
      ]);
      return redirect()->back();
    }

    public function DeleteEmployee(Request $req){
        Employee::where('id', $req->id)->delete();
        return redirect()->back();
    }

    public function EditEmployee($id)
    {
      $employee = Employee::where('id', $id)->firstOrFail();

      return view('edit-employee')->with('employee', $employee);
    }

    public function UpdateEmployee(Request $request)
    {
      Employee::where('id', $request->id)->update([
        'name'=> $request->name,
        'lastname'=> $request->lastname,
        'birthdate'=> $request->birthdate,
        'personal_id'=> $request->personal_id,
        'salary'=> $request->salary,
      ]);
  
      return redirect()->back();
    }
}
