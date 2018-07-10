var Movies = function(){
    var movieInstance = {};

    movieInstance.startPage = 0;
    movieInstance.limit = 1;
    movieInstance.totalMovies = 0;
    movieInstance.baseUrl = "";
    movieInstance.getTotal = true;
    movieInstance.currentMovie = {};

    movieInstance.moviePhoto;
    movieInstance.moviePagination;
    movieInstance.movieTitle;
    movieInstance.movieDescription;
    movieInstance.movieCountries;
    movieInstance.movieGenres;
    movieInstance.moviePrice;
    movieInstance.movieRelease;
    movieInstance.movieRate;
    movieInstance.moviePhotoLink;
    movieInstance.movieTitleLink;
    movieInstance.currentMovieRate;
    movieInstance.loadingScreen;
    //init function
    movieInstance.init = function(baseUrl){
        movieInstance.baseUrl= baseUrl;
        movieInstance.moviePhoto = $("#moviePhoto");
        movieInstance.moviePagination = $("#moviePagination");
        movieInstance.movieTitle = $("#movieTitle");
        movieInstance.movieDescription = $("#movieDescription");
        movieInstance.movieCountries = $("#movieCountries");
        movieInstance.movieGenres = $("#movieGenres");
        movieInstance.moviePrice = $("#moviePrice");
        movieInstance.movieRelease = $("#movieRelease");
        movieInstance.movieRate = $("#movieRate");
        movieInstance.moviePhotoLink = $("#moviePhotoLink");
        movieInstance.movieTitleLink = $("#movieTitleLink");
        movieInstance.currentMovieRate = $("#currentMovieRate");
        movieInstance.loadingScreen = $("#loading-screen");
        movieInstance.getMovie();
    }
    movieInstance.clearMovie = function(){
        movieInstance.moviePhoto.attr('src','');
        movieInstance.movieTitle.empty()
        movieInstance.movieDescription.empty()
        movieInstance.movieCountries.empty()
        movieInstance.movieGenres.empty()
        movieInstance.moviePrice.empty()
        movieInstance.movieRelease.empty()
        movieInstance.currentMovieRate.empty()
        movieInstance.moviePhotoLink.attr("href","#");
        movieInstance.movieTitleLink.attr("href","#");
    }
    movieInstance.getMovie = function(){
        movieInstance.loadingScreen.show();
        movieInstance.clearMovie();
        $.ajax({
            type: "GET",
            url: movieInstance.baseUrl+"/api/films?start="+movieInstance.startPage+"&limit="+movieInstance.limit+"&getTotal="+movieInstance.getTotal,
            dataType:'json',
            success: function(data){
                if(movieInstance.getTotal){
                    movieInstance.totalMovies = data.total;
                    movieInstance.getTotal = false;
                    movieInstance.paginate();
                }
                movieInstance.currentMovie = data.movie[0];
                movieInstance.displayMovie();
            },
            error:function(error){
                console.log(error);
            }
        })
    }
    movieInstance.paginate = function(){
        movieInstance.moviePagination.empty()
        if(movieInstance.totalMovies > 0){
            movieInstance.moviePagination.append('<li><span id="prevMovieButton" onclick="__movies.previous()" class="disabled" aria-label="Previous"><span aria-hidden="true">&laquo;</span></span></li>');
            movieInstance.moviePagination.append('<li id="page-0" class="active"><span onclick="__movies.goToPage(0)">1</span></li>');
            for(var i = 1; i< movieInstance.totalMovies;  i++){
                movieInstance.moviePagination.append('<li  id="page-'+i+'"><span onclick="__movies.goToPage('+i+')">'+(i+1)+'</span></li>');
            }
            movieInstance.moviePagination.append('<li><span  id="nextMovieButton" onclick="__movies.next()" aria-label="Next"><span aria-hidden="true">&raquo;</span></span></li>');
        }
    }
    movieInstance.displayMovie = function(){
        movieInstance.moviePhoto.attr('src',movieInstance.baseUrl+movieInstance.currentMovie.photo);
        movieInstance.movieTitle.html(movieInstance.currentMovie.name);
        movieInstance.movieDescription.html(movieInstance.currentMovie.description);
        movieInstance.movieCountries.html(movieInstance.currentMovie.country.name);
        var genres = movieInstance.currentMovie.movie_genres;
        var g ="";
        for(var i = 0; i <genres.length; i++){
            if(i == (genres.length -1 ))
                g+=genres[i].genres[0].name;
            else
                g+=genres[i].genres[0].name+", ";
        }
        movieInstance.movieGenres.html(g);
        movieInstance.moviePrice.html(movieInstance.currentMovie.ticket_price+" "+movieInstance.currentMovie.currency.currency);
        movieInstance.movieRelease.html(movieInstance.currentMovie.release_date);
        movieInstance.movieRate.shieldRating({
            max: 5,
            step: 0.01,
            value: movieInstance.currentMovie.rate,
            markPreset: false,
            enabled:false
        });
        movieInstance.movieRate.swidget().refresh();
        movieInstance.currentMovieRate.html(movieInstance.currentMovie.rate);
        movieInstance.loadingScreen.hide();
    }
    movieInstance.previous = function(){
        if(movieInstance.startPage == 0){
            return;
        }
        $("#page-"+movieInstance.startPage).removeClass("active");
        movieInstance.startPage --;
        $("#page-"+movieInstance.startPage).addClass("active");
        movieInstance.getMovie();
        movieInstance.checkPages();
    }
    
    movieInstance.next = function(){
        if(movieInstance.startPage == (movieInstance.totalMovies -1)){
            return;
        }
        $("#page-"+movieInstance.startPage).removeClass("active");
        movieInstance.startPage ++;
        $("#page-"+movieInstance.startPage).addClass("active");
        movieInstance.getMovie();
        movieInstance.checkPages();
    }
    movieInstance.checkPages=function(){
        if(movieInstance.startPage == 0){
            $("#prevMovieButton").addClass("disabled");
        }else{
            $("#prevMovieButton").removeClass("disabled");
        }
        if(movieInstance.startPage == (movieInstance.totalMovies -1)){
            $("#nextMovieButton").addClass("disabled");
        }else{
            $("#nextMovieButton").removeClass("disabled");
        }
    }
    movieInstance.goToPage = function(i){
        $("#page-"+movieInstance.startPage).removeClass("active");
        movieInstance.startPage = i; 
        $("#page-"+movieInstance.startPage).addClass("active");
        movieInstance.getMovie();
        movieInstance.checkPages();
    }
    return movieInstance;

}