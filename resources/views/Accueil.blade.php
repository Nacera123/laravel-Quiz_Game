{{view('layout.header')}}




<div class = "jeux">
        <table class="tablejeux">

            <thead class="heaedrjeux">
                <tr>
                    <th class="jeuxentete"><a href=""><h2>TITRE</h2></a></th>
                    <th class="jeuxentete"><h2>DESCRIPTION</h2></th>
                    <th class="jeuxentete"><h2>STATUS</h2></th>
                    <th class="jeuxentete"><h2>DATE DE CREATION</h2></th>
                    <th class="jeuxentete"><h2>DATE DE MISE A JOUR</h2></th>
                    <th class="jeuxentete"><h2>ID UTILISATEUR</h2></th>
                    <th class="jeuxentete"><h2>NOM-PRENOM</h2></th>
                    <th class="jeuxentete"><h2></h2></th>

                </tr>
            </thead>


            <tbody>

                    @foreach ($quizList as $quiz)
                    <tr>
                    
                        <td style="color:rgb(86, 150, 224);text-transform:uppercase;"><a href="{{route('quiz_detail', ['id' => $quiz->id])}}">{{$quiz->title}}</a></td>
                    
                        <td>{{$quiz->description}}<hr></td>
                        <td>{{$quiz->status}}<hr></td>
                        <td>{{$quiz->created_at}}<hr></td>
                        <td>{{$quiz->updated_at}}</td>
                        <td>{{$quiz->app_users_id}}<hr></td>
                        <td>{{$quiz->user->firstname}}/{{$quiz->user->lastname}}<hr></td>

                    </tr>
                    @endforeach


            </tbody>
        </table> 
</div> 







{{view('layout.footer')}}
