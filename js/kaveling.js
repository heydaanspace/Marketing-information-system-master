var crudApp = angular.module('readApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){

 getMhs();
 function getMhs()
 {
  $http.post('../read.php').success(function(data){
  
  $scope.database = data;
  });
 }
}]);