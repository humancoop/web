<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewMemberInfo;

class NewMemberController extends Controller
{
    public function newMemberFormPost(Request $request) {
        NewMemberInfo::create($request->input());
        return view('socio');
    }

}
