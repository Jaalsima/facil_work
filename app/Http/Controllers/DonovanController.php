<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\User;

class DonovanController extends Controller
{
    public function home(){
        return view('donovan.home');
    }

    public function request() {
        // Obtén todas las categorías y habilidades relacionadas
        $categoriesWithSkills = Category::with('skills')->get();
    
        // Obtén la lista de usuarios (si es necesario)
        $users = User::all();
    
        // Crear un array de informe para almacenar la información
        $informe = [
            'categoriesWithSkills' => $categoriesWithSkills,
            'users' => $users, // Si es necesario, agrega la lista de usuarios
        ];
    
        // Devuelve la vista 'donovan.request' con los datos
        return view('donovan.request', $informe);
    }


    public function request2(){
        return view('donovan.request2');
    }

    public function request3(){
        return view('donovan.request3');
    }

    public function request4(){
        return view('donovan.request4');
    }

    public function request5(){
        return view('donovan.request5');
    }


}