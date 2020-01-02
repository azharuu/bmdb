@extends('layouts.master')
@section('content')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <h1>Home Page</h1>

    <div class="homeMovie">
        <div class="movieImg">
            <a target="_blank" href="#">
                <img class="img1" src="https://www.vintagemovieposters.co.uk/wp-content/uploads/2019/09/IMG_2862-482x363.jpeg" alt="" width="300" height="250">
            </a>
        </div>
        <div class="dec">

            {{--toggle--}}
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>

            <a target="_blank" href="#">
                <h3>Once Upon a Time in Hollywood</h3></a>
            <h5 style="color:#808080">Comedy</h5>
            <h5>A faded television actor and his stunt double strive to achieve fame and success in the film industry
                during the final years of Hollywood's Golden Age in 1969 Los Angeles.</h5>
            <div class="star">
               <p> <img class="img2" src="{{URL::asset('/img/star.png')}}" height="20" width="20" align="middle">
                <b>8.4 </b>
               </p>
            </div>
        </div>
    </div>

    <div class="homeMovie">
        <div class="movieImg">
            <a target="_blank" href="#">
                <img class="img1" src="http://www.impawards.com/tv/posters/boys.jpg" alt="" width="300" height="250">
            </a>

        </div>
        <div class="dec">

            {{--toggle--}}
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>

            <a target="_blank" href="#">
                <h3>The Boys</h3></a>
            <h5 style="color:#808080">Comedy</h5>
            <h5>A group of vigilantes set out to take down corrupt superheroes who abuse their superpowers.</h5>
            <div class="star">
                <p> <img class="img2" src="{{URL::asset('/img/star.png')}}" height="20" width="20" align="middle">
                    <b>9 </b>
                </p>
            </div>
        </div>
    </div>

    <div class="homeMovie">
        <div class="movieImg">
            <a target="_blank" href="#">
                <img class="img1" src="https://cdn.flickeringmyth.com/wp-content/uploads/2018/07/OITNB-s6-poster-600x889.jpg" alt="" width="300" height="250">
            </a>
        </div>
        <div class="dec">

            {{--toggle--}}
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>

            <a target="_blank" href="#">
                <h3>Orange is the new Black</h3></a>
            <h5 style="color:#808080">Comedy</h5>
            <h5>A group of vigilantes set out to take down corrupt superheroes who abuse their superpowers.</h5>
            <div class="star">
                <p> <img class="img2" src="{{URL::asset('/img/star.png')}}" height="20" width="20" align="middle">
                    <b>9.5 </b>
                </p>
            </div>
        </div>
    </div>

    <div class="homeMovie">
        <div class="movieImg">
            <a target="_blank" href="#">
                <img class="img1" src="https://www.vintagemovieposters.co.uk/wp-content/uploads/2019/09/IMG_2862-482x363.jpeg" alt="" width="300" height="250">
            </a>
        </div>
        <div class="dec">

            {{--toggle--}}
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>

            <a target="_blank" href="#">
                <h3>Once Upon a Time in Hollywood</h3></a>
            <h5 style="color:#808080">Comedy</h5>
            <h5>A faded television actor and his stunt double strive to achieve fame and success in the film industry
                during the final years of Hollywood's Golden Age in 1969 Los Angeles.</h5>
            <div class="star">
                <p> <img class="img2" src="{{URL::asset('/img/star.png')}}" height="20" width="20" align="middle">
                    <b>8.4 </b>
                </p>
            </div>
        </div>
    </div>

    <div class="homeMovie">
        <div class="movieImg">
            <a target="_blank" href="#">
                <img class="img1" src="http://www.impawards.com/tv/posters/boys.jpg" alt="" width="300" height="250">
            </a>

        </div>
        <div class="dec">

            {{--toggle--}}
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>

            <a target="_blank" href="#">
                <h3>The Boys</h3></a>
            <h5 style="color:#808080">Comedy</h5>
            <h5>A group of vigilantes set out to take down corrupt superheroes who abuse their superpowers.</h5>
            <div class="star">
                <p> <img class="img2" src="{{URL::asset('/img/star.png')}}" height="20" width="20" align="middle">
                    <b>9 </b>
                </p>
            </div>
        </div>
    </div>

    <div class="homeMovie">
        <div class="movieImg">
            <a target="_blank" href="#">
                <img class="img1" src="https://cdn.flickeringmyth.com/wp-content/uploads/2018/07/OITNB-s6-poster-600x889.jpg" alt="" width="300" height="250">
            </a>
        </div>
        <div class="dec">

            {{--toggle--}}
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>

            <a target="_blank" href="#">
                <h3>Orange is the new Black</h3></a>
            <h5 style="color:#808080">Comedy</h5>
            <h5>A group of vigilantes set out to take down corrupt superheroes who abuse their superpowers.</h5>
            <div class="star">
                <p> <img class="img2" src="{{URL::asset('/img/star.png')}}" height="20" width="20" align="middle">
                    <b>9.5 </b>
                </p>
            </div>
        </div>
    </div>

@endsection
