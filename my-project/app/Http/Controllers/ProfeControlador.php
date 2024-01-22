<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;
use Illuminate\Support\Facades\Auth;

class ProfeControlador extends Controller
{
    
  

    function index()
{
    $llistaProfessors = Usuari::where('rol', 'Professor')->get();
    return view('mostrarprofessor')->with('llistaProfessors', $llistaProfessors);    
}


    function crear()
    {
        return view('professor.add');
    }

    function edit($id)
    {
        $profe = Usuari::find($id);

        return view('editar')->with('prof', $profe);
    }

    function guardar(Request $request)
    {
        $usuari = new Usuari();

        $usuari->nom = $request->nom;

        $usuari->save();

       
        $llistaProfessors = Usuari::where('rol', 'Professor')->get();
        return view('mostrarprofessor')->with('llistaProfessors', $llistaProfessors);

        $llistaAlumnes = Usuari::where('rol', 'Alumne')->get();
        return view('mostraralumne')->with('llistaAlumnes', $llistaAlumnes);
    }

    function modificar($id)
    {
        $email = request('email');

        $usuari = Usuari::find($id);

        $usuari->name = request('name');
        $usuari->cognom = request('cognom');
        $usuari->password = request('password');
        $usuari->email = request('email');
        $usuari->rol = request('rol');
        $usuari->actiu = request('actiu');

        $usuari->save();

        if ($usuari->rol == "Alumne") {
            return view('mostraralumne')->with('email', $email);
        } elseif ($usuari->rol == "Professor") {
            $llistaAlumnes = Usuari::where('rol', 'Alumne')->get();
            $email = Usuari::where('email', $usuari->email)->get();

            
            return view('mostrarprofessor')->with('llistaAlumnes', $llistaAlumnes)->with('email', $email);      
        } 
            elseif ($usuari->rol == "Centre") {
            $llistaProfessors = Usuari::where('rol', 'Professor')->get();
            $email = Usuari::where('email', $usuari->email)->get();
            return view('mostraradmin')->with('llistaProfessors', $llistaProfessors)->with('email', $email);
        }
    }
}
