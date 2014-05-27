
angular.module('MVApp', []).
  config(['$routeProvider', function($routeProvider) {
  $routeProvider.
      when('/', {templateUrl: 'tpl/video-list.html', controller: ListCtrl}).
      when('/add-user', {templateUrl: 'tpl/user-add.html', controller: AddCtrl}).
      otherwise({redirectTo: '/'});
}]);

function ListCtrl($scope, $http) {
  $http.get('api/videos/list').success(function(data) {
    $scope.videos = data;
  });
}

function AddCtrl($scope, $http, $location) {
  $scope.master = {};
  $scope.activePath = null;
  $scope.add_new = function(user, AddNewForm) {
    console.log(user);
    $http.post('api/user/add', user).success(function(){
      $scope.reset();
      $scope.activePath = $location.path('/');
    });
    $scope.reset = function() {
      $scope.user = angular.copy($scope.master);
    };
    $scope.reset();
  };
}