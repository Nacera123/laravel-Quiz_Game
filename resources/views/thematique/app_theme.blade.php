{{ View('layout.navbar') }}



{{-- @php
    $themeName = $themes->pluck('themeName');
    $themePicture = $themes->pluck('themePicture');
    $idTheme = $themes->pluck('idTheme');
    dd($themeName, $themePicture, $idTheme)
@endphp --}}




<section class="service_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
          <h2>
            CHOOSE YOUR QUIZZ GAME
          </h2>
        </div>
    </div>

    <div class="container ">
        <div class="row">
            @foreach ($themes as $theme)
                <div class="col-md-6 col-lg-4">
                    <div class="box ">
                        <div class="img-box">
                            <img style="width: 200px; height: 50px;" src="{{ $theme->themePicture }}" alt="" >
                        </div>
                        <div class="detail-box">
                            <h4>
                              {{ $theme->themeName }}
                              
                            </h4>
                            <a href="{{ route('level', ['id' => $theme->idTheme]) }}">
                                Start
                            </a>                           
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
