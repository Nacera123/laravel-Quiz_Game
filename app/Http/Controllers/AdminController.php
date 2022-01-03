<?php

namespace App\Http\Controllers;



use App\Utils\UserSession;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\quizze;

class AdminController extends Controller{

    public function createQuizAction( Request $request){


        $title = $request->input('title'); 
        $description = $request->input('description'); 
        $status = $request->input('status'); 
        $created_at = $request->input('created_at');
        $updated_at = $request->input('updated_at');
        $app_users_id = $request->input('app_users_id');


        if(!empty($title) && !empty($description) && !empty($status) && !empty($created_at)
        && !empty($updated_at) && !empty($app_users_id)){

            $quiz = new quizze();

                $quiz->title = $title;
                $quiz->description = $description;
                $quiz->status = $status;
                $quiz->created_at = $created_at;
                $quiz->updated_at = $updated_at;
                $quiz->app_users_id = $app_users_id;

            $quiz->save();

            return redirect()->route('Acceuil');


        }else{
            dd('erreur');
        }

    }
    //recuperer id quiz 
    public function detailQuiz($id){
        //recuperer le nom de ma fonction dans le fichier quizze 
        $quiz = quizze::find($id);

        return view('detailquiz', compact('quiz'));

    }




}
