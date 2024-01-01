<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <!-- Reset CSS -->
        <link href="{{ URL::asset('/') }}css/reset.css"  rel="stylesheet">

        <!-- Really beautiful CSS -->
        <link href="{{ URL::asset('/') }}css/style.css"  rel="stylesheet">

        <title>Quiz</title>
    </head>
    <body>
        <main class="container">

            {{view('layout.navbar')}}

            <div>
                <h2> Bienvenue sur Quiz </h2>

            </div>


        
            <div class="row">


                <div class="col question">
                    <span class="level level--medium">Confirmé</span>
                    <div class="question__question"> 
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr. ?
                    </div>
                </div>
            </div>

        </main>
        