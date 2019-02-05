<?php

namespace App\Http\Controllers;
use App\Person;
use App\Gender;
use Illuminate\Http\Request;
class PeopleController extends Controller
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

    public function insertPersona(Request $request)
    {
        
        /*$data = $request->json()->all();
        
        $gender = Gender::where('id',$data['gender_id'])->first();
        $response= $gender->people()->create([
            'nombre'=> $data['nombre'], 
            'estado'=> $data['estado'],
        ]);*/
        /*
        $person = Person::create([
            'nombre'=> $data['nombre'], 
            'estado'=> $data['estado'],
        ]);

        $person->gender()->create([
            'nombre'=> $data['nombre'], 
            'estado'=> $data['estado'],
        ]);*/
        //return response()->json($person,201);

        $gender = Gender::where('id','1')->first();
        $response = $gender -> people()->create([
            'nombre'=> 'fanny',
            'estado'=> 'inactivo'
        ]
        );
        return response()->json($response,200);
    }
}
