var movieApp = angular.module('myApp', ['ui.bootstrap', 'ngRoute']);


    movieApp.controller('SearchController', function($scope, $http) {

        var urlCreator = "";
        $scope.hideRelated = false;

        $scope.$watch('search', function() {
            fetch();
        });

        $scope.search = "deadpool";

        function fetch() {
            $scope.hideRelated = false;
            urlCreator = "http://www.omdbapi.com/?t=" + $scope.search + "&tomatoes=true&plot=full";
            $http.get(urlCreator)
                .then(function(response) {
                    $scope.details = response.data;
                });

            $http.get("http://www.omdbapi.com/?s=" + $scope.search)
                .then(function(response) {
                    $scope.related = response.data;
                });
        }

        $scope.update = function(movie) {
            $scope.search = movie.Title;
            $scope.hideRelated = true;
        };

        $scope.select = function() {
            this.setSelectionRange(0, this.value.length);
        }
    });

movieApp.config(['$routeProvider', '$locationProvider',
    function ($routeProvider, $locationProvider) {
        $routeProvider.
            when('/', {
                title: 'Home',
                templateUrl: 'src/views/search_view.php',
                controller: 'SearchController'
            })
            .otherwise({
                redirectTo: '/'
            });

        if (window.history && window.history.pushState) {

            $locationProvider.html5Mode(true);
        }
    }
]);
movieApp.run(['$location', '$rootScope', function ($location, $rootScope) {
    $rootScope.$on('$routeChangeSuccess', function (event, current, previous) {

    });
}]);