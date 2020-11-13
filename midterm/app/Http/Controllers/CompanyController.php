<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function GetCompanies(){
        $companies = Company::orderby('id', 'DESC')->get();
        return view('companies-page')->with('companies', $companies);
    }

    public function CreateCompanies(Request $request) {
        Company::create([
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address,
            'city'=> $request->city,
            'country' => $request->country,
          ]);
          return redirect()->back();
    }

    public function DeleteCompany(Request $req){
        Company::where('id', $req->id)->delete();
        return redirect()->back();
    }

    public function EditCompany($id)
    {
      $company = Company::where('id', $id)->firstOrFail();

      return view('edit-company')->with('company', $company);
    }

    public function UpdateCompany(Request $request)
    {
      Company::where('id', $request->id)->update([
        'name'=> $request->name,
        'code'=> $request->code,
        'address'=> $request->address,
        'city'=> $request->city,
        'country'=> $request->country,
      ]);
  
      return redirect()->back();
    }
}
