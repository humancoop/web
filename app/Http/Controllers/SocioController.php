<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocioController extends Controller
{
    public function alta(Request $request) {
        $name = $request->input('name');
        $dni = $request->input('dni');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $birthplace = $request->input('birthplace');
        $birthdate = $request->input('birthdate');
        $country = $request->input('country');
        $city = $request->input('city');
        $address = $request->input('address');
        $postcode = $request->input('postcode');
        return view('socio');
    }

}
