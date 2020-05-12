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
            'birthdate' => 'required|date',
            'nif' => [
                'required',
                'regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i',
            ],
            'address' => 'required',
            'postal_code' => [
                'required',
                'regex:/^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/i',
            ],
            'city' => 'required',
            'province' => 'required',
            'phone_number' => [
                'required',
                'regex:/^[0-9]{2,3}-? ?[0-9]{6,7}$/i',
            ],
            'secondary_phone_number' => [
                'required',
                'regex:/^[0-9]{2,3}-? ?[0-9]{6,7}$/i',
            ],
            'email' => 'required|email:rfc,dns',
            'account_number' => [
				'required',
                'regex:/^ES\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|ES\d{22}$/i',
            ],
            'account_owner_name' => 'required',
            'amount' => 'required|numeric|min:10',
            'period' => 'required|numeric',
            'where_did_you_know' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('socio')
                        ->withErrors($validator)
                        ->withInput();
        }

        $newMemberInfo = NewMemberInfo::create($request->input());
        Excel::store(new NewMemberExport($newMemberInfo), "socio_{$newMemberInfo->nif}.xlsx");

        return view('socio-confirm');
    }

}
