{{view('layout.header')}}

<br><br>

<div>
    <center><h2> {{$quiz->title}}
        <span>questions</span>
    </h2></center>
</div><br>
<div class = "jeux2">
        <table class="tablejeux2">

            <thead class="heaedrjeux">
                <tr>
                    <th class="jeuxentete"><h2>DESCRIPTION</h2></th>
                    <th class="jeuxentete"><h2>NOM PRENOM</h2></th>
                    <th class="jeuxentete"><h2>jouer</th>

                </tr>
            </thead>


            <tbody>

                <tr>
                    
                
                    <td>{{$quiz->description}}<hr></td>
                    <td>{{$quiz->user->firstname}}{{$quiz->user->lastname}}<hr></td>
                    <td><button>Commence</button><hr></td>

                </tr>

            </tbody>
        </table> 
</div> <br><br><br>

<div class="row">

    <div class="col question">
    

        @foreach ($quiz->question as $questions)
            <h1>question :</h1>
            <h3>{{$questions->level->name}}</h3>
            <ul>
                
                <!-- recuperer la fonction de la classe quizze.php -->
                <li>** {{$questions->question}} </li><br>
                
                <h1>Reponses</h1>
                @foreach ($questions->reponses as $reponse)
                    
                    <ul>
                        
                        <input type="checkbox" id="scales" name="scales">{{$reponse->description}} 
                    
                    </ul>
                @endforeach
            
            </ul>
        @endforeach
    </div>
</div><br><br><br>




