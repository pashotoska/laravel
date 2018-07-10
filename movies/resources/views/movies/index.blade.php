@extends('app')
@section('content')
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-glow/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/movie.js') }}"></script>
	<div id="loading-screen">
		<div id="loading-screen-content">
			<div class="cssload-dots">
				<div class="cssload-dot"></div>
				<div class="cssload-dot"></div>
				<div class="cssload-dot"></div>
				<div class="cssload-dot"></div>
				<div class="cssload-dot"></div>
			</div>
			
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg">
				<defs>
					<filter id="goo">
						<feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="12" ></feGaussianBlur>
						<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0	0 1 0 0 0	0 0 1 0 0	0 0 0 18 -7" result="goo" ></	feColorMatrix>
						<!--<feBlend in2="goo" in="SourceGraphic" result="mix" ></feBlend>-->
					</filter>
				</defs>
			</svg>
			<h2>Loading Movie</h2>
		</div>
    </div>
    
    <div class="container">
        <div class="movie-container">
            <div class="movie-photo">
                <a href="#" id="moviePhotoLink">
                    <img id="moviePhoto" src="{{ asset('/uploads/avengers-infinity-war.jpg') }}">
                </a>
            </div>
            <div class="movie-content">
                <div class="movie-title">
                    <a href="#" id="movieTitleLink">
                        <h2 class="entry-title" id="movieTitle">Avengers: Infinity War</h2>
                    </a>
                </div>
                <div class="movie-description" id="movieDescription">
                    The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.
                </div>
                <div class="movie-tags col-sm-6">
                    Countries: <span id="movieCountries"><a href="#" rel="tag">USA</a></span> <br> 
                    Genres: <span id="movieGenres"><a href="#" rel="tag">Action</a>, <a href="#" rel="tag">Adventure</a>, <a href="#" rel="tag">Fantasy</a></span> <br> 
                    Ticket Price: <span id="moviePrice">$10</span><br>
                    Release Date: <span id="movieRelease">27 April 2018</span>
                </div>
                <div class="col-sm-6">
                    <div class="rating-block">
                        <h4>Average user rating</h4>
                        <h2 class="bold padding-bottom-7"><span id="currentMovieRate">4.3</span> <small>/ 5</small></h2>
                        <div class="rating" id="movieRate"></div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="pagination pull-right">
            <nav aria-label="Page navigation">
                <ul class="pagination" id="moviePagination">
                    <li>
                        <span class="disabled" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </span>
                    </li>
                    <li class="active"><span>1</span></li>
                    <li><span>2</span></li>
                    <li><span>3</span></li>
                    <li><span>4</span></li>
                    <li><span>5</span></li>
                    <li>
                    <span aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
<script>
    var __movies = new Movies();
    __movies.init("{{ url('/') }}");
</script>
@endsection