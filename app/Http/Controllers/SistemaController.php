<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class SistemaController extends Controller
{

    public function create(){

        return view('create', compact(''));
    }
    public function store(Request $request){

        
        $dataStudent = [
            'name'        => $request->name,
            'age'         => $request->age,
            'sexo'        => $request->sexo,
            'name_dad'    => $request->name_dad,
            'name_mom'    => $request->name_mom,
            'id_address'  => 1,
            'id_historic' => 1
        ];

        Students::create($dataStudent);

        redirect()->route('index');
    }
}
