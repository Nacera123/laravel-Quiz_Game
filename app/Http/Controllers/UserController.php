<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\support\Facades\Hash;

class UserController extends Controller {

    //retourne la view
    public function signupAction(){

        return view('user.signup');
    }

    //fonction pour valider l'inscription

    public function create_user(Request $request){

        $request->validate([

            'email'     =>['required', 'email', 'max:20', 'unique:app_users'],
            'password'  =>['required', 'string', 'max:10'],
            'firstname' =>['required', 'string', 'max:50'],
            'lastname'  =>['required', 'string', 'max:50']

        ]);


        // $user variable qui stocke l'instanciation du Model User
        $user = new User;

        // .....................On vient remplir cet objet ($user) avec les valeurs des inputs ............................................

        $user->email        = $request->input('email');
        $user->password     = Hash::make($request->input('password'));
        $user->firstname    = $request->input('firstname');
        $user->lastname     = $request->input('lastname');

        //on stoque dans $saved les valeurs de $user
        $saved = $user->save();

        //$saved retourne true or false:

        if($saved){//si true

            return redirect('/signup/')->with('success', "L'utilisateur a bien été ajouté");
        
        }else{//si false

            return redirect('/signup/')->with('failed', "erreur lors de l'inscription, veuillez reessayer");
        }

    }


    public function signinAction()
    {
        return view('user.signin');
    }
}