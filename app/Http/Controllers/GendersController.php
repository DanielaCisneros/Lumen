<?php

namespace App\Http\Controllers;
use App\Gender;
use Illuminate\Http\Request;
class GendersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function insertGender(Request $request)
    {
        
        /*$data = $request->json()->all();

        $gender = Gender::create([
            'descripcion'=> $data['masculino'],
        ]);*/

        $gender = Gender::create([
            'descripcion'=> 'femenino',
            'descripcion'=> 'mayuslino',
        ]);

        return response()->json($gender,201);
    }
}