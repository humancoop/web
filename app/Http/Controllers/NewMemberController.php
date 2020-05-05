<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\NewMemberExport;
use App\NewMemberInfo;

class NewMemberController extends Controller
{
    public function newMemberFormPost(Request $request) {

         $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'birthplace' => 'required',
            'birthdate' => 'required',
            'province' => 'required',
            'postal_code' => 'required',
            'address' => 'required',
            'email' => 'required',
            'city' => 'required',
            'phone_number' => 'required',
            'secondary_phone_number' => 'required',
            'nif' => 'required',
            'passport_number' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'issue_date' => 'required',
            'issue_location' => 'required',
            'validity_date' => 'required',
            'account_number' => 'required',
            'training' => 'required',
            'professional_experience' => 'required',
            'years_of_experience' => 'required',
            'speciality' => 'required',
            'motivations' => 'required',
            'volunteering_experience_info' => 'required',
            'where_did_you_know' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('socio')
                        ->withErrors($validator)
                        ->withInput();
        }

        return Excel::download(new NewMemberExport((object) $request->input()), 'userd.xlsx');
        #NewMemberInfo::create($request->input());

        return view('socio');
    }

}
