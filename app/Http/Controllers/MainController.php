<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
use App\Models\quizze;

class MainController extends Controller
{
    public function home()
    {

        $quizList = quizze::all();


        return view('Accueil', compact('quizList'));
    }

    public function Acceuil()
    {


        // return view('layout/header');
        return view('layout/navbar');
    }

    public function connexion()
    {


        return view('connexion');
    }
    public function newhomepage()
    {

        return view('homepage');
    }
}
