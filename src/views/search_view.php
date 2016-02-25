<?php
/**
 * Created by PhpStorm.
 * User: kepoly
 * Date: 2/24/2016
 * Time: 7:23 PM
 */
?>

<div class="container search_results" ng-controller="SearchController">

    <h1 class="search_title_h1">Start Your Collection</h1>

        <div class="input-group search-bar">
            <input type="text" ng-model="search" ng-model-options="{ debounce: 200 }" onclick="select()" class="form-control" placeholder="Enter full movie name" autofocus />
            <span class="input-group-addon bar-style"><i class="">GO</i></span>
        </div>

    <div ng-if="related.Response!=='False' && hideRelated!==true">
        <ul class="search_related">
            <li ng-repeat="movie in related.Search">
                <a href="#" id="{{ $index + 1 }}" ng-click="update(movie)">{{ movie.Title }}</a> ({{movie.Type}}) - {{ movie.Year }} <i class="addToCollection"><a href="">+</a></i>
            </li>
        </ul>
    </div>

        <div id="search_found_results">
            <div ng-if="!details">
Loading results...
            </div>

            <div ng-if="details.Response==='True'">

                <h1 id="search_found_results_title"><a href="http://imdb.com/title/{{ details.imdbID }}" target="_blank">{{ details.Title }}</a> <span> - {{ details.Year }}</span></h1>

<div class="col-md-4">

    <img ng-src="{{ details.Poster=='N/A' ? 'http://placehold.it/150x220&text=N/A' : details.Poster }}" class="thumbnail animated flip movie-poster">
</div>


<div class="col-md-6">

                <p>{{ details.Plot }}</p>
    <p><strong>Released on:</strong> {{ details.Released }} ({{ details.Runtime }})</p>

                <p class="outer-p">
                <div class="inner-p">
                    <span class="label label-primary">Directors :</span> {{ details.Director }}
                </div>
                <div class="inner-p">
                    <span class="label label-primary">Actors :</span> {{ details.Actors }}
                </div>
                <div class="inner-p">
                    <span class="label label-primary">Genre :</span> {{ details.Genre }}
                </div>
                <div class="inner-p">
                    <span class="label label-primary">Type :</span> {{ details.Type }}
                </div>
                </p>

                <p class="outer-p-2">Ratings:
                    <br>
                    <strong>IMDb Rating</strong>: <span class="label label-success">{{ details.imdbRating }}</span>
                    <br>
                    <strong>Rotten Tomatoes</strong>: <span class="label label-success">{{ details.tomatoRating }}</span>
                </p>

                <p class="outer-p-3">
                    <a ng-href="https://www.youtube.com/results?search_query={{ details.Title }}" target="_blank" class="btn btn-default btn-xs btn-info">Search Youtube!</a>
                    <span class="divider"></span>
                    <a ng-href="http://subscene.com/subtitles/title?q={{ details.Title }}" target="_blank" class="btn btn-default btn-xs btn-info">Find Subtitles!</a>
                    <span class="divider"></span>
                    <a ng-href="http://www.amazon.in/s/ref=nb_sb_noss_1?url=search-alias%3Ddvd&field-keywords={{ details.Title }}" target="_blank" class="btn btn-default btn-xs btn-info">Buy this!</a>
                </p>
                <button class="btn btn-success">Add to Collection</button>
                <button class="btn btn-danger">Remove from Collection</button>


            </div>
</div>
            <div ng-if="details.Response==='False'">
No results found.
            </div>
        </div>
</div>
