<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitutControlador extends Controller
{
     // Funció login que rep la petició del web.php
    //  function login()
    //  {
    //      // Demanem el correu i la contrasenya amb el mètode POST i el request
    //      $email = Request('email');
    //      $password = Request('password');
 
    //      $profes = ["Jpsep", "Jeremias", "Patrici", "Rigobefrta"];
    //      $correus = ["joseppapp@ola.cat", "yeremaya@a.com", "pipa@klk.co", "rigoberftra@ads.acs"];
 
    //      // Guardem en un array els diferents correus amb els que mostrarem les diferents vistes
    //      $array = ["@profe.cat", "@alumne.cat", "@admin.cat"];
 
    //      // Si el correu conté el primer element de l'array (@profe.cat) vol dir que l'usuari és 
    //      // professor per tant mostrarem la vista "professor". El mateix amb els altres ifs
    //      if (str_contains($email, $array[0])) {
    //          return view('Institut.professor')->with('email', $email);
    //      } else if (str_contains($email, $array[1])) {
    //          return view('Institut.alumne')->with('email', $email);
    //      } else if (str_contains($email, $array[2])) {
    //          return view('Institut.centre')->with('email', $email)->with('profes', $profes)->with('correus', $correus);
    //      }
    //  }
 
     function signin()
     {
         return view('login');
     }
}
