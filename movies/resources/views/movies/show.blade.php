@extends('app')
@section('content')
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-glow/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <div class="container">
        <div class="movie-container">
            <div class="movie-photo">
                <img src="{{ $movie['photo']}}">
            </div>
            <div class="movie-content">
                <div class="movie-title">
                    <h2 class="entry-title">{{$movie["name"]}}</h2>
                </div>
                <div class="movie-description">
                {{$movie["description"]}}
                </div>
                <div class="movie-tags col-sm-6">
                    Countries: {{$movie["country"]->name}} <br> 
                    Genres: {{$movie["genre"]}} <br> 
                    Ticket Price: {{$movie["ticket_price"]}} {{$movie["currency"]->currency}}<br>
                    Release Date: {{$movie["release_date"]}}
                </div>
                <div class="col-sm-6">
                    <div class="rating-block">
                        <h4>Average user rating</h4>
                        <h2 class="bold padding-bottom-7">{{$movie["rate"]}} <small>/ 5</small></h2>
                        <div class="rating" id="rate1"></div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <script>
        $("#rate1").shieldRating({
            max: 5,
            step: 0.01,
            value: {{$movie["rate"]}},
            markPreset: false,
            enabled:false
        });
     </script>
@endsection