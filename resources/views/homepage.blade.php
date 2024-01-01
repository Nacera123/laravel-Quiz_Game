<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nes Quizz Game</title>

    <!-- Reset CSS -->
    <link href="{{ URL::asset('/') }}css/mystyle.css"  rel="stylesheet">
    <link href="{{ URL::asset('/') }}css/bootstrap.css"  rel="stylesheet">
    <link href="{{ URL::asset('/') }}css/font-awesome.min.css"  rel="stylesheet">
    <link href="{{ URL::asset('/') }}css/responsive.css"  rel="stylesheet">

</head>
<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="index.html">
                <span style="color: #a7a5a2;
                font: italic bold 15px monospace;
                        font-family: cursive;
                        ">Nes Game</span>
              </a>
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ml-auto">
                  
                  
                  <li class="nav-item active">
                    <a class="nav-link" href="{{route('homepage')}}">
                      Home <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('signup')}}"> Sign Up</a>
                  </li> --}}
                  <li class="nav-item">
                    <a class="nav-link" href="service.html">Games</a>
                  </li>

                  @guest
                  @if (Route::has('login'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @endif
                  
                  @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
                  @endif
                  @else
                  <li class="nav-item active">
                    

                    <form action="{{ route('logout') }}" method="POST">
                          @csrf                
                          <a type="submit" class="nav-link" href="{{ route('logout') }}"><button type="submit">Déconnexion</button></a>

                      {{-- <a type="submit">Déconnexion</a> --}}
                      {{-- <button type="submit">Déconnexion</button> --}}
                  
                    </form>

                  </li>
                  {{-- <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li> --}}
                  @endguest
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('signin')}}">Log In</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                  </li> --}}
                </ul>
                <div class="quote_btn-container">
                  <form class="form-inline">
                    <button class="btn   nav_search-btn" type="submit">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </form>
    
                </div>
              </div>
            </nav>
          </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
          <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="container ">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="detail-box">
                        <h1 style="font: italic bold 40px monospace;
                        font-family: cursive; font-size: 350%;
                        color: #d18f0a;">
                          NES QUIZZ GAME
                        </h1> <br><br>
                        <p>
                          Tu aimes les défis .... Alors viens découvrir notre quizz
                        </p> <br><br>
                        <div class="btn-box">
                          <a href="{{ route('register') }}" class="btn-1">
                            Register
                          </a>
                          <a href="{{ route('login') }}" class="btn-2">
                            Let play
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class=" col-lg-10 mx-auto">
                          <div class="img-box">
                            <!-- <img src="images/slider-img.png" alt=""> -->
                            <img
                              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQPnHkj5bx4jxP5p64Bm1PY_MewjaZzJeMcA&usqp=CAU"
                              alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end slider section -->
      </div>
    
      <!-- service section -->
    
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
            <div class="col-md-6 col-lg-4">
              <div class="box ">
                <div class="img-box">
                  <img style="width: 200px; height: 50px;"
                    src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBQSFBcUFRQYFxcaGxcbFxoYFxoaGxwbGBgbGhoYHRsbHywmGx0qHhcXJTYlKS4yMzMzGiI5PjkyPS8yMzABCwsLEA4QHhISHjApIik7ODMyMjwyMjswOTgyMjQwMj07NTIyMj01NDU0MjIyMjI1MjQyNDIyNDI0OzIyMjI0Mv/AABEIAPQAzgMBIgACEQEDEQH/xAAcAAEAAgIDAQAAAAAAAAAAAAAABgcFCAEDBAL/xABFEAACAQIDBQQGBwUHAwUAAAABAgADEQQFIQYSMUFRByJhcRMyQoGRoRQjYnKCscEzUpKiwiRDY7LR4fAVk7M0VGRzdP/EABoBAQADAQEBAAAAAAAAAAAAAAABBAUCAwb/xAAuEQEAAgIBAwICCgMBAAAAAAAAAQIDBBEFEjEhQSIyEyNRUmGBkaGx0XHB4UL/2gAMAwEAAhEDEQA/ALmiIgIiICIiAiIgIiU52wbcFCcvwzEG39odTrYi4pA+IN28wP3hAyu2XavRwjNRwqrXqjRnJ+qQ9LjVyOgsNePKVRmu3WZYkkvi6ij92k3o1t0slrjzvIzEkd1bEvUO87sx6sxJ+JM9eEzzFUbGniayW4blV1+QMx0QLDyLtbx+HIFbdxKcw4CPboHUfNg0uLZXbPCZkPqX3agF2pPYVAOZAv3l8RfiL24TX3J8mWtTJ5zH1adXB1VemzI6m6OpsQRzBkDbiJBezbblczpmnUsuJpi7gaB14ekUctSARyJHIiTqAiIgIiICIiAiIgIiICIiAiIgIiIGL2izRcHha2JbX0aMwB5tayr72IHvmp2JxD1Xeo5LO7MzseJZiSxPmSZf/bhjDTy0IP72tTRvuqGqf5qazXqAiCIkhERAkuUZktCmddTMfjs09LfeExoRiL2JE+IGRyTNauDxFPEUjZ0beHQjgynwKkg+Bm1OSZmmLw9PEU/UqKGHC4vxU25qbqfEGaiy8uwfOC9CvhWP7NldL/u1LhgPAMt/xyBbMREBERAREQEREBERAREQEREBERAqjt8b+y4Yf4rH4Uz/AKyoMkyOri2IQAKLbzNew8BbifCW72+/+mw3/wBr/wCSefZGhh8tylcfiQXDaoi6FmZyAD1OnkAp4wK+zTZivg1LkLVp+2LEEDmbcrfvA6eUjLAX04cr9JsbsrtJhM0vSqYRaVQpvqjhHV04FkcAXIuLggEXHHW1I7d5GMDj62HUHcDBqf3HAZQOtrlfwwMBTQsQACSSAAOJJ4AScZFsSrgGuzbx9hCAB4E21Pl853dj+R08TjXNVN5aVMsFNx32ZVBI6WLfKWTt1trh8o3KNKgj1XXe3BZFRL2DMQLkkg2A6EkjS4QrHdm5VDVwdRg66+jqEFXt7IawsfvXHiJWuPILk7no2uQyWtZhx0PDXlymwGym2KY9xQr0BQqupakyNvJUAF23WsLMBc7pvoCb8pWHa5kZwuND6btZd+45sp3W05G26fMmBA5ZHYZW3cxdb6PQcW8Q6MPyPxlbyfdizWzRPGnVH8t/0kjY2IiQEREBERAREQEREBERAREQERECqu3tf7Jhz0rEfGm3+kjWdB62zOEZRcUq31ngoasik+90H4pK+3hf7BRPTEoPjSq/6SL9k+0NJadbAYhS9JwzqCpZSGAV6bDlfQjlcnW9rxa0VjmfCYiZniEa7O8fUXH4NV5Vr6ngroy1PIbpYyWbb5Bi8zxz16SLSpqopozvYuEJu9lBKgljYGxsBM3lOz+Ew5f0NMqG3tWYswU+wG4geXxPGSCiLWAnzu11uYt24Yjj7ZXK6nEc2RHYfJsdluKV6qpVpOPR1HpvcorEEMQwBIDAcAdCZEe2Kky5rVLeqyUWT7vo1XT8avLgGBQuKu4A9rbwuCRa1jb1vfPBtDs7h8egWspJW+46mzpfjY8CPAgidYut9sx9LHp9sf05trfdU9sNi6743BUUJYLiKTAcwoa9Sx/d3N+46Xkw7fK6mvhUB7ypUJHgzKB80b4SYbJbL4LLWapTR3qkEekqMGKg8QoAULe3G1/G0qDtFxmIr4+o9em1I2ApoxBtTF92zLcG53ibE6kjlNnBtYs/yTE/z+ivalq+YRSTrsbNs1peKVv/ABk/pILJj2T1N3NsL4mqPjRcD52llw2aiIkBERAREQEREBERAREQEREBERAr3tqob2WE29SrSbyuSn9cguw2CWnQV7d5+8x5kXO6PID8zLI7WqW9lOJ6j0R+Fanf5XlNdn7VqlV6SOQFps4U6i4dBbyO+ZT3sN82HtrP/XtgvWtuZWthp7qAuZHsDnC+rURlYaGwLC/u1Hw98ylLNaY4Fz5U3/VRPjMmC9bcTEtO1omPRnOE6a1RUBZiABxJ4TFVM6Y+pSN+rkKPgtyflMfVLuQ1Rt4jgOCr5L+puZ1fH3efSHFay9OIzCo7godymORA3n87+qPDj+UrbtQxQetSHtKhufsljui/mG+MsJEZvVF/HlK57ScpejWp1SxZaiWH2WQ6rw4WYH3npNzpWpeuSMkxxER6fi8NnJTt7YnmUJmV2ZzD6NjMPXJsEq02b7oYb38t5ktkadGrv0aqgltVPP3To2k2f+i2ZWuhNteIn0Sg2qBnMh3ZjnoxuX0iTepSApVOt6YAVjfjvJuG/UnpJjICIiAiIgIiICIiAiIgIiICImPznNaWDovXrPuIguTzJ5Ko5sToBAhnbRmq0ctajfv13VFHPdRhUZvLuhfxiV92N4MvWxNUDRKSofOpUDD5Umkc2s2ir5ti98qbEhKFJdd1SbKoA9ZmNrnmT0AAvnYPZQZdg1pNY1XO/WI4b5FgoPRRYeJuecCPZvlTMfSU9H5jr/vMWMdVTusrD3GTvH4MobgaTwlfCUNjQx5p7p9JWMexakceUboVqlT1aZ8yLD5zKYTLmOtQ3+yOEzOGwbPwEzWEy5U1PGMHTsOKe7jmfxL7Nrxx4h4cDlVxroJiNu9kfpeCqU0F6iDfpDq6X7o+8u8vmw6SagWnMvK7TzC4hqbq6GzA3EyudbQ1MUioVCgam3MyQdrWzv0PHNUQWpYi9ROge/1ifxHe6AOBykEnQnXZTtOMBjAjtajX3UqE8Fa59G58iSp5WYnlNkZppNhOybbMY2gMNVb+0UVABJ1qUxoH14sNA3uPM2gWPERAREQEREBERAREQEREDz4rEpSRqjsERAWZmNgABckzW7tD2zfM69lJXDUyfRJwueBqMObHkPZGnUnPdr22hxNU4Ki31NNvrSDpUqDl4op+LAnkplXgQLf7EtlQ7HMKq3Ckphwf3uD1Pd6o8S3QS6pi9msAmGwlGgnCnTVT4sB3m8y1z75lJA+KlMMLETyf9NS97T2k2nwKmsDmnTC8BPuJwWHWBzE+S46idb4lRzgQjthygYnLncC70GFVbWvu+q48t1t78Amuc21xNNcQtSk+qVEdGHg6lT8jNTq9JkZkYWZSVYeKmx+YkwOuezK8wqYWrTr0mK1KbBlI6jkeoIuCOYJE8cSRtLsTtZSzSh6RO7UWwq076qTzHVTY2PgRxBkmmpWzme1sBiExFFrMujLruup9amw5qfkQCNQJs9s5ndPH4ZMTSPdcag8VYaMjeINx46EaESBl4iICIiAiIgIiICRDtK2hOAwFR0Nqr2p0jzDODdh0KqGI8QJL5Rvbzme/iMPhgdKaNUbpvVG3QD4gU/5oFUU0LGwFzPdkmDeviaVKmN52dbDlobkk9AAST0E5xC+hQL7bC7eCngPf+XnLh7FtlRTonHVV79W60geVMHVrfaYfBQecCw8HRc6glR/zlMkq25kz6iQOCLzqoJzM7ogJ8NTB5T7iB5amBVuonhrZc41U3mYiBgEdkOotKy7WtjV3TmOGS1z/AGlFGgJ/vgPE6NbmQ37xlz1qCuLETwnCjvU3UNTcFWUi4ZWFiCOhBMDVGiqNox3TyPI+fTznziMO1M2YeR5HxBmY2xyBsBjKuG1Kht6mT7VN9UPibaHxUzy0e4u5UF6Z+KE+0P1E6GLlkdje05w2K+iO31WIIC34LW4Ifxeqep3ekgGNwxpOVPuPIjkROlHKkEEggggg2II4EHkYG5ETAbF559PwVHEG28y2qW0tUXuvpyBIJHgRM/ICIiAiIgIiIHwzAC50Amr+fZoMwzGviifq94sOP7OmN1NDwJVRp1Mujtb2h+h4FkVrVcRemnULb6xvcp3b8i6zX1huUR1qHX7qW/Uj4QPdkOXPmWOpUeBqv3iPZQd5iPuopt5CbT4aglNFpooVEVVRRwVVFlA8AAJTvYNlF3xGMYeqBRpnxNnqe+3o/wCIy6IkIiJA4LTmdLnvCd0BERAREQE4IvOYgVF26ZWtsLi7DRmoueZBBen8CtT+KVfi8cjJuy+u1nCelyrEaap6Nx4btRd4/wAJaa0yYGXf63DBvapNu/hOq/qPdMRMtk2tOuv2Afgf95iZIuPsFzfXEYNjxArUx5WSpr/2tPAy6Jq92bZl9GzPDNeys/o28RVG4L+AZlPum0MgIiICIiAnBM5kF7W88OEy9whs9dhSUjiFYEu38KlfNhAprtI2j/6jjXdWvSp/V0ehVSbv+Jrm/TdHKYDMj+zHIU1+ZYzy0qRdgo4mZPP8GaTUgedNdfEFgf0kjYPsry/6PleHFu9UDVW8fSMSp/g3B7pMJ4snwwpYejSGgSnTQfhQL+k9s5CIiB0v64ndOn253QEREBERAREQMDtyt8txg/8Aj1j8EJ/SaqTazbY2y7G//nr/ADpsJqnJgZfJ+7Srv9lVHvJP6TETK1DuYVV5uxc+Q7o/K/vmKkjso1GRldTYqQynoQbg/ETcDCVxURKg4OqsPJgCPzmnc2v2La+XYIn/ANtQ/wDEokDOREQEREDiVT2+UScLhn9kVWU+boSPkjS1pFtrq6VAuHKqx3lc3F93dN1I6NfX3eM8djPXDSb29ndKTe3ENdEyDF7npFw9Xd4ghGv52428bTsqu2Io2OtSlfTmUPrDzFgfjL3RBaQ3bbZr0gOJw43ayC7BR+0UciBxYcjz4dLZOr1qMmTsyV4ifE/2tZNTtrzE8rpUaTmU72ddp9yuFxzgcBSrE6eCVCeHg3x6y4ptqRERA6Qe/O6dNu/O6AiIgIiICImDznOvQVFpqLsRvEnUAEkDS/E2Pw8Z5ZstcVJtbxDqtZtPEPF2lYj0eV4tjzp7v/cdU/qmtFDDhhdnCL1OpPkBxmw+1A+nYSph6j7iNuszKuoCMG4E24qJrk5/28pxq7mPZiez28/m6vjtTyymMNOqRapuhQFUFdAALDnPhclqOLoVceDa/OYuZDJq7pUBVrD2ulpaebyVqLISrKVI4gi021yHBnD4WhRPGnSpIfNECn8pQOR4P/qOOoju+jpMj1mPDdDglfEm1vieU2LRgRcG4PScd9Zt2xPrHmE8Txy7IiJ0h5sZikpKXdrAc/0HUzCHaunfu06hHWwH6zz7YsS1FPZ77EeI3QPgCfjMdTpADhMDqPU8mHJNKey9g1q3r3WZHE7Vadyk291Yiw8bDj5aTCUAzszubsxuSf8AnCez0Y6T6C2mNs7+XPHFpW8eGmP5Ycz5dbifcSi9lPdoGQegqenQfVue8ANFb/Q8fO/UTM9nnaW2D3cPiiz4fQI+rPSHLxZB04gcL8JOM4y5MRSem4uGH/LeP6gSiM1wD4aq9J+KnQ9RyI8xPsOk7v0+Pst80fvDK2sXZbmPEttsLiUqotSm6ujC6spBUg8wRxndNYtituMRlj90mpQY9+ix7p6sh9lvEaHmDpbYjZ/PKGPoLiKDbyNoQdGRhxRxyYXHncEXBBmsqsmV1vPqIkBERAREQPipUC8ZB9pXDYtSOdNPk7/7SS5oxvIjmv7dPuD/ADNKHU4+on8ljV+d948Xpsv7ykfEWmvdVCpKkWIJBHQjQibE1kusg+fbI0sQ5cXRjxZbEHxKnifK0yelbdMM2i/iVzZxTkiJr5hVc9GDwtSq4SmpZmNgF4n/AJ1kzw+wGvfrEjoqhT8Sx/KTjZ7IaOFFqaWJ9Zjqx8yeXgNJqZ+qYsdfg9Z/ZVpq2mfi9INkdnlwNDdNjUazVGHUcFH2VufeSecm+zGJLK6E+qwI8mvp8VY++YkDSe3Z+qEqsp03wLea3sPgT8JjaOzadqL3n1nmJ/0tZ8cfRTER4SmJxOZ9Wy0V2xFjRbxYfHdP9JmPQ3EyW2x+rp9d/wDob/aYrD+qJ8h1mvGeZ+3j+GrqT9XDuiImOtEREDgiQPtIyD0lP6Qi95PWtxK8T8OPxk9nXVQMCDqDoZZ1di2vli8ezzy44vWYlrfLF7Fs4ejjxhwSUrq4Ycg1NGdW87Ky/ijFdmlevWqDDPS3QbhHYqwU8x3SCt9ONxpccCZv2d9mzZfV+k4l0eqAwppTuVTeFmYsQCzWJFgLC5430+7xZa5KRaviWNes1niVmxETpyREQEREDF5qsgVbMqdfEH0bbwTuMRw3wbsAeYG8BfqDMJ2m9owqb2EwTXXVatZToeqUyOXVufLTU47s/W1FfEsf5iP0lDqc8YJ/ysasfGsYLcTy1MPPXS4T7tPkYniWqx6YWeynTtOy05ibTKCdbpf9J2RIieBlsqze9kqmzcFbgG8D0b85nRINWAtrPrLtpvQErVN0t3SdSDfhfmLX8rT6DR6pPEUy/qo5tb3r+js2txAqVkpA+oCzebWsPMAX/FOlFsJgaWNL1XdvWZmJ8Lnh7uHumZTEgzH6hktkzTZbwU7KRD0RPhXBn1eUHs5iIkBOJzEDGZhUeky1qZs6HToRzUjmDw98meR51SxaBkYbwA303gWQnkRxtcGx5yI5iLqZWm1PpKRFak7pUQ6MjFWAbQ2Km/G0+h6NszE9k+JUtvFEx3NjomvGUdreY0AFqGniF/xFs1ugZCPiQZJcN23r/eYEjxSsD8igt8Z9NwzVxRKgr9t9MDuYFyftVgo+SGR/Nu2LH1QRRSlQB4EKXce9+7/LAu/N83w+DpmriKq00HNjqTxsqjVm8ACZRm3vaZUxwbD4YNSw50YnSpVHMNb1UP7o48zraQXMcxrYlzUrVHqufadiTa97C/Aa8BoJ44AS2tj6O7TQdFW/na5+cqiil2A6kD4m0uHZ0gWmV1a31cQuakfFMphT4T7nXTOk+7z5WWi5nBM+HcCeHE4wDnEVmR7XqgToqYsDnI/i81tzntyvIsXi7Nb0aH2nBFx9lOJ+Q8Zcw6d8k8Vh53yVpHq5xmZjrM7svs+TetXW28LIjDUAkElhyOgsPOZbKNmKGHs1jUce2+pB+yOC/n4zO2m7qdNjF8V/WVHNs93pVFc12QWozVKT+jZiSwI3lJPEjW63Pn5TAYvIsXR19HvqOdM738ujfKWSJzLGbp+HL6zHE/g86bF6+ipVzAqd1rqRxBFiPcZ6aeZeMsnE4KnVFqlNHHRlDfmJhMVsbhH9VGpnrTYj5G4Hwmbl6L92Vmu7HvCNJmIM9VPFKec5xmwlUa0cQD0WopH863/yzA43LsZhbmpSYqPbTvrbqSuqjzAmfl6Vlp68PeuzS3ukYcGGcCRbDZyDzne+agjjKM614njh7RaHuzDEC0gO0avVDJTRndtAqKWY6jgBqZmMyzUWOsmXZrkToGxdVSrVF3aSniKZIJYjlvELbwHjNnpmraLRaVXZyx28KbwmwWZ1RdcFVH3wKfyqETI0uyvNm44ZV861L+lzNlIn0rMa2VeyrNl4YdW+7Wpf1MJ463ZvmqccG/4Xpv8A5XM2fiBqXitmsbSv6TB10A4k0nt8bWmKItoeM3Jnhx+VYfEC1ahSqj/Epq3w3hpA1Jwn7RPvL+Ylm5JirWk7zPsqyyqd5Kb0Gve9Jza/3X3lA8ABK0zPA1cBXajUBBBO41tHS/ddeoPyNxylDfxTkrCzrX7ZTuhjRbjO1sZIThs18Z6GzTxnz1tSeWjGSqQ4nMLc5iQ9TE1BSpKXduAHTmSeQHUzyYClWxlQUqK7zHieCqP3nPIfnyuZbWzmQ08FT3V71Q29JUI1Y/oo5D8zczQ1NDunm3hXzbEVjiPLH7O7H08PapVtVq8bkdxT9lTz+0delpKoiblMdaRxWGfa02nmXMRE9HJERAREQE4nMQI/nGyeExN2anuufbpnca/U20Y/eBlR7RYIYat6FHcr1Ygnj4AD5REzs9Y5WMUyn+ymx2EVUrurVXO6QKhDKpPMKAAffeTwTmJcw/K8snkiInq4IiICIiAmPzXKKGLQpXpLUXlcag24qw1U+IMRAqfbPZKhgrNSar3jwZlYDwHdvbzJnzsLsvRx1zVeoN3kjKAfA3Um3kROYlCYjuWP/K2styujhU3KNNUXnbiT1YnVj4kz3TmJdqrkRE6CIiB//9k="
                    alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    Quizz Linux
                  </h4>
                  <!-- <p>
                    Generators on the Internet tend to repeat predefined chunks as necessary
                  </p> -->
                  <a href="">
                    Read More
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box ">
                <div class="img-box">
                  <img style="width: 200px; height: 50px;"
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4KEITcCXpV9-c3saf0FvSofrpL8tk3j9bFw&usqp=CAU"
                    alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    Le Chocolat
                  </h4>

                  <a href="">
                    Read More
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box ">
                <div class="img-box" >
                    <img style="width: 200px; height: 50px;"
                    src="data:image/jpeg;base64,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" alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    Animaux celebres
                  </h4>
                  <a href="">
                    Read More
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ">
              <div class="box ">
                <div class="img-box">
                  <img style="width: 200px; height: 50px;"
                  
                  src="https://musicart.xboxlive.com/7/67325100-0000-0000-0000-000000000002/504/image.jpg?w=1920&h=1080" 
                  
                  alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    star Wars
                  </h4>
                  <a href="">
                    Read More
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box ">
                <div class="img-box">
                  <img style="width: 200px; height: 50px;"
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcvQwZk-ykyjXkEKTIL6Zy7hLTX95oeLPKunfjP1GZH63bAjJ7bo0qIn4xlIDxsoYyppA&usqp=CAU" alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    Les Bières Belges
                  </h4>
                  <a href="">
                    Read More
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    
                  </a>
                </div>
              </div>
            </div>

        </div>
        </div>
      </section>
    
    
      <!-- info section -->
    
      <section class="info_section layout_padding2">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="info_contact">
                <h4>
                  Address
                </h4>
                <div class="contact_link_box">
                  <a href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                      Location
                    </span>
                  </a>
                  <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                      Call +01 1234567890
                    </span>
                  </a>
                  <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                      demo@gmail.com
                    </span>
                  </a>
                </div>
              </div>
              <div class="info_social">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info_link_box">
                <h4>
                  Links
                </h4>
                <div class="info_links">
                  <a class="active" href="index.html">
                    <img src="images/nav-bullet.png" alt="">
                    Home
                  </a>
                  <a class="" href="about.html">
                    <img src="images/nav-bullet.png" alt="">
                    Register
                  </a>
                  <a class="" href="service.html">
                    <img src="images/nav-bullet.png" alt="">
                    Games
                  </a>
                  <a class="" href="price.html">
                    <img src="images/nav-bullet.png" alt="">
                    Log In
                  </a>
                  <a class="" href="contact.html">
                    <img src="images/nav-bullet.png" alt="">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info_detail">
                <h4>
                  Info
                </h4>
                <p>
                  necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                  words, combined with a handful
                </p>
              </div>
            </div>
            <div class="col-md-3 mb-0">
              <h4>
                Subscribe
              </h4>
              <form action="#">
                <input type="text" placeholder="Enter email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
    
      <!-- end info section -->
    
    
      <!-- footer section -->
      <footer class="footer_section">
        <div class="container">
          <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
          </p>
        </div>
      </footer>
      <!-- footer section -->
    
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
    
    
</body>
</html>