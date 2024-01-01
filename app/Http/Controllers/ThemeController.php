<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\quizze;
use Illuminate\Support\Facades\DB;

class ThemeController extends Controller
{

    public function Themes()
    {
        $themes = DB::table('quizzes')
            // ici on selectionne tous ce qu'on veut voir paraitre sur notre page
            ->select('theme.name as themeName', 'theme.picture as themePicture', 'quizzes.theme_id as idTheme')
            ->distinct()
            //ici a quel niveau se trouve la jointure
            ->join('theme', 'quizzes.theme_id', '=', 'theme.id')
            // ici on met le distinct 
            ->distinct('themeName', 'themePicture', 'idTheme')
            ->get();
        // ici on recupere la premiere variable a la base de cette requette et on l'envoie vers la view qu'on veut
        return view('thematique.app_theme', compact('themes'));
    }
}
