{{view('layout.header')}}

{{view('layout.navbar')}}


            <div>
                <h2> Le chocolat - I 
                    <span>xx questions</span>
                </h2>
            </div>

            <div>
                <h4> 
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                </h4>
            </div>

            <div>
                <p>by author name</p>
            </div>

            <div class="row">


                <div class="col question">
                    <span class="level level--medium">Confirmé</span>
                    <div class="question__question"> 
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr. ?
                    </div>
                    <div>
                        <ul>
                            @foreach ($quizList as $quiz)

                            <li>{{$quiz->title}}</li>
                            <li>{{$quiz->description}}</li>
                            <li>{{$quiz->status}}</li>
                            <li>{{$quiz->created_at}}</li>
                            <li>{{$quiz->updated_at}}</li>
                            <li>{{$quiz->app_users_id}}</li>
                            @endforeach
                        </ul> 
                    </div>
                </div>







    {{view('layout.footer')}}
