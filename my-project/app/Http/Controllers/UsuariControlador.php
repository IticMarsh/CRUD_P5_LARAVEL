<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;
use Illuminate\Support\Facades\Auth;
class UsuariControlador extends Controller
{

    function consultaUsuaris()
    {

        $usuaris = Usuari::all();
        return view('login')->with('usuaris', $usuaris);

    }
    function mostrarCrearUsuari()
    {
        return view('crearUsuari');
    }
    
    function crearUsuari()
    {

        $usuari = new Usuari();

        $usuari->name = request('name');
        $usuari->cognom = request('cognom');
        $usuari->email = request('email');
        $usuari->password = request('password');
        $usuari->rol = request('rol');
        $usuari->actiu = request('actiu');

        $usuari->save();

        return to_route('totBe.index');
    }

    function login()
    {
        $email = request('email');
        $password = request('password');

        $usuario = Usuari::where('email', $email)->first();

        if ($usuario && $usuario->password === $password) {
            switch ($usuario->rol) {
                case ('Alumne'):
                    return view('mostraralumne')->with('email', $email);
                    break;
                case ('Professor'):
                    $llistaAlumnes = Usuari::where('rol', 'Alumne')->get();
                    return view('mostrarprofessor')->with('email', $email)->with('llistaAlumnes', $llistaAlumnes);
                  
                    break;
                case ('Admin'):
                    $llistaProfessors = Usuari::where('rol', 'Professor')->get();
                    return view('mostraradmin')->with('email', $email)->with('llistaProfessors', $llistaProfessors);
                    break;
                default:
                    return view('errorAcces');
            }
        }
    }
}
