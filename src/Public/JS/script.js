window.onload = function(){

    let btnSearch = document.querySelector('#btn_search');


    if(btnSearch){
        btnSearch.addEventListener('click', searchData);

    }

    function searchData(){
        let inputData = document.querySelector('#name').value;
        let searchResult = document.querySelector('#search-result');
        let xhttp = new XMLHttpRequest();
        xhttp.open("GET", "https://api.themoviedb.org/3/search/movie?api_key=6985e562c05ec6150e49c08a88da0226&language=fr&page=1&include_adult=false&query="+inputData);

        xhttp.send();

        xhttp.onreadystatechange = function(){
            if (this.readyState === 4 && this.status === 200){
                let dataApi = JSON.parse(this.responseText);

                console.log(dataApi);

                let contentMovies = document.querySelector('#search-result');

                let html = '';

                for(movie of dataApi.results){

                    html +=



                '   <div class="card mt-2" style="width: 28rem;">   ' +
                    '   <div class="card-body ">    '+
                        '  <div class="d-flex justify-content-center text-center">  ' +  
                                '   <h5 class="card-title"> '+   movie.title + '</h5>' +
                        '   </div>  '+
                         '  <img src="http://image.tmdb.org/t/p/w185/' + movie.poster_path + '" alt="" width=300px height=500px>   '+
                        '   <div class=" justify-content-center text-center">   '+
                            '    <p>'+ movie.release_date+ '</p>  '+
                            '  <div class="d-flex justify-content-center text-center">  ' +  
                                '   <h5 class="card-title"> '+   movie.overview + '</h5>' +
                        '      </div>  '+
                        '   </div>  '+
                    '   </div>  '+
                '   </div>  '
    
                }

                contentMovies.innerHTML = html;
            }
        }
    }
}

            

