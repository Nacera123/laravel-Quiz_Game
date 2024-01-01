<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\quizze;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function testlevel()
    {
        $test = DB::table('levels');
        return view('games.app_game', compact('test'));
    }


    //

    // public function AllQuizz()
    // {
    // $detailquiz = quizze::find();
    //     return view('games.app_game');
    // }
    // public function getDistinctLevels()
    // {
    //     $distinctLevels = DB::table('quizzes')
    //         ->select('levels.name as level_name', 'theme.name as theme_name')
    //         ->distinct()
    //         ->join('levels', 'quizzes.level_id', '=', 'levels.id')
    //         ->join('theme', 'quizzes.theme_id', '=', 'idTheme')
    //         ->distinct('levels.name', 'theme.name', 'idTheme')
    //         ->get();
    //     return view('games.app_game')->with('distinctLevels', $distinctLevels);
    // }


    // public function getDistinctLevels()
    // {
    //     $distinctLevels = DB::table('quizzes')
    //         ->select('levels.name as level_name', 'theme.name as theme_name', 'quizzes.theme_id as theme_id')
    //         ->distinct()
    //         ->join('levels', 'quizzes.level_id', '=', 'levels.id')
    //         ->join('theme', 'quizzes.theme_id', '=', 'theme.id') // Utilisez 'theme' au lieu de 'idTheme'
    //         ->get();

    //     return view('games.app_game')->with('distinctLevels', $distinctLevels);
    // }


    /**
     * ici j'ai recupere l'id theme de ThemeController
     * de la requete sql :
     * 
     * SELECT name FROM levels  
     * WHERE id IN
     * (SELECT level_id FROM quizzes WHERE theme_id =3)
     */

    public function Levels($id)
    {
        $levelNames = DB::table('levels')
            ->select('name')
            ->distinct()
            ->whereIn('id', function ($query) use ($id) {
                $query->select('level_id')
                    ->distinct()
                    ->from('quizzes')
                    ->where('theme_id', $id);
            })
            ->get();

        return view('games.level_game', compact('id', 'levelNames'));
    }
}
