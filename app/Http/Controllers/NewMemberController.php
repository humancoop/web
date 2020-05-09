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
            'birthdate' => 'required|date',
            'province' => 'required',
            'postal_code' => [
                'required',
                'regex:/^0[1-9][0-9]{3}|[1-4][0-9]{4}|5[0-2][0-9]{3}$/i',
            ],
            'address' => 'required',
            'email' => 'required|email:rfc,dns',
            'city' => 'required',
            'phone_number' => [
                'required',
                'regex:/^[0-9]{2,3}-? ?[0-9]{6,7}$/i',
            ],
            'secondary_phone_number' => [
                'required',
                'regex:/^[0-9]{2,3}-? ?[0-9]{6,7}$/i',
            ],
            'nif' => [
                'required',
                'regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i',
            ],
            'passport_number' => [
                'required',
                'regex:/^[a-z]{3}[0-9]{6}[a-z]?$/i',
            ],
            'father_name' => 'required',
            'mother_name' => 'required',
            'issue_date' => 'required|date',
            'issue_location' => 'required',
            'validity_date' => 'required|date',
            'account_number' => [
				'required',
                'regex:/^ES\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|ES\d{22}$/i',
            ],
            'training' => 'required',
            'professional_experience' => 'required',
            'years_of_experience' => 'required|numeric|min:0',
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

        NewMemberInfo::create(array_merge(
            $request->input(),
            //TODO: This inputs still have to be designed
            [
                'is_sanitary' => True,
                'has_volunteering_experience' => True,
                'already_a_member' => True,
                'first_time_in_humancoop' => True,
            ]
        ));
        Excel::store(new NewMemberExport((object) $request->input()), "{$request->get('nif')}.xlsx");

        return view('socio-confirm');
    }

}
